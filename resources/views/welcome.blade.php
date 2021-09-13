<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Supermarket</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
        body {
                font-family: 'Nunito', sans-serif;
margin: 0%;
padding: 0%;
             }

             .header{
                width: 100%;
                 background-color: #ffc107;
                 padding: 1%;
                 height: 30px;
             }

             .header nav{
                float: right;
                 width: 30%;
                 display: flex;
           flex-direction: row;
             }

             .header nav li {
list-style-type:none;
margin-left: 4%;
margin-top:10px;

             }
             .header nav li a{
                text-decoration: none;
font-size: 16px;
color: #fff;
font-weight: bold;
             }
             .logo{
                 position: absolute;
                 top: .05%;
                 left: 1%;
             }
     </style>

    </head>
    <body>
        <div class="header">
            <img src={{asset('images/app.png')}} width="65px" height="65px" class="logo"/>

            @if (Route::has('login'))
                <nav>
                    @auth
                    <li>
                        <a href="{{ url('/home') }}" >Home</a>
                    </li>
                    @else
                    <li>

                        <a href="{{ route('login') }}" >Log in</a>
                    </li>

                        @if (Route::has('register'))
                        <li>

                            <a href="{{ route('register') }}" >Register</a>
                        </li>

                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </body>
</html>
