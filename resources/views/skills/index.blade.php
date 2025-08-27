@extends('layouts.backend')

@section('title', 'Skills - Moh Sahrul Alamsyah')

@section('content')
<main class="main-content">
    <!-- Section Header -->
    <div class="section-header">
        <h3 class="section-title">Daftar Skills</h3>
        <a href="{{ route('skills.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Skill
        </a>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Skills Table -->
    @foreach($skills as $category => $skillGroup)
        <div class="projects-section">
            <div class="table-container">
                <div class="card mb-5 shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center bg-white border-bottom">
                        <h5 class="mb-0">{{ $category }}</h5>
                        <span class="badge bg-secondary">{{ $skillGroup->count() }} skill(s)</span>
                    </div>
                    <div class="card-body p-0">
                        <table class="projects-table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Icon</th>
                                    <th>Level</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($skillGroup as $skill)
                                    <tr>
                                        <td class="fw-bold">{{ $skill->name }}</td>
                                        <td class="text-center">
                                            @if($skill->icon)
                                                <i class="{{ $skill->icon }} fs-5"></i>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: {{ $skill->level }}%;" role="progressbar" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                <span>{{ $skill->level }}%</span>
                                            </div>
                                        </td>
                                        <td class="actions">
                                            <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Yakin hapus skill ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
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
            </div>
        </div>
    @endforeach

    <!-- Empty State -->
    @if(empty($skills))
        <div class="empty-state">
            <p>Tidak ada skill yang tersedia saat ini.</p>
            <a href="{{ route('skills.create') }}" class="btn btn-primary">Tambah Skill Baru</a>
        </div>
    @endif
</main>

@push('scripts')
    <script>
        // Auto-hide success alert after 5 seconds
        document.addEventListener('DOMContentLoaded', () => {
            const alerts = document.querySelectorAll('.alert.alert-dismissible');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 500);
                }, 5000);
            });
        });
    </script>
@endpush
@endsection