@extends('dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Task</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label>Title</label>
            <input type="text" name="title" value="{{ $task->title }}" class="w-full border px-3 py-2 rounded" required>
        </div>
        <div class="mb-4">
            <label>Description</label>
            <textarea name="description" class="w-full border px-3 py-2 rounded" rows="4">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update Task</button>
    </form>
</div>
@endsection
