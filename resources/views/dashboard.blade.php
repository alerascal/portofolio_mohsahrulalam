@extends('layouts.backend')
@section('title', 'Dashboard - Moh Sahrul Alamsyah')

@section('content')
<main class="main-content">
    <!-- ================= Stats Cards ================= -->
    <div class="stats-grid">
        <!-- Total Visitors -->
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--primary)">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="stat-value">{{ $totalVisitors }}</div>
            <div class="stat-label">Total Visitors</div>
        </div>

        <!-- Today Visitors -->
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--success)">
                    <i class="fas fa-user-check"></i>
                </div>
            </div>
            <div class="stat-value">{{ $todayVisitors }}</div>
            <div class="stat-label">Today Visitors</div>
        </div>

        <!-- Monthly Visitors -->
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--warning)">
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </div>
            <div class="stat-value">{{ $monthlyVisitors }}</div>
            <div class="stat-label">This Month</div>
        </div>

        <!-- Yearly Visitors -->
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon" style="background: var(--secondary)">
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
            <div class="stat-value">{{ $yearlyVisitors }}</div>
            <div class="stat-label">This Year</div>
        </div>
    </div>

    <!-- ================= Charts ================= -->
    <div class="charts-grid">
        <div class="chart-card">
            <h3>Daily Visitors (This Month)</h3>
            <canvas id="dailyChart"></canvas>
        </div>
        <div class="chart-card">
            <h3>Monthly Visitors (This Year)</h3>
            <canvas id="monthlyChart"></canvas>
        </div>
    </div>

    <!-- ================= Projects Table ================= -->
    <div class="projects-section">
        <div class="table-wrapper">
            <table class="projects-table">
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Client</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Deadline</th>
                        <th>Progress</th>
                        <th class="actions-col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->client }}</td>
                            <td>
                                <span class="status-badge status-{{ strtolower(str_replace(' ', '-', $project->status)) }}">
                                    {{ $project->status }}
                                </span>
                            </td>
                            <td>
                                <span class="priority-badge priority-{{ strtolower($project->priority) }}">
                                    {{ $project->priority }}
                                </span>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($project->deadline)->format('M d, Y') }}</td>
                            <td>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: {{ $project->progress }}%;"></div>
                                    <span>{{ $project->progress }}%</span>
                                </div>
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty-state">
                                No projects found. <a href="{{ route('projects.create') }}">Create one</a>!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Daily Visitors Chart
    const dailyCtx = document.getElementById('dailyChart');
    new Chart(dailyCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode(array_keys($dailyChart->toArray())) !!},
            datasets: [{
                label: 'Visitors',
                data: {!! json_encode(array_values($dailyChart->toArray())) !!},
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false,
                tension: 0.1
            }]
        }
    });

    // Monthly Visitors Chart
    const monthlyCtx = document.getElementById('monthlyChart');
    new Chart(monthlyCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']) !!},
            datasets: [{
                label: 'Visitors',
                data: {!! json_encode(array_values($monthlyChart->toArray())) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
            }]
        }
    });
</script>
@endpush
