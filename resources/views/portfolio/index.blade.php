@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-8">Mijn Projecten</h1>

        @if($projects->isEmpty())
            <p class="text-gray-600">Er zijn nog geen projecten toegevoegd.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($projects as $project)
                    <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold mb-2">{{ $project->title }}</h2>
                        <p class="text-gray-700">{{ Str::limit($project->description, 150) }}</p>

                        <a href="{{ route('portfolio.show', $project) }}"
                           class="inline-block mt-4 text-blue-600 hover:underline">
                            Meer lezen
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
