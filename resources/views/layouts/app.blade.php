<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} </title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            } */


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            #nameDropDownMenu > a{
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

              .center{
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>


    </head>

    <body>
      
        <section class="hero is-fullheight">
            <!-- Hero head: will stick at the top -->
            <div class="hero-head">

            <nav class="navbar is-white is-spaced" role="navigation" aria-label="dropdown navigation">
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
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Login</a>
                                <a class="navbar-item " href="{{ route('register') }}">Register</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable" id="nameDropDownMenu">
                                    <a class="navbar-link">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown is-right is-boxed links">
                                        <a class="navbar-item" href="{{ route('home') }}">
                                            Profile
                                        </a>
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
            </div>


        <div class="hero-body">
            <div class="container has-text-centered">
            @yield('content')
            </div>
        </div>

        <div class="hero-foot">
        <div class="container is-fluid">
          <div class="notification is-white has-text-centered"> <br><br>     </div>
        </div>
      </div>


        </section>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
