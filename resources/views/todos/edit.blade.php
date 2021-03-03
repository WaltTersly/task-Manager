@extends('layouts.app')

@section('title')
    Edit Todo
@endsection
@section('content')
<h1 class="text-center my-5">
    Edit Todo
</h1>
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card card-default">
            <div class="card-header">
                Edit Todo
    
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/todos/{{$todo->id}}/update-todos" method="POST">
                    @csrf
                    <div class="form-group my-3">
                        <input type="text" class="form-control" placeholder=" Todo Name" name="name" value="{{$todo->name}}">
                    </div>

                    <div class="form-group my-2">
                        <textarea name="description" id="description" placeholder="Todo description" cols="30" rows="10" class="form-control">{{$todo->description}}</textarea>
                    </div>
                    <div class="form-group float-end" >
                        <button type="submit" class="btn btn-success">
                            Save Todo
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


    
@endsection