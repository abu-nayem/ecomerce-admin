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
                <form action="{{url('/admin/faq/update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row product-adding">
                    <div class="col-xl-6">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="question" class="col-form-label pt-0"><span>*</span> Question</label>
                                        <input class="form-control" name="question" id="question" type="text" required="" value="{{$faq->question}}">
                                        <input class="form-control" name="id" id="question" type="hidden" required="" value="{{$faq->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-form-label pt-0"><span>*</span> Asnwer</label>
                                       <textarea id="editor1" name="answer" cols="10" rows="4">{{$faq->ans}}</textarea>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Status</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" <?php if($faq->status=='active'){echo "checked";}?> id="edo-ani" type="radio" name="status" value="active">
                                                Enable
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" <?php if($faq->status=='deactive'){echo "checked";}?>  id="edo-ani1" type="radio" name="status" value="deactive">
                                                Disable
                                            </label>
                                        </div>
                                    </div> 
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-6">
                        
                       
                    </div>
                    <div style="padding-left: 20%">
                   <button type="submit" class="btn btn-primary pull-right">Update</button>
                   </div>
                </div>
                </form>
            </div>
            <!-- Container-fluid Ends-->

        </div>


<!-- ckeditor js-->
<script src="{{asset('public/admin/dropzone/dist/dropzone.js')}}"></script>
<script>
  $('documnet').ready(function(){
    $('#basic').addClass('open active');
    $('#faq-new').addClass('active');
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