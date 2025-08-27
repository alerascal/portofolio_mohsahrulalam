@extends('layouts.backend') @section('title', 'Dashboard - Moh Sahrul Alamsyah')
@section('content')
<main class="main-content">
    <!-- Projects Table -->
    <div class="projects-section">
        <div class="section-header">
            <h3 class="section-title">Recent Projects</h3>
            <a href="{{ route('projects.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> New Project
            </a>
        </div>

        <div class="table-container">
            <table class="projects-table">
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Client</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Deadline</th>
                        <th>Progress</th>
                        <th>Cover</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->client }}</td>
                        <td>{{ $project->status }}</td>
                        <td>{{ $project->priority }}</td>
                        <td>{{ $project->deadline }}</td>
                        <td>{{ $project->progress }}%</td>
                        <td>
                            @if($project->cover_image)
                            <img
                                src="{{ asset('storage/'.$project->cover_image) }}"
                                alt="Cover"
                                width="80"
                            />
                            @else N/A @endif
                        </td>
                        <td>
                            <a
                                href="{{ route('projects.edit', $project->id) }}"
                                class="btn btn-secondary"
                            >
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form
                                action="{{ route('projects.destroy', $project->id) }}"
                                method="POST"
                                style="display: inline"
                            >
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
