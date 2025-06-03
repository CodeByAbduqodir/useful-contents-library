@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto mt-10">
        <h2 class="text-2xl font-semibold mb-4 text-blue-600">{{ $resource->title }}</h2>
        <p class="text-gray-600 mb-4">{{ $resource->description }}</p>
        <p class="mb-2"><strong>Category:</strong> {{ $resource->category->name }}</p>
        <p class="mb-2"><strong>Tags:</strong> {{ implode(', ', $resource->tags->pluck('name')->all()) }}</p>
        <a href="{{ $resource->url }}" target="_blank" class="bg-blue-500 text-white p-2 rounded hover-grow">Go to Resource</a>
        <a href="{{ route('resources.edit', $resource) }}" class="bg-yellow-500 text-white p-2 rounded hover-grow ml-2">Edit</a>
        <form action="{{ route('resources.destroy', $resource) }}" method="POST" class="inline-block">
            @csrf @method('DELETE') <button type="submit" class="bg-red-500 text-white p-2 rounded hover-grow ml-2" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
@endsection