@extends('layouts.backend')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Pengalaman</h1>

    <form action="{{ route('experiences.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tahun/Periode</label>
            <input type="text" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Framework / Tools</label>
            <input type="text" name="company" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
