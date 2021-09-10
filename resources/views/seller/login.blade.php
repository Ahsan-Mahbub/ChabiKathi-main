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
            <div class="bg-image" style="background-image: url('/asset/backend/assets/media/photos/photo34@2x.jpg')">
                <div class="row mx-0 bg-black-op">
                    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                        <div class="p-30 pb-150 invisible" data-toggle="appear">
                            <p class="font-size-h3 font-w600 text-white">
                                Get started selling
                            </p>
                        </div>
                    </div>
                    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible"
                        data-toggle="appear" data-class="animated fadeInRight">
                        <div class="content content-full">
                            <!-- Header -->
                            <div class="px-30 py-10">
                                <div style="display: block;">
                                    <img height="auto" width="60%"
                                        src="{{ asset('asset/backend/assets/media/favicons/Logo-2.png')}}">
                                </div>
                                <span class="font-size-xl text-primary-dark">Become A</span>
                                <br>
                                <span class="font-size-xl text-danger font-w800">ChabiKathi</span><span
                                    class="font-size-xl text-primary-dark">&nbsp;Merchent</span>

                            </div>
                            <form class="js-validation-signin px-30" action="{{route('seller.login')}}" method="post">
                                @csrf
                                <h2 class="h5 font-w800 text-primary mb-0">Please sign in</h2>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email" class="form-control" id="login-username" name="email">
                                            <label for="login-username">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="login-password"
                                                name="password">
                                            <label for="login-password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                        <i class="si si-login mr-10"></i> Sign In
                                    </button>
                                    <div class="mt-30">
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block"
                                            href="{{route('seller.registers')}}">
                                            <i class="fa fa-plus mr-5"></i> Create Account
                                        </a>
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block"
                                            href="{{route('seller.forget')}}">
                                            <i class="fa fa-warning mr-5"></i> Forgot Password
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>

    <script src="{{ asset('asset/backend/assets/js/codebase.core.min.js')}}"></script>

    <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="{{ asset('asset/backend/assets/js/codebase.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('asset/backend/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('asset/backend/assets/js/pages/op_auth_signin.min.js')}}"></script>
</body>

</html>

{{-- 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/marcent.css')}}" />
<title>Chabikathi – Anything At Anywhere</title>
<link rel="icon" href="{{ asset('asset/fontend/asset/img/Logo-2.png')}}" sizes="16x16">

<!-- Script -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript">

</script>
</script>
</head>

<body>

    <section class="marcent-login-page">
        <div class="col-md-12">
            <div class="col-md-7 left-side">
                <div class="content-side">
                    <div class="img-logo">
                        <img src="{{ asset('asset/fontend/asset/img/Logo-2.png')}}">
                    </div>
                    <h2 class="sfont">Get started selling </h2>
                    <h2 class="put">Put your products infront of more than 40 million</h2>
                    <h2 class="customer">customers in Bangladesh</h2>
                </div>
            </div>
            <div class="col-md-5 right-side">
                <form class="bg-white p-5" action="{{route('seller.login')}}" method="post">
                    @csrf
                    <div class="bg-white p-6 text-center font-sans-ui-serif marginforp">
                        <h2><b class="become ">BECOME A</b></h2>
                        <h2 class="seller">ChabiKathi MERCHANT</h2>
                        <h2 class="get mt-6">Log in and monitor your sells</h2>
                    </div>
                    <div class="mt-8 border-b-2 border-fuchsia-600 text-current luser flex">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                            class="svg-inline--fa fa-phone fa-w-16 d-icon" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                        <input type="email" placeholder="email" name="email" maxlength="" class="ustyle">
                    </div>
                    <div class="luser error flex mt-0">
                        <small class="text-red-light mb-2 block text-center w-96"></small>
                    </div>
                    <div class="mt-3 border-b-2 border-fuchsia-600 lunlock flex">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="unlock"
                            class="svg-inline--fa fa-unlock fa-w-14 d-icon" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                            </path>
                        </svg>
                        <input type="password" placeholder="Password" name="password" class="pstyle">
                    </div>
                    <div class="luser error flex mt-0 text-center">
                        <small class="text-red-light mb-2 block text-center w-96"></small>
                    </div>
                    <div class="h-12"></div>
                    <div class=" h-12 rememberstyle">
                        <h2 class=" forgot ">
                            <a class="ant-typography" href="/">Forgot Password</a>
                        </h2>
                    </div>
                    <div class="bt">
                        <button type="submit" class="button" acttion="">Get Started</button>
                    </div>
                    <div class=" mt-3 create">
                        <h2 class="fcreate">Create your <a class="ant-typography"
                                href="{{route('seller.registers')}}">Merchant account</a>
                        </h2>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html> --}}