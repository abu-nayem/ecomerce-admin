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
                <form action="{{url('/admin/faq/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row product-adding">
                    <div class="col-xl-6">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="question" class="col-form-label pt-0"><span>*</span> Question</label>
                                        <input class="form-control" name="question" id="question" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-form-label pt-0"><span>*</span> Asnwer</label>
                                       <textarea id="editor1" name="answer" cols="10" rows="4"></textarea>
                                    </div>
                                      
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-6">
                        
                       
                    </div>
                    <div style="padding-left: 20%">
                   <button type="submit" class="btn btn-primary pull-right">Submit</button>
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