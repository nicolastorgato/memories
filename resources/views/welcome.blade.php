<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel {{ app()->version() }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

            .top-left {
                position: absolute;
                left: 10px;
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

            .subtitle {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .framwork_title {
                font-weight: 600;
                padding-top: 20px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


    <section class="hero is-fullheight">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <nav class="navbar is-spaced">
                <div class="container">

                    <div class="navbar-brand links">
                         <a href="{{ url('/') }}" class="navbar-item"> <p class="is-size-5 has-text-weight-bold">memories</p>  </a>

                        <div class="navbar-burger burger" data-target="navMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    
                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start"></div>

                        <div class="navbar-end links">
                 
                                <a class="navbar-item" href="{{ route('login') }}">Login</a>
                                <a class="navbar-item" href="{{ route('register') }}">Register</a>
          
                        </div>
                    </div>
                </div>
            </nav>
      </div>

      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            memories
          </h1>
          <h2 class="subtitle">
            to not forget
          </h2>
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot">
        <div class="container is-fluid">
          <div class="notification is-white has-text-centered"> <br><br>  </div>
        </div>
      </div>
    </section>



    </body>


</html>
