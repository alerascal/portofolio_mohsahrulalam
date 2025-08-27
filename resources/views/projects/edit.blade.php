@extends('layouts.backend')
@section('title', 'Edit Project')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title shimmer">Edit Project</h2>
            <p class="section-desc">Update the details below to edit project.</p>
        </div>

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="fg">
                    <label for="name" class="form-label">Project Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $project->name) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="category">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category', $project->category) }}">
                </div>

                <div class="mb-3">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" class="form-control">{{ old('description', $project->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="demo_link">Demo Link</label>
                    <input type="url" name="demo_link" class="form-control" value="{{ old('demo_link', $project->demo_link) }}">
                </div>

                <div class="mb-3">
                    <label for="source_link">Source Link</label>
                    <input type="url" name="source_link" class="form-control" value="{{ old('source_link', $project->source_link) }}">
                </div>

                <div class="mb-3">
                    <label for="technologies">Teknologi</label>
                    <input type="text" name="technologies" class="form-control" value="{{ old('technologies', $project->technologies) }}">
                </div>

                <div class="fg">
                    <label for="client" class="form-label">Client</label>
                    <input type="text" id="client" name="client" value="{{ old('client', $project->client) }}" class="form-control">
                </div>

                <div class="fg">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="active" {{ old('status', $project->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="completed" {{ old('status', $project->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="pending" {{ old('status', $project->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="on-hold" {{ old('status', $project->status) == 'on-hold' ? 'selected' : '' }}>On Hold</option>
                    </select>
                </div>

                <div class="fg">
                    <label for="priority" class="form-label">Priority</label>
                    <select id="priority" name="priority" class="form-control" required>
                        <option value="low" {{ old('priority', $project->priority) == 'low' ? 'selected' : '' }}>Low</option>
                        <option value="medium" {{ old('priority', $project->priority) == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="high" {{ old('priority', $project->priority) == 'high' ? 'selected' : '' }}>High</option>
                    </select>
                </div>

                <div class="fg">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" id="deadline" name="deadline" value="{{ old('deadline', $project->deadline?->format('Y-m-d')) }}" class="form-control">
                </div>

                <div class="fg">
                    <label for="progress" class="form-label">Progress (%)</label>
                    <input type="number" id="progress" name="progress" value="{{ old('progress', $project->progress) }}" min="0" max="100" class="form-control" required>
                </div>

                <div class="fg form-grid-full">
                    <label for="cover_image" class="form-label">Cover Image</label>
                    <input type="file" id="cover_image" name="cover_image" class="form-control" accept="image/*">
                    @if($project->cover_image)
                        <img src="{{ $project->cover_image_url }}" alt="Cover" class="mt-2" width="200">
                    @endif
                </div>
            </div>

            {{-- Gallery Lama --}}
            <div class="form-grid-full mb-4">
                <h5>Gallery Lama</h5>
                <div class="row">
                    @foreach($project->images as $img)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="{{ Storage::url($img->image) }}" class="card-img-top" alt="Gallery Image">
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteImage({{ $project->id }}, {{ $img->id }})">Hapus</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Tambah Gallery Baru --}}
            <div id="gallery-wrapper" class="form-grid-full">
                <label class="form-label">Tambah Gallery Baru</label>
                <input type="file" name="images[]" class="form-control mb-2" accept="image/*">
                <button type="button" class="btn btn-sm btn-success mt-2" onclick="addImageInput()">+ Tambah Foto</button>
            </div>

            <div class="form-actions mt-4">
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Project</button>
            </div>
        </form>
    </div>
</main>

<script>
function addImageInput() {
    let wrapper = document.getElementById('gallery-wrapper');
    let input = document.createElement('input');
    input.type = 'file';
    input.name = 'images[]';
    input.classList.add('form-control','mb-2');
    input.accept = 'image/*';
    wrapper.insertBefore(input, wrapper.lastElementChild);
}

function deleteImage(projectId, imageId) {
    if(confirm('Apakah yakin ingin menghapus gambar ini?')) {
        fetch(`/projects/${projectId}/images/${imageId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        }).then(res => {
            if(res.ok) location.reload();
            else alert('Gagal menghapus gambar.');
        });
    }
}
</script>
@endsection
