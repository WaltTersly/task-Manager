@extends('layouts.app')
@section('title')
    single Todos {{$todo->name}}
@endsection

@section('content')
<div class="container">
    <h2 class="text-center my-4">

        {{ $todo->name}}
    </h2>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card card-default">
                <div class="card-header">
                    Details
        
                </div>
                <div class="card-body">
        
                    {{ $todo->description}}
                </div>
            
            </div>
            <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm my-3"> Edit This</a>
            <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm my-3 float-end"> Delete This</a>

        </div>
    </div>
</div>

@endsection