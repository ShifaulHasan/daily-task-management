<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    // Show today's tasks
    public function index()
    {
        $tasks = DB::table('tasks')
            ->where('date', date('Y-m-d'))
            ->orderBy('date', 'desc')
            ->get();

        return view('tasks.index', compact('tasks'));
    }

    // Show form to create a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Store new task in DB
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Insert into DB
        DB::table('tasks')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'date' => date('Y-m-d'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect with success message
        return redirect()->route('tasks.create')->with('success', 'Task added successfully!');
    }

    // Show form to edit a task
    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return view('tasks.edit', compact('task'));
    }

    // Update a task
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        DB::table('tasks')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => now(),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    // Delete a task
    public function destroy($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }

    // Show previous tasks
    public function history()
    {
        $tasks = DB::table('tasks')
            ->where('date', '<', date('Y-m-d'))
            ->orderBy('date', 'desc')
            ->get();

        return view('tasks.history', compact('tasks'));
    }
}
