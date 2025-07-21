@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-4">Projectbeheer</h1>

        <a href="{{ route('projects.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-6 inline-block">
            Nieuw project toevoegen
        </a>

        @if(session('success'))
            <div class="mb-4 bg-green-100 text-green-800 p-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full bg-white shadow rounded text-sm">
            <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">Titel</th>
                <th class="p-3 text-left">Acties</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr class="border-t">
                    <td class="p-3">{{ $project->title }}</td>
                    <td class="p-3 flex gap-4">
                        <a href="{{ route('projects.edit', $project) }}" class="text-blue-600 hover:underline">Bewerk</a>

                        <form method="POST" action="{{ route('projects.destroy', $project) }}">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline" onclick="return confirm('Verwijderen?')">Verwijder</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
