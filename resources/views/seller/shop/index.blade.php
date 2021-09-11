<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Chabikathi – Marchent</title>
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('asset/backend/assets/js/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/backend/assets/js/plugins/slick/slick-theme.css')}}">
    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('asset/backend/assets/css/codebase.min.css')}}">
</head>

<body>
    <div id="page-container" class="main-content-boxed">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-body-dark bg-pattern"
                style="background-image: url('/asset/backend/assets/media/various/bg-pattern-inverse.png');">
                <div class="row mx-0 justify-content-center">
                    <div class="hero-static col-lg-6 col-xl-5">
                        <div class="content content-full overflow-hidden">
                            <!-- Header -->
                            <div class="py-10 text-center">
                                <h1 class="h4 font-w700 mt-10 mb-10">Create New Account</h1>
                            </div>
                            <form class="js-validation-signup" action="{{route('seller.update')}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-header bg-gd-emerald">
                                        <h3 class="block-title">Please add your details</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="signup-email">Shop Name</label>
                                                <input type="text" class="form-control" id="signup-email"
                                                    value="{{auth('seller')->user()->shop_name}}" name="shop_name"
                                                    placeholder="eg: chabikathi shop" required>
                                            </div>
                                        </div>

                                        <label>Shop Image <span class="text-danger">*</span></label>
                                        <input type='file' name="image" required="" onchange="readURL(this);" />
                                        <img id="blah" src="{{asset('asset/seller/assets/media/photos/image.png')}}"
                                            height="200" width="200" alt="your image" /><br>

                                        <div class="form-group row mb-0">
                                            <div class="col-sm-6 push">

                                            </div>
                                            <div class="col-sm-6 text-sm-right push">
                                                <button type="submit" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-10"></i> Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Terms Modal -->

    <!-- END Terms Modal -->
    <script src="{{ asset('asset/backend/assets/js/codebase.core.min.js')}}"></script>
    <script src="{{ asset('asset/backend/assets/js/codebase.app.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('asset/backend/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('asset/backend/assets/js/pages/op_auth_signup.min.js')}}"></script>
</body>

</html>