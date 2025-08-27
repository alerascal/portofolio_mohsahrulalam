@extends('layouts.backend')

@section('content')
<div class="container">
    <h2>Edit Link Sosial Media</h2>
    <form action="{{ route('social_links.update', $social_link->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Platform</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $social_link->name }}" required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon (FontAwesome)</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ $social_link->icon }}" required>
            <small class="text-muted">Gunakan class FontAwesome, misalnya: <code>fab fa-facebook</code>, <code>fab fa-instagram</code>.</small>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ $social_link->url }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('social_links.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
