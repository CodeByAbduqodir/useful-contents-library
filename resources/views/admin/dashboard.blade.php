@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-semibold mb-4 text-blue-600">Admin Dashboard</h2>
        <a href="{{ route('admin.resources.create') }}" class="bg-blue-500 text-white p-2 rounded hover-grow">Add Resource</a>
        <a href="{{ route('admin.logout') }}" class="bg-red-500 text-white p-2 rounded hover-grow ml-4">Logout</a>
    </div>
@endsection