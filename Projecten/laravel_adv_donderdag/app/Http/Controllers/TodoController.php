<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // niet alle to do items, maar alleen van ingelogde.

        // laravel eloquent (manier van code is dit)
        $todos = \Auth::user()
                      ->todos()
                      ->orderBy('id', 'DESC')
                      ->take(8)
                      ->get();
        return view('todos/index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|max:190|string',
            'description'   => 'required|string',
            'deadline'      => 'nullable|date|after_or_equal:today',
            'priority'      => 'required|between:1,5'
        ]);

        $todo               = new Todo();
        $todo->title        = $request->title;
        $todo->description  = $request->description;
        $todo->deadline     = $request->deadline;
        $todo->user_id      = \Auth::id();
        $todo->priority     = $request->priority;
        $todo->save();

        return redirect()
            ->route('todos.index')
            ->with('message', 'Todo item created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todos/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
