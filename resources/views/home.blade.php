@extends('layouts.app')

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ Auth::user()->name }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
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
<img src="http://www.sanchezromero.dental/wp-content/uploads/2015/06/logo-5-copia.png"
/>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            {{ Auth::user()->name }}
        </div>

        <div class="links">
            <a href="{{ url('gabinetes') }}"> <FONT FACE="raro, courier" SIZE=4 COLOR="#191970">
                    Comprueba los gabinetes</FONT></a>
            <a href="{{ url('/tratamientos/create') }}"> <FONT FACE="raro, courier" SIZE=4 COLOR="#191970">
                    Crea un tratamiento</FONT></a>
            <a href="{{ url('/sesions/create') }}"> <FONT FACE="raro, courier" SIZE=4 COLOR="#191970">
                    Crea una sesión</FONT></a>
        </div>
    </div>
</div>
</body>
</html>


