@extends('layouts.backend')

@section('content')
<div class="container">
    <h1>Create New Hero Section</h1>
    <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="badge">Badge</label>
            <input type="text" name="badge" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="desc">Description</label>
            <textarea name="desc" class="form-control" rows="3" required></textarea>
        </div>

        {{-- ====== Stats Dinamis ====== --}}
        <div class="form-group mb-3">
            <label>Stats</label>
            <div id="stats-wrapper">
                <div class="row mb-2 stat-item">
                    <div class="col-md-5">
                        <input type="text" name="stats[0][label]" class="form-control" placeholder="Label (e.g. Experience)" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="stats[0][value]" class="form-control" placeholder="Value (e.g. 5+)" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm remove-stat">X</button>
                    </div>
                </div>
            </div>
            <button type="button" id="add-stat" class="btn btn-success btn-sm">+ Add Stat</button>
        </div>

        {{-- ====== Upload Foto Dinamis ====== --}}
        <div class="form-group mb-3">
            <label>Photos</label>
            <div id="photos-wrapper">
                <div class="row mb-2 photo-item">
                    <div class="col-md-10">
                        <input type="file" name="photos[0]" class="form-control" accept="image/*" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-sm remove-photo">X</button>
                    </div>
                </div>
            </div>
            <button type="button" id="add-photo" class="btn btn-success btn-sm">+ Add Photo</button>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

{{-- Script untuk tambah/hapus stat & foto --}}
@push('scripts')
<script>
    // === Stats Dinamis ===
    let statIndex = 1;
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

    // === Photos Dinamis ===
    let photoIndex = 1;
    document.getElementById('add-photo').addEventListener('click', function() {
        let wrapper = document.getElementById('photos-wrapper');
        let newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-2', 'photo-item');
        newRow.innerHTML = `
            <div class="col-md-10">
                <input type="file" name="photos[${photoIndex}]" class="form-control" accept="image/*" required>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger btn-sm remove-photo">X</button>
            </div>
        `;
        wrapper.appendChild(newRow);
        photoIndex++;
    });

    // Hapus stat / photo
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-stat')) {
            e.target.closest('.stat-item').remove();
        }
        if (e.target.classList.contains('remove-photo')) {
            e.target.closest('.photo-item').remove();
        }
    });
</script>
@endpush
@endsection
