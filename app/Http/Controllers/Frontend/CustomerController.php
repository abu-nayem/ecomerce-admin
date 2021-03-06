<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\MSG;
use Session;
class CustomerController extends Controller
{
    public function index(){
    		$allCustomer=Customer::all();
    		return view('admin.customer.customerlist',['allCustomer'=>$allCustomer]);
    }
         public function msg(Request $re){
        $msg=new MSG;       
        $msg->email=$re->email;
        $msg->name=$re->name;
        $msg->phone=$re->phone;
        $msg->subject=$re->subject;
        $msg->email=$re->email;  
        $msg->save();
       
        return redirect('/');


    }
     public function customerData(Request $re){
        $customer=new Customer;       
        $customer->email=$re->email;
        $customer->first_name=$re->first_name;    
        $customer->address=$re->address;
        $customer->phone=$re->phone;
        $customer->city=$re->city;
        $customer->division=$re->division;
        $customer->password=bcrypt($re->password);
        $customer->last_name=$re->zip;
        $customer->save();
        $customer_id=$customer->id;
        Session::put('customer_id',$customer_id);
        return redirect('/checkout');


    }
    public function customerlogin(Request $request){
        $email= $request->login_email;
        $password= $request->login_password;
        $result = DB::table('customers')->where('email',$email)
             ->where('status','active')
            ->first();
            if($result){
            
    
                    if(Hash::check($password, $result->password))
                    {
                        Session::put('name',$result->first_name);
                        Session::put('customer_id',$result->id);
                        
                        return Redirect::to('/checkout');
                    }
                    session()->flash('exception', 'Your Username or Password is Invalid');
                    return Redirect::to('/customer/login');
         }
                else{
                    session()->flash('exception', 'You are not a valid User!!');
                    return Redirect::to('/customer/login');
                } 
            } 
}
