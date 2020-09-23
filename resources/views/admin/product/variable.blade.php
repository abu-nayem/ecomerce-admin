@extends('admin.admin_master')
@section('mainContent')
   <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- <div class="page-header-left">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">New size</button>
                            </div> -->
                            
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">size</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="" style="padding-bottom: 10px">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">New Size</button>
                            </div>
                        <div class="card">
                        
                            <div class="card-body">                               
                                 
                               
                                <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical"></div>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
								                
								                <th>Size</th>
								               <!--  <th>Status</th> -->
								                <th>Action</th>
								                
								            </tr>
								        </thead>
								        <tbody>
								        	@foreach($sizes as $size)
								            <tr>
								             
								                <td>{{$size->size}}</td>
								                <!-- <td>
								                	<?php if($size->status=='active'){?>
								                		<div class='badge badge-success'>active</div>
								                	<?php }else{?>
								                		<div class='badge badge-danger'>deactive</div>
								                	<?php }?>
								                </td> -->
								                <td>
								                	<button type='button' class='btn btn-success btn-xs updatebtn' id='updatebtn' data-toggle="modal" data-target="#updatesize" data-name="{{$size->size}}"  data-id="{{$size->id}}"  ><i class='fa fa-edit'></i></button>
								                <a href="{{url('/admin/size/delete/'.$size->id)}}">	<button type='button' class='btn btn-danger btn-xs' onclick="return confirm('Are You sure')"><i class='fa fa-times'></i></buttpn></a>
                    
								                </td>
								                
								            </tr>
                               
								           @endforeach
								        </tbody>

								    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                            <div class="" style="padding-bottom: 10px">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModalColor">New Color</button>
                            </div>
                        <div class="card">
                        
                            <div class="card-body">                               
                                 
                               
                                <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical"></div>
                                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                                <th>Color</th>     
                                                <!-- <th>Status</th> -->
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($colors as $color)
                                            <tr>
                                                
                                                <td>{{$color->color}}</td>   
                                                
                                                <!-- <td>
                                                    <?php if($color->status=='active'){?>
                                                        <div class='badge badge-success'>active</div>
                                                    <?php }else{?>
                                                        <div class='badge badge-danger'>deactive</div>
                                                    <?php }?>
                                                </td> -->
                                                <td>
                                                    <button type='button' class='btn btn-success btn-xs updatebtn' id='updatebtn' data-toggle="modal" data-target="#updatecolor" data-name="{{$color->color}}"  data-id="{{$color->id}}"  ><i class='fa fa-edit'></i></button>
                                                <a href="{{url('/admin/size/delete/'.$size->id)}}"> <button type='button' class='btn btn-danger btn-xs' onclick="return confirm('Are You sure')"><i class='fa fa-times'></i></buttpn></a>
                    
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

             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">New Product size</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="{{route('admin.size.store')}}" enctype="multipart/form-data" method="post">
                                                    	@csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="size_name" class="mb-1">Size :</label>
                                                                <input class="form-control"  name="size_name" type="text" required="">
                                                            </div>
                                                         
                                                        </div>
                                                       
                                                        </div>
                                                        <div class="modal-footer">
			                                                   
			                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                 <button type="submit" class="btn btn-primary" type="button">Submit</button>
	                                               		 </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                </div>


                <div class="modal fade" id="exampleModalColor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">New Product Color</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="{{route('admin.color.store')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="color_name" class="mb-1">Color :</label>
                                                                <input class="form-control"  name="color_name" type="text" required="">
                                                            </div>
                                                         
                                                        </div>
                                                       
                                                        </div>
                                                        <div class="modal-footer">
                                                               
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                 <button type="submit" class="btn btn-primary" type="button">Submit</button>
                                                         </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                </div>

                                      <div class="modal fade" id="updatesize" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Product size</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" enctype="multipart/form-data" action="{{route('admin.size.update')}}" method="post">
                                                        @csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="size_name" class="mb-1">size Name :</label>
                                                                <input class="form-control" id="size_name" name="size_name" type="text" required="">
                                                                <input class="form-control" id="size_id" name="size_id" type="hidden" >
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                               
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                 <button type="submit" class="btn btn-primary" type="button">Update</button>
                                                         </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                      <div class="modal fade" id="updatecolor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Product Color</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" enctype="multipart/form-data" action="{{route('admin.color.update')}}" method="post">
                                                        @csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="size_name" class="mb-1">Color Name :</label>
                                                                <input class="form-control" id="color_name" name="color_name" type="text" required="">
                                                                <input class="form-control" id="color_id" name="color_id" type="hidden" >
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                               
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                 <button type="submit" class="btn btn-primary" type="button">Update</button>
                                                         </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $('document').ready(function(){
                                            $('#product').addClass('open active');
                                             $('#variable').addClass('active');
                                        })
                                        $('#example').on('click','.updatebtn',function(){
                                            var id=$(this).data('id');
                                             var name=$(this).data('name');

                                             $('#size_id').val(id);
                                            $('#size_name').val(name);

                                        })
                                         $('#example2').on('click','.updatebtn',function(){
                                            var id=$(this).data('id');
                                             var name=$(this).data('name');

                                             $('#color_id').val(id);
                                            $('#color_name').val(name);

                                        })
                                    </script>
								@endsection