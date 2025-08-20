@extends('layouts.backend')

@section('title', 'Project Detail - Moh Sahrul Alamsyah')

@section('content')
<main class="main-content">
    <div class="section-header">
        <h3 class="section-title">Project Detail</h3>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <p><strong>Client:</strong> {{ $project->client }}</p>
            <p><strong>Status:</strong> {{ $project->status }}</p>
            <p><strong>Priority:</strong> {{ $project->priority }}</p>
            <p><strong>Deadline:</strong> {{ $project->deadline }}</p>
            <p><strong>Progress:</strong> {{ $project->progress }}%</p>
        </div>
    </div>

    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to Projects</a>
</main>
@endsection
