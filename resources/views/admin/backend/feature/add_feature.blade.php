@extends('admin.admin_master')    
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content">
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Add Feature</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create New Feature</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form id="myForm" action="{{ route('store_feature') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">title </label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">description</label>
                                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="icon" class="form-label">icon</label>
                                        <input type="file" name="icon" class="form-control" id="icon">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="showImage" class="form-label"></label>
                                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="feature Image" class="rounded-circle avatar-lg img-thumbnail">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save feature</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
