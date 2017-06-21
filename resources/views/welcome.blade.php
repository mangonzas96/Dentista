<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arroyo 74</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

        html, body {
            background-image: url("http://www.impiantidentalialbania.it/wp-content/themes/healing-touch/images/slides/slider1.jpg");
            color: #700c0f;
            font-family: 'verdana';
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
            right: 100px;
            top: 40px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
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
    <body>
        <img src="http://www.sanchezromero.dental/wp-content/uploads/2015/06/logo-5-copia.png"/>

        <div class="flex-center position-ref full-height">
            <div class="top-right links">

                <a href="{{ url('/login') }}"><FONT FACE="raro, courier" SIZE=4 COLOR="#191970">
                    IDENTIFICATE</FONT></a>
                <a href="{{ url('/register') }}"> <FONT FACE="raro, courier" SIZE=4 COLOR="#191970">
                    REGÍSTRATE COMO ODONTÓLOGO</FONT></a>
                <a href="{{ url('/registerpaciente') }}"> <FONT FACE="raro, courier" SIZE=4 COLOR="#191970">
                        REGÍSTRATE COMO PACIENTE</FONT></a>

            </div>

            <div class="content">
                <div class="title m-b-md">
                    Arroyo 74
                </div>
            </div>
        </div>
    </body>
</html>
