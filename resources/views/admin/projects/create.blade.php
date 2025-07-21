@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Nieuw Project Toevoegen</h1>

        <form method="POST" action="{{ route('projects.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block font-medium mb-1">Titel</label>
                <input type="text" name="title" class="w-full border px-3 py-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1">Beschrijving</label>
                <textarea name="description" class="w-full border px-3 py-2 rounded" rows="5" required></textarea>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Opslaan
            </button>
        </form>
    </div>
@endsection
