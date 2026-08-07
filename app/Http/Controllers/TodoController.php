<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('completed')->orderByDesc('created_at')->get();

        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        Todo::create([
            'title' => $request->string('title')->trim(),
            'completed' => false,
        ]);

        return redirect()->route('todos.index')->with('status', 'Todo created successfully.');
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'completed' => ['nullable', 'boolean'],
        ]);

        $todo->update([
            'completed' => $request->boolean('completed'),
        ]);

        return redirect()->route('todos.index')->with('status', 'Todo updated successfully.');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('status', 'Todo deleted successfully.');
    }
}
