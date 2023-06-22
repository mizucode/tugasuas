<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Auth::user()->todos;

        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->start_date = $request->start_date;
        $todo->due_date = $request->due_date;
        $todo->user_id = Auth::id();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images', $imageName);
            $todo->image = $imageName;
        }

        $todo->save();

        return redirect()->route('todos.index')->with('success', 'To Do created successfully.');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    private function uploadImage($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            return $imageName;
        }

        return null;
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->start_date = $request->start_date;
        $todo->due_date = $request->due_date;
        $imageName = $this->uploadImage($request);
        $todo->image = $imageName;
        $todo->save();

        return redirect()->route('todos.index')->with('success', 'To Do updated successfully.');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'To Do deleted successfully.');
    }
}
