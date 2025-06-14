@extends('layouts.app')

@section('content')
    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-4 text-orange-500">All Resources</h2>
        @php
            $resources = \App\Models\Resource::with('category', 'tags')->get();
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @forelse ($resources as $resource)
                <div class="bg-white p-4 rounded shadow fade-in" style="animation-delay: {{ $loop->index * 0.1 }}s">
                    <h3 class="text-lg font-semibold">{{ $resource->title }}</h3>
                    <p class="text-gray-600">{{ $resource->description }}</p>
                    <p class="text-sm text-gray-500">Category: {{ $resource->category->name }}</p>
                    <p class="text-sm text-gray-500">Tags: {{ implode(', ', $resource->tags->pluck('name')->all()) }}</p>
                    <a href="{{ route('resources.show', $resource) }}" class="bg-blue-500 text-white p-2 rounded hover-grow mt-2 inline-block">View</a>
                </div>
            @empty
                <p>No resources available.</p>
            @endforelse
        </div>
    </section>
@endsection