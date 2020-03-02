@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered is-size-5">
                            Your profile
                        </p>
                    </header>

                    <div class="card-content">
                        Hi <strong>{{Auth::user()->name}}</strong>! <br>
                        This is your personal profile. 
                        <br><br>                  
                        This application lets you store your fondest memories all in one place.
                        <br>
                        Just insert the memory and you're done.
                        <br>
                        You'll then be able to see all of them and, if necessary, delete them in just one click. 
                        <br><br>
                        <div>
                        <p> Enjoy the ride! </p>
                        <span class="icon is-large has-text-info">
                            <i class="far fa-2x fa-grin"></i>
                            </span>
                        </div>

                        <br> <br>

                        
                        <a href="{{ url('/memories') }}"> 
                            <button class="button is-info is-rounded is-medium is-outlined" > Your memories</button>
                        </a>

                        <br> <br> 

                        <span class="tag is-light is-info is-rounded">You have&nbsp; <p class="has-text-weight-bold"> {{Auth::user()->memories->count()}} </p>&nbsp;memories</span>

                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
