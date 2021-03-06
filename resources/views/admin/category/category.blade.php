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
								                <th>Image</th>
								                <th>Name</th>
								                <th>Discount</th>
								                <th>Status</th>
								                <th>Action</th>
								                
								            </tr>
								        </thead>
								        <tbody>
								        	@foreach($categories as $category)
								            <tr>
								                <td>
                            
                                                <img src="{{asset('public/images/'.$category->image)}}" height="100px" width="100px" alt="Category Image">                        
                                                </td>
								                <td>{{$category->category_name}}</td>
								                <td>{{($category->discount)}}</td>
								                
								                <td>
								                	<?php if($category->status=='active'){?>
								                		<div class='badge badge-success'>active</div>
								                	<?php }else{?>
								                		<div class='badge badge-danger'>deactive</div>
								                	<?php }?>
								                </td>
								                <td>
								                	<button type='button' class='btn btn-success btn-xs updatebtn' id='updatebtn' data-toggle="modal" data-target="#updateCategory" data-name="{{$category->category_name}}"  data-id="{{$category->id}}"  ><i class='fa fa-edit'></i></button>
								                <a href="{{url('/admin/category/delete/'.$category->id)}}">	<button type='button' class='btn btn-danger btn-xs' onclick="return confirm('Are You sure')"><i class='fa fa-times'></i></buttpn></a>
                    
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
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">New Product Category</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="{{route('admin.category.store')}}" enctype="multipart/form-data" method="post">
                                                    	@csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="category_name" class="mb-1">Category Name :</label>
                                                                <input class="form-control"  name="category_name" type="text" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category_name" class="mb-1">Discount(if want) :</label>
                                                                <input class="form-control" id="dicount" name="dicount" type="text" >
                                                            </div>
                                                             <div class="form-group">
                                                                <label for="category_name" class="mb-1">Image :</label>
                                                                <input class="form-control" id="dicount" name="image" type="file" >
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="col-form-label"><span>*</span> Status</label>
                                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                <label class="d-block" for="edo-ani">
                                                                    <input class="radio_animated" checked="" id="edo-ani" type="radio" name="status" value="active">
                                                                    Enable
                                                                </label>
                                                                <label class="d-block" for="edo-ani1">
                                                                    <input class="radio_animated" id="edo-ani1" type="radio" name="status" value="deactive">
                                                                    Disable
                                                                </label>
                                                            </div>
                                                        </div>
                                                            <!-- <div class="form-group mb-0">
                                                                <label for="image" class="mb-1">Category Image :</label>
                                                                <input class="form-control" name="image" id="image" type="file">
                                                            </div> -->
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

                                      <div class="modal fade" id="updateCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Product Category</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" enctype="multipart/form-data" action="{{route('admin.category.update')}}" method="post">
                                                        @csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="category_name" class="mb-1">Category Name :</label>
                                                                <input class="form-control" id="category_name" name="category_name" type="text" required="">
                                                                <input class="form-control" id="category_id" name="id" type="hidden" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category_name" class="mb-1">Discount(if want) :</label>
                                                                <input class="form-control" id="dicount" name="dicount" type="text" >
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="col-form-label"><span>*</span> Status</label>
                                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                <label class="d-block" for="edo-ani">
                                                                    <input class="radio_animated" <?php if($category->status=='active'){ echo "checked";} ?> id="edo-ani" type="radio" name="status" value="active">
                                                                    Enable
                                                                </label>
                                                                <label class="d-block" for="edo-ani1">
                                                                    <input class="radio_animated" <?php if($category->status=='deactive'){ echo "checked";} ?> id="edo-ani1" type="radio" name="status" value="deactive">
                                                                    Disable
                                                                </label>
                                                            </div>
                                                        </div>
                                                            <div class="form-group mb-0">
                                                                <label for="image" class="mb-1">Category Image :</label>
                                                                <img src="{{asset('public/images/'.$category->image)}}">
                                                                <input class="form-control" name="update_image" id="image" type="file">
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
                                             $('#category').addClass('active');
                                        })
                                        $('#example').on('click','.updatebtn',function(){
                                            var id=$(this).data('id');
                                             var name=$(this).data('name');

                                             $('#category_id').val(id);
                                            $('#category_name').val(name);

                                        })
                                    </script>
								@endsection