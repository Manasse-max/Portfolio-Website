@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-10 px-4">
        <a href="{{ route('portfolio.index') }}" class="text-blue-600 hover:underline mb-4 inline-block">
            ← Terug naar overzicht
        </a>

        <h1 class="text-3xl font-bold mb-4">{{ $project->title }}</h1>

        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="mb-6 rounded shadow">
        @endif

        <div class="prose max-w-none text-gray-800">
            {!! nl2br(e($project->description)) !!}
        </div>

        @if($project->url)
            <div class="mt-6">
                <a href="{{ $project->url }}" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Bekijk project
                </a>
            </div>
        @endif
    </div>
@endsection
