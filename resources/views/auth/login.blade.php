<!DOCTYPE html>
<html lang="pt-br">

<!-- Mirrored from html.codedthemes.com/guru-able/dark-light/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 12:58:58 GMT -->

<head>
    <title>SGA - Sistema de Gerenciamento de Agendas</title>


    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/icon/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/style.css')}}">
</head>

<body class="fix-menu">

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        @if(\Session::has('message'))
                        <p class="alert alert-info">
                            {{ \Session::get('message') }}
                        </p>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="text-center">
                                <img src="../files/assets/images/auth/logo-dark.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">{{ trans('global.login') }}</h3>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group">
                                    <input name="email" type="email" required autofocus
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="{{ trans('global.login_email') }}"
                                        value="{{ old('email', null) }}">
                                    @if($errors->has('email'))
                                    <span class="help-block text-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                    @endif
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        placeholder="{{ trans('global.login_password') }}" required
                                        placeholder="{{ trans('global.login_password') }}">
                                    @if($errors->has('password'))
                                    <span class="help-block text-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input class="form-check-input" name="remember" type="checkbox"
                                                    id="remember" style="vertical-align: middle;" />
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">{{ trans('global.remember_me') }}</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="{{ route('password.request') }}"
                                                class="text-right f-w-600 text-inverse">
                                                {{ trans('global.forgot_password') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            {{ trans('global.login') }}
                                        </button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                        <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="../files/assets/images/auth/Logo-small-bottom.png"
                                            alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


    <script type="text/javascript" src="{{asset('bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}">
    </script>

    <script type="text/javascript" src="{{asset('bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{asset('bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}">
    </script>
    <script type="text/javascript"
        src="{{asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/files/assets/js/common-pages.js')}}"></script>
</body>

<!-- Mirrored from html.codedthemes.com/guru-able/dark-light/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 12:58:58 GMT -->

</html>
