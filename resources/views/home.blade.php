@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                            Il tuo profilo
                        </p>
                    </header>

                    <div class="card-content">
                        Ciao, {{Auth::user()->name}} 
                        <br><br>                  
                        Questa applicazione ti permette di annotare tutti i tuoi ricordi.<br>
                        Questa applicazione ti permette di annotare tutti i tuoi ricordi.<br>
                        Questa applicazione ti permette di annotare tutti i tuoi ricordi.<br>
                        Questa applicazione ti permette di annotare tutti i tuoi ricordi.<br>
                        Questa applicazione ti permette di annotare tutti i tuoi ricordi.<br>
                        Questa applicazione ti permette di annotare tutti i tuoi ricordi.
                        <br><br> <br> 

                        
                        <a href="{{ url('/memories') }}"> 
                            <button class="button is-info is-rounded is-medium is-outlined" > I tuoi ricordi</button>
                        </a>

                        <br> <br> Hai 5 ricordi 
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
