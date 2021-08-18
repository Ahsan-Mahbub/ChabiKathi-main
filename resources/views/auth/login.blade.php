<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    @include('auth.auth_css')

    <title>ChabiKathi</title>


</head>
<body>
<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-body-dark bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
            <div class="row mx-0 justify-content-center">
                <div class="hero-static col-lg-6 col-xl-4">
                    <div class="content content-full overflow-hidden">
                        <!-- Header -->
                        <div class="py-30 text-center">
                            <a class="link-effect font-w700" href="index.html">
                                <i class="si si-picture"></i>
                                <span class="font-size-xl text-primary-dark">Chabi</span><span class="font-size-xl"> Kathi</span>
                            </a>
                        </div>

                        <x-jet-validation-errors class="mb-4" style="color:rgb(211, 82, 82)" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" class="js-validation-signin" action="{{ route('login') }}">
                            @csrf




                            <div class="block block-themed block-rounded block-shadow">
                                <div class="block-header bg-gd-dusk">
                                    <h3 class="block-title text-center">Please Sign In</h3>
                                </div>
                                <div class="block-content">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="email" value="{{ __('Email') }}">Email</label>
                                            <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="password" value="{{ __('Password') }}">Password</label>
                                            <input  id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                        </div>
                                    </div>


                                    <div class="form-group row mb-0">

                                        <div class="col-sm-6 d-sm-flex align-items-center push">
                                            <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                                <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-right push">
                                            <button type="submit" class="btn btn-alt-primary">
                                                <i class="si si-login mr-10"></i> Sign In
                                            </button>
                                        </div>
                                    </div>
                                </div>



                                <div class="block-content bg-body-light">
                                    <div class="form-group text-center">
                                        @if (Route::has('password.request'))
                                            {{--                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">--}}
                                            {{--                                                <i class="fa fa-warning mr-5"></i> Forgot Password--}}
                                            {{--                                            </a>--}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </main>
</div>
@include('auth.auth_js')
</body>
</html>
