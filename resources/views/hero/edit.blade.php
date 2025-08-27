@extends('layouts.backend')

@section('content')
<div class="container">
    <h1>Edit Hero Section</h1>

    <form action="{{ route('hero.update', $hero->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="badge">Badge</label>
            <input type="text" name="badge" class="form-control" value="{{ old('badge', $hero->badge) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $hero->title) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $hero->subtitle) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="desc">Description</label>
            <textarea name="desc" class="form-control" rows="3" required>{{ old('desc', $hero->desc) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@push('scripts')
<script>
    let statIndex = {{ count($project->stats) }};
    document.getElementById('add-stat').addEventListener('click', function() {
        let wrapper = document.getElementById('stats-wrapper');
        let newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-2', 'stat-item');
        newRow.innerHTML = `
            <div class="col-md-5">
                <input type="text" name="stats[${statIndex}][label]" class="form-control" placeholder="Label" required>
            </div>
            <div class="col-md-5">
                <input type="text" name="stats[${statIndex}][value]" class="form-control" placeholder="Value" required>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger btn-sm remove-stat">X</button>
            </div>
        `;
        wrapper.appendChild(newRow);
        statIndex++;
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-stat')) {
            e.target.closest('.stat-item').remove();
        }
    });
</script>
@endpush
@endsection
