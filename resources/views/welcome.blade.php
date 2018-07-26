<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <title>Laravel</title>

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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="font-size:50px;">
                    Laravel - vargrant & features tests
                </div>
                <h2>Simple features tests</h2>
                <div class="links">
                    <li><a href="{{route('CronJob')}}">Cron Job</a></li>
                    <li>
                        <a href="{{route('simpleMail')}}">Send hardcoded mail</a>
                    </li>
                    <li>
                        <a href="{{route('simpleMailMarkdown')}}">Simple mail Markdown</a>
                    </li>
                    <li>
                        <a href="{{route('messageFlash')}}">Simple message flash</a>
                    </li>
                    <li>
                        <a href="{{route('eventTest')}}">Event test</a>
                    </li>
                    <li>
                        <a href="{{route('components_slots')}}">Components and slots</a>
                    </li>

                </div>
             <h2>Tool created on summary</h2>
                <div class="links">
                    <li><a href="{{route('CronJob')}}">Indeed website scrapper</a></li>
                </div>


                    @if(session('redirect'))
                    <div class="alert alert-success">

                        {{session('redirect')}}
                    </div>
                    @endif



            </div>
        </div>
    </body>
</html>
