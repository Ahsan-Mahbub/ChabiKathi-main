{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <form class="form-horizontal" action="{{route('seller.store')}}" method="post">
@csrf
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h2>Registration</h2>
<div class="form-group">
    <label for="firstName" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-9">
        <input type="text" id="firstName" placeholder="First Name" name="first_name" class="form-control" required>
    </div>
</div>
<div class="form-group">
    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-9">
        <input type="text" id="lastName" placeholder="Last Name" name="last_name" class="form-control" required>
    </div>
</div>
<div class="form-group">
    <label for="lastName" class="col-sm-3 control-label">shop Name</label>
    <div class="col-sm-9">
        <input type="text" id="shop_Name" placeholder="Last Name" name="shop_name" class="form-control" required>
    </div>
</div>
<div class="form-group">
    <label for="lastName" class="col-sm-3 control-label">shop address</label>
    <div class="col-sm-9">
        <input type="text" id="shop_address" placeholder="Last Name" name="shop_address" class="form-control" required>
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email* </label>
    <div class="col-sm-9">
        <input type="email" id="email" placeholder="Email" class="form-control" name="email" required>
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password*</label>
    <div class="col-sm-9">
        <input type="password" id="password" name="password" placeholder="Password" value="" class="form-control"
            min="6" required> <span id="message"></span>
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
    <div class="col-sm-9">
        <input type="password" id="c_password" name="c_Password" placeholder="c_Password" value="" class="form-control"
            required> <span id="messages"></span>
    </div>
</div>

<div class="form-group">
    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
    <div class="col-sm-9">
        <input type="phoneNumber" id="phoneNumber" name="contact" placeholder="Phone number" class="form-control">
        <span class="help-block">Your phone number won't be disclosed anywhere </span>
    </div>
</div>



<button type="submit" value="Submit" class="btn btn-primary btn-block">Register</button>
<div class=" mt-3 create">
    <h2 class="fcreate">Already a Member? <a class="ant-typography" href="{{route('seller.loginView')}}">Sing
            In</a>
    </h2>
</div>
</form> <!-- /form -->
</div> <!-- ./container --> --}}


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
                            <form class="js-validation-signup" action="{{route('seller.store')}}" method="post">
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
                                                <label for="signup-username">First Name</label>
                                                <input type="text" class="form-control" id="signup-username"
                                                    name="first_name" placeholder="eg: john_smith" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="signup-username">Last Name</label>
                                                <input type="text" class="form-control" id="signup-username"
                                                    name="last_name" placeholder="eg: john_smith" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="signup-email">Email</label>
                                                <input type="email" class="form-control" id="signup-email" name="email"
                                                    placeholder="eg: john@example.com" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="signup-email">Phone</label>
                                                <input type="text" maxlength="11" class="form-control" id="signup-email"
                                                    name="contact" placeholder="01**********" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="signup-email">Shop Name</label>
                                                <input type="text" class="form-control" id="signup-email"
                                                    name="shop_name" placeholder="eg: chabikathi shop" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="signup-password">Password</label>
                                                <input type="password" class="form-control" id="signup-password"
                                                    name="password" placeholder="********" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="signup-password-confirm">Password Confirmation</label>
                                                <input type="password" class="form-control" id="signup-password-confirm"
                                                    name="c_password" placeholder="********" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-6 push">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="signup-terms" name="signup-terms">
                                                    <label class="custom-control-label" for="signup-terms">I agree to
                                                        Terms &amp; Conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-sm-right push">
                                                <button type="submit" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-10"></i> Create Account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content bg-body-light">
                                        <div class="form-group text-center">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#"
                                                data-toggle="modal" data-target="#modal-terms">
                                                <i class="fa fa-book text-muted mr-5"></i> Read Terms
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block"
                                                href="{{route('seller.loginView')}}">
                                                <i class="fa fa-user text-muted mr-5"></i> Sign In
                                            </a>
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
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh
                            orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh
                            orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh
                            orci.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Perfect
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->
    <script src="{{ asset('asset/backend/assets/js/codebase.core.min.js')}}"></script>
    <script src="{{ asset('asset/backend/assets/js/codebase.app.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('asset/backend/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('asset/backend/assets/js/pages/op_auth_signup.min.js')}}"></script>
</body>

</html>