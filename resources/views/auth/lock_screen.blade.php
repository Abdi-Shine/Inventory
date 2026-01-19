<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lock Screen | IMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A full featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Zoyothemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-white">

    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">
                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-md-7 mx-auto">
                            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                <div class="mb-4 p-0">
                                    <a href="{{ route('login') }}" class="auth-logo">
                                        <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="logo-dark" class="mx-auto" height="28" />
                                    </a>
                                </div>

                                <div class="pt-0">
                                    <div class="text-center">
                                        <img src="{{ (!empty($photo)) ? url('upload/admin_images/'.$photo) : url('upload/no_image.jpg') }}" alt="user-image" class="rounded-circle avatar-lg img-thumbnail mb-4">
                                        <h4 class="mb-2 text-muted fw-semibold">Hi ! {{ $name }}</h4>
                                        <p class="text-muted mb-4">Enter your password to access the admin.</p>
                                    </div>

                                    <form class="my-4" action="{{ route('admin.login') }}" method="post">
                                        @csrf
                                        
                                        <!-- Hidden Email Field -->
                                        <input type="hidden" name="email" value="{{ $email }}">

                                        <div class="form-group mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                        </div>

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary" type="submit"> Unlock </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <div class="text-center text-muted">
                                        <p class="mb-0">Not you ? return <a href="{{ route('login') }}" class="text-primary ms-2 fw-medium">Sign In</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="account-page-bg p-md-5 p-4">
                        <div class="text-center">
                            <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With HornTech Ltd</h3>
                            <div class="auth-image">
                                <img src="{{asset('backend/assets/images/authentication.svg')}}" class="mx-auto img-fluid" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor -->
    <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/feather-icons/feather.min.js')}}"></script>

    <!-- App js-->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>

</body>
</html>
