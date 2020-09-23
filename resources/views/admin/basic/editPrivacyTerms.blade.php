@extends('admin.admin_master')
@section('mainContent')
 <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- <div class="page-header-left">
                                <h3>Add Products
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div> -->
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <form action="{{url('/admin/privacy/update')}}" id="updateProduct" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row product-adding">
                   
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{$privacy_terms->status}}</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group mb-0">
                                        <div class="description-sm">
                                            <textarea id="editor1" name="description" cols="10" rows="4">{{$privacy_terms->description}}</textarea>
                                            <input type="hidden" name="id" value="{{$privacy_terms->id}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="text-center" style="padding-left: 30%;padding-bottom: 20px ">
                   <button type="submit" class="btn btn-primary text-center" >Update</button>
                   </div>
                </div>
                </form>
            </div>
            <!-- Container-fluid Ends-->

        </div>



<script>
  $('documnet').ready(function(){
    $('#product').addClass('open active');
   
  })
</script>



<script src="{{asset('public/admin/assets/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor')
    //bootstrap WYSIHTML5 - text editor
    
  })
</script>

@endsection