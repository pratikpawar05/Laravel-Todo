<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {

        return view('todo/index')->with('todo', Todo::all());
    }
    public function show($id)
    {

        return view('todo/show')->with('id', Todo::find($id));
    }
    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        return redirect('/index');
    }
    public function create()
    {
        return view('todo/create');
    }
    public function createtodo()
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:20',
            'desc' => 'required'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['desc'];
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Succesfully Created The Task');
        return view('todo/create')->with('msg', 'Succesfully stored the data');
    }
    public function update(Todo $todo)
    {
        #$todo = Todo::find($id);
        return view('todo/update')->with('update', $todo);
    }
    public function deletetodo(Todo $todo)
    //Route model binding to automatically detect the dynamic value from the route!
    //Best Functionality I heard till now.. 
    {
        // $todo = Todo::find($id);
        $todo->delete();
        session()->flash('success', 'Succesfully Deleted The Task');
        return redirect('/index');
    }
    public function updatetodo($id)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:20',
            'desc' => 'required'
        ]);
        
        $data = request()->all();
        $todo = Todo::find($id);
        $todo->name = $data['name'];
        $todo->description = $data['desc'];
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Succesfully Updated The Task');
        return redirect('/index');
    }
}
