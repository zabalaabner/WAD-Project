
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            a{
                color:  #ff8c1a;
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
                color:  #ff8c1a;
                margin-bottom: 30px;
            }
            .links{
                color:#ff8c1a;
            }

            #click{
                color:#ff8c1a; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                      <p>  Welcome {{ Auth::user()->name }}</p>
                    @else
                        <a href="{{ url('/login') }}" id="click">Login</a> 
                       <a href="{{ url('/register') }}" id="click">Register</a> 
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    HyperText
                </div>

                <div class="links">
                    <a href="articles" id="click">All articles</a>
                    <a href="about" id="click">about</a>
                    <a href="articles/create" id="click">create</a>
                </div>
            </div>
        </div>
    </body>
</html>
