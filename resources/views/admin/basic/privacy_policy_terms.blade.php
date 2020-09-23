@extends('admin.admin_master')
@section('mainContent')
   <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Category</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                        
                            <div class="card-body">                               
                                 
                               
                                <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical"></div>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
								               
								                <th>Text</th>
								                <th>Status</th>
								                <th>Action</th>
								                
								            </tr>
								        </thead>
								        <tbody>
								        	@foreach($privacy as $data)
								            <tr>
								             
								                <td>{!! $data->description !!}</td>
								                <td>{{$data->status}}  </td>
								                <td>
								                	
								                <a href="{{url('/admin/basic/edit/'.$data->id)}}">	<button type='button' class='btn btn-danger btn-xs' ><i class='fa fa-edit'></i></buttpn></a>
                    
								                </td>
								                
								            </tr>
                               
								           @endforeach
								        </tbody>

								    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

                                    <script type="text/javascript">
                                        $('document').ready(function(){
                                            $('#basic').addClass('open active');
                                             $('#privacy').addClass('active');
                                        })
                                        
                                       
                                    </script>
								@endsection