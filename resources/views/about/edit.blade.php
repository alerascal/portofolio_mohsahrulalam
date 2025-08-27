@extends('layouts.backend')

@section('content')
<div class="container">
    <h1>Edit Data About</h1>
    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $about->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ $about->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" class="form-control">
            @if($about->image)
                <img src="{{ asset('storage/' . $about->image) }}" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection