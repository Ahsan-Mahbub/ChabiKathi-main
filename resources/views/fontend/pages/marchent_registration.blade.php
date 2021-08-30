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
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
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
                <div class="bg-body-dark bg-pattern" style="background-image: url('/asset/backend/assets/media/various/bg-pattern-inverse.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-5">
                            <div class="content content-full overflow-hidden">
                                <!-- Header -->
                                <div class="py-10 text-center">
                                    <h1 class="h4 font-w700 mt-10 mb-10">Create New Account</h1>
                                </div>
                                <form class="js-validation-signup" action="be_pages_auth_all.html" method="post">
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
                                                    <label for="signup-username">Username</label>
                                                    <input type="text" class="form-control" id="signup-username" name="signup-username" placeholder="eg: john_smith">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-email">Email</label>
                                                    <input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="eg: john@example.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-email">Phone</label>
                                                    <input type="text" maxlength="11" class="form-control" id="signup-email" name="signup-email" placeholder="01**********">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-email">Shop Name</label>
                                                    <input type="text" class="form-control" id="signup-email" name="signup-email" placeholder="eg: chabikathi shop">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-password">Password</label>
                                                    <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="********">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-password-confirm">Password Confirmation</label>
                                                    <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm" placeholder="********">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-6 push">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                        <label class="custom-control-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
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
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                                    <i class="fa fa-book text-muted mr-5"></i> Read Terms
                                                </a>
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signin3.html">
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
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
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
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
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