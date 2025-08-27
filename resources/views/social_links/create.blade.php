@extends('layouts.backend')

@section('content')
<div class="container">
    <h2>Tambah Link Sosial Media</h2>
    <form action="{{ route('social_links.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Platform</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Contoh: GitHub" required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon (FontAwesome)</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Contoh: fab fa-github" required>
            <small class="text-muted">Gunakan class FontAwesome, misalnya: <code>fab fa-facebook</code>, <code>fab fa-twitter</code>.</small>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" placeholder="https://github.com/username" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('social_links.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
