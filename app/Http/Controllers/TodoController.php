<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Todo::all());
        return view('todo', ['todos' => Todo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $newTodo = new Todo();
        $newTodo->title = $request->input('title');
        $newTodo->description = $request->input('description');

        $newTodo->save();

        return redirect()->route('todo');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($todo);
        return view('description', ['todo' => Todo::find($id)]);
    }
    //
    //    /**
    //     * Show the form for editing the specified resource.
    //     */
    //    public function edit(Todo $todo)
    //    {
    //        //
    //    }
    //
    //    /**
    //     * Update the specified resource in storage.
    //     */
    //    public function update(Request $request, Todo $todo)
    //    {
    //        //
    //    }
    //
    //    /**
    //     * Remove the specified resource from storage.
    //     */
    //    public function destroy(Todo $todo)
    //    {
    //        //
    //    }
}
