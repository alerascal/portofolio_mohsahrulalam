@extends('layouts.backend')
@section('title', 'Create Project')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title shimmer">Create Project</h2>
            <p class="section-desc">Fill in the details below to create a new project.</p>
        </div>

        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf

            <div class="form-grid">
                <div class="fg">
                    <label for="name" class="form-label">Project Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required placeholder="Enter project name">
                    @error('name')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
  <label for="category">Kategori</label>
  <input type="text" name="category" class="form-control" value="{{ old('category', $project->category ?? '') }}">
</div>

<div class="mb-3">
  <label for="description">Deskripsi</label>
  <textarea name="description" class="form-control">{{ old('description', $project->description ?? '') }}</textarea>
</div>

<div class="mb-3">
  <label for="demo_link">Demo Link</label>
  <input type="url" name="demo_link" class="form-control" value="{{ old('demo_link', $project->demo_link ?? '') }}">
</div>

<div class="mb-3">
  <label for="source_link">Source Link</label>
  <input type="url" name="source_link" class="form-control" value="{{ old('source_link', $project->source_link ?? '') }}">
</div>

<div class="mb-3">
  <label for="technologies">Teknologi (pisahkan dengan koma)</label>
  <input type="text" name="technologies" class="form-control" value="{{ old('technologies', $project->technologies ?? '') }}">
</div>


                <div class="fg">
                    <label for="client" class="form-label">Client</label>
                    <input type="text" id="client" name="client" value="{{ old('client') }}" class="form-control" placeholder="Enter client name">
                    @error('client')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="fg">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="" disabled {{ old('status') ? '' : 'selected' }}>Select status</option>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="on-hold" {{ old('status') == 'on-hold' ? 'selected' : '' }}>On Hold</option>
                    </select>
                    @error('status')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="fg">
                    <label for="priority" class="form-label">Priority</label>
                    <select id="priority" name="priority" class="form-control" required>
                        <option value="" disabled {{ old('priority') ? '' : 'selected' }}>Select priority</option>
                        <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                        <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                    </select>
                    @error('priority')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="fg">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}" class="form-control">
                    @error('deadline')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="fg">
                    <label for="progress" class="form-label">Progress (%)</label>
                    <input type="number" id="progress" name="progress" value="{{ old('progress', 0) }}" min="0" max="100" class="form-control" required placeholder="Enter progress (0-100)">
                    @error('progress')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="fg form-grid-full">
                    <label for="cover_image" class="form-label">Cover Image</label>
                    <input type="file" id="cover_image" name="cover_image" class="form-control" accept="image/*">
                    @error('cover_image')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        <div id="gallery-wrapper">
    <label for="images" class="form-label">Gallery Images</label>
    <input type="file" name="images[]" class="form-control mb-2" accept="image/*">

    <button type="button" class="btn btn-sm btn-success" onclick="addImageInput()">+ Tambah Foto</button>
</div>

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
</script>



            <div class="form-actions">
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Create Project</button>
            </div>
        </form>
    </div>
</main>
@endsection