<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Asap+Condensed:500">
    <link href="{{asset('assets/css/demo10/pages/login/login-6.css')}}" rel="stylesheet" type="text/css" />
    <title> Prontuários | Entrar </title> @include('layout.styles')
</head>
<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                <div class="kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__body">
                            <div class="kt-login__logo">
                                <a href="#">
                                    <img src="{{asset('/img/sms/mcz-logo-slogan-horizontal-login.png')}}">
                                </a>
                            </div>
                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Bem-vindo de volta</h3>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" action="">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="CPF" name="cpf" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-last" type="password" placeholder="Senha" name="senha">
                                        </div>
                                        <div class="kt-login__extra">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="remember"> Lembrar <span></span>
                                            </label>
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">Entrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url({{asset('/img/sms/pam-bg1.jpg')}}">
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/demo10/pages/login/login-general.js')}}"></script>
</body>
</html>
