@extends('layouts.backend')

@section('title', 'Create Project - Moh Sahrul Alamsyah')

@section('content')
<main class="main-content">
    <div class="section-header">
        <h3 class="section-title">Create New Project</h3>
    </div>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="client" class="form-label">Client</label>
            <input type="text" class="form-control" id="client" name="client" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label">Priority</label>
            <input type="text" class="form-control" id="priority" name="priority" required>
        </div>
        <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" class="form-control" id="deadline" name="deadline" required>
        </div>
        <div class="mb-3">
            <label for="progress" class="form-label">Progress</label>
            <input type="number" class="form-control" id="progress" name="progress" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Project</button>
    </form>
</main>
@endsection
