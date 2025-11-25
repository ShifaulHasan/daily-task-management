@extends('dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Add New Task</h2>

    {{-- Success message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-6">
    <label class="block mb-2 font-semibold text-gray-700">Title</label>
    <input type="text" name="title" class="w-full border border-gray-300 px-4 py-3 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400" placeholder="Enter task title" required>
</div>

<div class="mb-6">
    <label class="block mb-2 font-semibold text-gray-700">Description</label>
    <textarea name="description" rows="6" class="w-full border border-gray-300 px-4 py-3 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400" placeholder="Enter task description"></textarea>
</div>

        <button type="submit" class="bg-black-500 text-red px-4 py-2 rounded hover:bg-yellow-600">
    Save Task
</button>

    </form>
</div>
@endsection
