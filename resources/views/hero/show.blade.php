@extends('layouts.backend')

@section('content')
    <div class="container">
        <h1>Hero Details</h1>

        <div>
            <h2>{{ $hero->title }}</h2>
            <p><strong>Subtitle:</strong> {{ $hero->subtitle }}</p>
            <p><strong>Description:</strong> {{ $hero->desc }}</p>
            
            <h3>Stats</h3>
            <ul>
                @foreach(json_decode($hero->stats) as $stat)
                    <li>{{ $stat->label }}: {{ $stat->value }}</li>
                @endforeach
            </ul>

            <a href="{{ route('hero.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
