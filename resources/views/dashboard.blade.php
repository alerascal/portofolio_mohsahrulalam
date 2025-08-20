@extends('layouts.backend') @section('title', 'Dashboard - Moh Sahrul Alamsyah')
@section('content')
<!-- Main Content -->
<main class="main-content">
    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--primary)">
                    <i class="fas fa-project-diagram"></i>
                </div>
            </div>
            <div class="stat-value">24</div>
            <div class="stat-label">Active Projects</div>
            <div class="stat-trend trend-up">
                <i class="fas fa-arrow-up"></i>
                <span>+12% from last month</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--success)">
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <div class="stat-value">89</div>
            <div class="stat-label">Tasks Completed</div>
            <div class="stat-trend trend-up">
                <i class="fas fa-arrow-up"></i>
                <span>+8% from last week</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--warning)">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
            <div class="stat-value">156</div>
            <div class="stat-label">Hours This Month</div>
            <div class="stat-trend trend-down">
                <i class="fas fa-arrow-down"></i>
                <span>-5% from last month</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--secondary)">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
            <div class="stat-value">$12,450</div>
            <div class="stat-label">Revenue</div>
            <div class="stat-trend trend-up">
                <i class="fas fa-arrow-up"></i>
                <span>+15% from last month</span>
            </div>
        </div>
    </div>

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
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-secondary">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
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