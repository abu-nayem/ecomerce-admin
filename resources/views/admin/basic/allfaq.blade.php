@extends('admin.admin_master')
@section('mainContent')
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                           
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Basic</li>
                                <li class="breadcrumb-item active">FAQ</li>
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
                                    <div id="basicScenario" class="data-physical"></div>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
								                <th>SL</th>
								                <th>Question</th>
                                                <th>Ans</th>          
								                <th>Status</th>
								                <th>Action</th>
								                
								            </tr>
								        </thead>
								        <tbody>
                                            @php $i=1; @endphp
								        	@foreach($faq as $data)
								            <tr>
                                                <td>{{$i++}}</td>
								                <td>{{$data->question}}</td>
								                <td>{!! $data->ans !!}</td> 
								                <td>
								                	<?php if($data->status=='active'){?>
								                		<div class='badge badge-success'>active</div>
								                	<?php }else{?>
								                		<div class='badge badge-danger'>inactive</div>
								                	<?php }?>
								                </td>
								                <td>
                                                 
								                <a href="{{url('/admin/faq/edit/'.$data->id)}}">	<button type='button' style="line-height: 0.5; border-radius: 1.25rem;" class='btn btn-primary btn-xs updatebtn' id='updatebtn'><i class='fa fa-edit'></i></button>
                                                    </a>
								                <a href="{{url('/admin/faq/delete/'.$data->id)}}">	<button type='button' style="line-height: 0.5; border-radius: 1.25rem;" class='btn btn-danger btn-xs' onclick="return confirm('Are You sure')"><i class='fa fa-times'></i></buttpn></a>
                    
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
                                             $('#faq').addClass('active');
                                        })
                                    </script>
@endsection