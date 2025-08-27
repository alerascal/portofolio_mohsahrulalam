@extends('layouts.backend')

@section('content')
<div class="container">
    <h1>Tambah Data About</h1>
    <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection