@extends('dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Today's Tasks</h2>

    @if($tasks->count() > 0)
        <table class="min-w-full border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 border">Title</th>
                    <th class="px-4 py-2 border">Description</th>
                    <th class="px-4 py-2 border">Date</th>
                    <th class="px-4 py-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td class="px-4 py-2 border">{{ $task->title }}</td>
                        <td class="px-4 py-2 border">{{ $task->description }}</td>
                        <td class="px-4 py-2 border">{{ $task->date }}</td>
                        <td class="px-4 py-2 border">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-500 hover:underline">Edit</a> |
                            <a href="{{ route('tasks.delete', $task->id) }}" class="text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No tasks found for today.</p>
    @endif
</div>
@endsection
