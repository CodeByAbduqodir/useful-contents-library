@extends('layouts.app')
@section('content')
    <div class="max-w-md mx-auto mt-10">
        <h2 class="text-2xl font-semibold mb-4 text-blue-600">Add Resource</h2>
        @if ($errors->any())
            <div class="bg-red-100 p-2 mb-4 text-red-700">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="{{ route('resources.store') }}">
            @csrf
            <div class="mb-4"><label class="block text-gray-700">Title</label><input type="text" name="title" class="w-full p-2 border rounded" required></div>
            <div class="mb-4"><label class="block text-gray-700">URL</label><input type="url" name="url" class="w-full p-2 border rounded" required></div>
            <div class="mb-4"><label class="block text-gray-700">Category</label><select name="category_id" class="w-full p-2 border rounded" required>@foreach ($categories as $category)<option value="{{ $category->id }}">{{ $category->name }}</option>@endforeach</select></div>
            <div class="mb-4"><label class="block text-gray-700">Description</label><textarea name="description" class="w-full p-2 border rounded"></textarea></div>
            <div class="mb-4"><label class="block text-gray-700">Tags</label><select name="tags[]" class="w-full p-2 border rounded" multiple required>@foreach ($tags as $tag)<option value="{{ $tag->id }}">{{ $tag->name }}</option>@endforeach</select></div>
            <button type="submit" class="bg-green-500 text-white p-2 rounded hover-grow">Save</button>
        </form>
    </div>
@endsection