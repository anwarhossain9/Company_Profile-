
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper/saas/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 14:58:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Register | Institute</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        {{-- <!-- App favicon -->
        <link rel="shortcut icon" href=""> --}}

        <!-- App css -->
        <link href="{{ asset('/') }}backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}backend/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

    </head>

    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="{{ route('admin.dashboard') }}">
                                    <span><img src="" alt="" height="50" width="50"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">

                            <div class="mb-4 text-sm text-gray-600">
            <span>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</span>
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                                
                               

                                <form action="{{ route('password.email') }}" method="post">
                                    @csrf

                                    

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>

                                    


                                    

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit">Email Password Reset Link</button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> © Institute
        </footer>

        <!-- bundle -->
        <script src="{{ asset('/') }}backend/assets/js/vendor.min.js"></script>
        <script src="{{ asset('/') }}backend/assets/js/app.min.js"></script>
        
    </body>

</html>
