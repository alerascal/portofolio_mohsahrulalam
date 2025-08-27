@extends('layouts.backend')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Pengalaman</h1>

    <form action="{{ route('experiences.update', $experience->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Tahun/Periode</label>
            <input type="text" name="date" class="form-control" value="{{ $experience->date }}" required>
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $experience->title }}" required>
        </div>
        <div class="mb-3">
            <label>Framework / Tools</label>
            <input type="text" name="company" class="form-control" value="{{ $experience->company }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $experience->description }}</textarea>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
