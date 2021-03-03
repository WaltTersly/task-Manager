<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    //

    public function Index()
    {

        // collect todos from db and display them on view

        $todos = Todos::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todos $todo)
    {
        //$todo = Todos::find($todoId);

        return view('todos.show')->with('todo',$todo);
    }

    public function create()
    {
        
        return view('todos.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required|min:4|max:10',
            'description'=> 'required|min:7'
        ]);

        $data = request()->all();
        $todo = new Todos();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        session()->flash('success', 'A todo has been created successfully');
        
        return redirect('/todos');
    }

    public function edit(Todos $todo)
    {
        //$todo = Todos::find($todoId);

        return view ('todos.edit')->with('todo', $todo);
    }

    public function update(Todos $todo)
    {
        
        $this->validate(request(), [
            'name' => 'required|min:4',
            'description'=> 'required|min:7'
        ]);

        $data = request()->all();

        //$todo = Todos::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo ->save();

        session()->flash('success', 'A todo has been updated successfully');

        return redirect('/todos');
    }

    public function destroy(Todos $todo)

    {
        //$todo = Todos::find($todoId);

        $todo->delete();

        session()->flash('success', 'A todo has been deleted successfully');

        return redirect('/todos');
        
    }

    public function complete(Todos $todo)
    {
        $todo->completed = true;
        $todo->save();

        session()->flash('success', 'You have completed that Todo Item');

        return redirect('/todos');
    }
}
