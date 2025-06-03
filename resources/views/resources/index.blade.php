@extends('layouts.app')
@section('content')
    <div class="max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-semibold mb-4 text-blue-600">Resources</h2>
        <a href="{{ route('resources.create') }}" class="bg-blue-500 text-white p-2 rounded hover-grow mb-4">Add Resource</a>
        @if (session('success'))
            <div class="bg-green-100 p-2 mb-4 text-green-700">{{ session('success') }}</div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @forelse ($resources as $resource)
                <div class="bg-white p-4 rounded shadow fade-in" style="animation-delay: {{ $loop->index * 0.1 }}s">
                    <h3 class="text-lg font-semibold">{{ $resource->title }}</h3>
                    <p class="text-gray-600">{{ $resource->description }}</p>
                    <a href="{{ route('resources.show', $resource) }}" class="bg-blue-500 text-white p-2 rounded hover-grow mt-2 inline-block">View</a>
                </div>
            @empty
                <p>No resources found.</p>
            @endforelse
        </div>
    </div>
@endsection