@extends('layouts.appMemories')

@section('content')




    <section class="section">
        <div class="container">
            <div class="columns is-centered">  
                <div class="column is-4">

                    <article class="message is-dark">
                        <div class="message-header center">
                            <p class="is-size-5 has-text-white">New Memory</p>
                        </div>
                        <div class="message-body">

                            @include('common.errors')
                            <form action="/memories" method="POST" class="">
                                @csrf
                                <div class="field">                                                        
                                    <div class="control">
                                        <input class="input" name="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="field">       
                                    <div class="control">
                                        <textarea class="textarea has-fixed-size" name="description" placeholder="Description" value="{{ old('description') }}"></textarea>
                                    </div>
                                </div>
                                <div class="control center">
                                    <input class="button is-dark is-outlined is-rounded" type="submit" value="Add">
                                </div>

                            </form>


                        </div>
                    </article>

                </div>
            
            </div>
        </div>
    </section>










@if (count($memories) > 0)
        <section class="section">
            <div class="container">
                <div class="columns center">
                    <div class="column is-full">
                        <article class="message is-dark">
                            <div class="message-header center">
                                <p class="is-size-5 has-text-white">Memories List</p>
                            </div>
                            <div class="message-body">
                                <div class="columns is-multiline">

                                    @foreach ($memories as $memory)
                                        <div class="column is-one-quarter">
                                
                                                <div class="card">
                                                    <header class="{{ ($memory->description) ? 'card-header' : '' }}">
                                                        <p class="card-header-title is-centered">
                                                        {{ $memory->name }}
                                                        </p>
                                                        
                                                    </header>
                                                    @if ($memory->description)
                                                        <div class="card-content">
                                                            <div class="content has-text-centered"> {{ $memory->description }} <br>                              
                                                        </div>
                                                    </div>
                                                    @endif
                                                    
                                                    <footer class="center" style="padding-bottom: 10px;">
                                                         <form action="/memory/{{ $memory->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            
                                                            <input class="button is-danger is-outlined is-small is-rounded" type="submit" value="Delete">
                                                            
                                                        </form>
                                                    </footer>
                                                </div>
                                        </div>  

                                    @endforeach
                                
                      

                            </article>

                        </div>

 
                    </div>
                </div>
            </section> 
        @endif



@endsection