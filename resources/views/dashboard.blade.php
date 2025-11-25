@extends('layouts.app')

@section('content')
<div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-lg">
        <div class="p-6 text-xl font-bold border-b">Dashboard</div>
        <nav class="mt-6">
            <a href="{{ route('tasks.index') }}" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">Today's Tasks</a>
            <a href="{{ route('tasks.create') }}" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">Add New Task</a>
            <a href="{{ route('tasks.history') }}" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">Previous Tasks</a>
            <a href="{{ route('logout') }}" class="block px-6 py-3 text-red-600 hover:bg-gray-200"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </nav>
    </div>

    <!-- Content -->
    <div class="flex-1 p-8">
        <h1 class="text-3xl font-bold mb-6">
            Welcome, {{ Auth::user() ? Auth::user()->name : 'Guest' }}!
        </h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>Select a task option from the sidebar.</p>
        </div>
    </div>

</div>
@endsection
