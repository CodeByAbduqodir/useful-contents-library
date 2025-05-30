@extends('layouts.app')

@section('content')
    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-4 text-orange-500">Videos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded shadow fade-in" style="animation-delay: 0.1s">
                <div class="h-32 bg-gray-200 mb-2"></div>
                <p class="text-gray-600">Video placeholder</p>
                <button class="mt-2 bg-blue-500 text-white p-2 rounded hover-grow">View</button>
            </div>
        </div>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-4 text-orange-500">Podcasts</h2>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-4 text-orange-500">Books</h2>
    </section>
@endsection