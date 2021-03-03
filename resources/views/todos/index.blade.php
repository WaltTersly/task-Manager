@extends('layouts.app')

@section('title')
    Todos
@endsection
@section('content')

<div class="container">

    <h1 class="text-center my-4">Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="class-header">
                    Todos
                </div>
                <div class="card-body">
        
                    <ul class="list-group">
                
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                @if (!$todo->completed)
                                    
                                <a href="/todos/{{ $todo->id}}/complete" class="btn btn-warning btn-sm float-end ms-2 "> completed ?</a>
                                    
                                @else
                                   <span class="text-success float-end ms-2"> complete </span> 
                                @endif
                                

                                <a href="/todos/{{ $todo->id}}" class="btn btn-primary btn-sm float-end "> view</a>
                            </li>
                            
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>

    
@endsection