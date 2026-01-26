@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="content">
     <div class="container-xxl">
           <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
           <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Admin Profile</h4>
           </div>
         </div>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="{{(!empty($profiledata->photo)) ? url('upload/admin_images/'.$profiledata->photo):url('upload/no_image.jpg')}}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">

                        <div class="overflow-hidden ms-4">
                            <h4 class="m-0 text-dark fs-20">{{$profiledata->name}}</h4>
                            <p class="my-1 text-muted fs-16">{{$profiledata->email}}</p>
                            <span class="fs-15"><i class="mdi mdi-message me-2 align-middle"></i>Speaks: <span>English <span class="badge bg-primary-subtle text-primary px-2 py-1 fs-13 fw-normal">native</span> , Bitish, Turkish </span></span>
                        </div>
                    </div>
                </div>
<div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
<div class="row">

<div class="row">
<div class="col-lg-6 col-xl-6">
<div class="card border mb-0">

<div class="card-header">
    <div class="row align-items-center">
        <div class="col">                      
            <h4 class="card-title mb-0">Personal Information</h4>                      
        </div><!--end col-->                                                       
    </div>
</div>
<form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="card-body">
    <div class="form-group mb-3 row">
        <label class="form-label">Full Name</label>
        <div class="col-lg-12 col-xl-12">
            <input class="form-control" type="text" name="name" value="{{$profiledata->name}}">
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label class="form-label">Email</label>
        <div class="col-lg-12 col-xl-12">
            <input class="form-control" type="email" name="email" value="{{$profiledata->email}}">
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label class="form-label">Phone</label>
        <div class="col-lg-12 col-xl-12">
            <input class="form-control" type="number" name="phone" value="{{$profiledata->phone}}">
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label class="form-label">Address</label>
        <div class="col-lg-12 col-xl-12">
            <textarea class="form-control" name="address">{{$profiledata->address}}</textarea>
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label class="form-label">Profile Photo</label>
        <div class="col-lg-12 col-xl-12">
            <input type="file" class="form-control" id="image" name="photo">
        </div>
    </div>

    <div class="form-group mb-3 row">
        <div class="col-lg-12 col-xl-12">
           <img id="showimg" src="{{(!empty($profiledata->photo)) ? url('upload/admin_images/'.$profiledata->photo):url('upload/no_image.jpg')}}"
            class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
        </div>
    </div>
     <button type="submit" class="btn btn-primary">Update Profile</button>
</div><!--end card-body-->
</form>
    </div>
</div>
<div class="col-lg-6 col-xl-6">
<div class="card border mb-0">

    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">                      
                <h4 class="card-title mb-0">Change Password</h4>                      
            </div><!--end col-->                                                       
        </div>
    </div>
<form action="{{route('admin.password.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body mb-0">
          <div class="form-group mb-3 row">
             <label class="form-label">Old Password</label>
              <div class="col-lg-12 col-xl-12">
                <input class="form-control @error('old_password') is-invalid @enderror" type="password" name="old_password" id="old_password" placeholder="Old Password">
                @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
         </div>
         <div class="form-group mb-3 row">
            <label class="form-label">New Password</label>
            <div class="col-lg-12 col-xl-12">
                <input class="form-control @error('new_password') is-invalid @enderror" type="password" name="new_password" id="new_password" placeholder="New Password">
                @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="form-label">Confirm Password</label>
            <div class="col-lg-12 col-xl-12">
                <input class="form-control @error('confirm_password') is-invalid @enderror" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                @error('confirm_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <button type="submit" class="btn btn-primary">Change Password</button>
                <button type="button" class="btn btn-danger">Cancel</button>
            </div>
        </div>

    </div><!--end card-body-->
</form>
</div>
</div>
</div>
</div>

<div class="row mt-4">
    <div class="col-lg-12 col-xl-12">
        <div class="card border mb-0">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">                      
                        <h4 class="card-title mb-0">Two Factor Authentication</h4>                      
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if($profiledata->two_factor_enabled)
                    <p class="text-success fs-16">Two factor authentication is currently enabled.</p>
                    <form action="{{ route('admin.two_factor.update') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Disable</button>
                    </form>
                @else
                    <p class="text-muted fs-16">Two factor authentication is currently disabled.</p>
                    <form action="{{ route('admin.two_factor.update') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Enable</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div> <!-- end education -->

</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#image').change(function (e) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showimg').attr('src', e.target.result);
            };

            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
@endsection
