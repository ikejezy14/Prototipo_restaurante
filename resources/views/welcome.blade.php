<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ComidasRapidas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #bbb;
                color: #646d6c;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background: rgba(73,155,234,1);
background: -moz-linear-gradient(left, rgba(73,155,234,1) 0%, rgba(14,63,119,1) 0%, rgba(15,69,130,0) 8%, rgba(19,85,160,0.27) 30%, rgba(32,124,229,0.33) 35%, rgba(15,67,125,0.72) 67%, rgba(14,63,119,0.72) 69%, rgba(16,68,129,0.72) 79%, rgba(32,124,229,0.72) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(73,155,234,1)), color-stop(0%, rgba(14,63,119,1)), color-stop(8%, rgba(15,69,130,0)), color-stop(30%, rgba(19,85,160,0.27)), color-stop(35%, rgba(32,124,229,0.33)), color-stop(67%, rgba(15,67,125,0.72)), color-stop(69%, rgba(14,63,119,0.72)), color-stop(79%, rgba(16,68,129,0.72)), color-stop(100%, rgba(32,124,229,0.72)));
background: -webkit-linear-gradient(left, rgba(73,155,234,1) 0%, rgba(14,63,119,1) 0%, rgba(15,69,130,0) 8%, rgba(19,85,160,0.27) 30%, rgba(32,124,229,0.33) 35%, rgba(15,67,125,0.72) 67%, rgba(14,63,119,0.72) 69%, rgba(16,68,129,0.72) 79%, rgba(32,124,229,0.72) 100%);
background: -o-linear-gradient(left, rgba(73,155,234,1) 0%, rgba(14,63,119,1) 0%, rgba(15,69,130,0) 8%, rgba(19,85,160,0.27) 30%, rgba(32,124,229,0.33) 35%, rgba(15,67,125,0.72) 67%, rgba(14,63,119,0.72) 69%, rgba(16,68,129,0.72) 79%, rgba(32,124,229,0.72) 100%);
background: -ms-linear-gradient(left, rgba(73,155,234,1) 0%, rgba(14,63,119,1) 0%, rgba(15,69,130,0) 8%, rgba(19,85,160,0.27) 30%, rgba(32,124,229,0.33) 35%, rgba(15,67,125,0.72) 67%, rgba(14,63,119,0.72) 69%, rgba(16,68,129,0.72) 79%, rgba(32,124,229,0.72) 100%);
background: linear-gradient(to right, rgba(73,155,234,1) 0%, rgba(14,63,119,1) 0%, rgba(15,69,130,0) 8%, rgba(19,85,160,0.27) 30%, rgba(32,124,229,0.33) 35%, rgba(15,67,125,0.72) 67%, rgba(14,63,119,0.72) 69%, rgba(16,68,129,0.72) 79%, rgba(32,124,229,0.72) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5', GradientType=1 );">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Acceso</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src='{{url("/admin-lte")}}/dist/img/comida.png'>
            </div>
        </div>
    </body>
</html>
