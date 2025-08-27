@extends('layouts.backend')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Skill</h1>

    <a href="{{ route('skills.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category" class="form-control" required>
                <option value="Bahasa Pemrograman" {{ $skill->category == 'Bahasa Pemrograman' ? 'selected' : '' }}>Bahasa Pemrograman</option>
                <option value="Framework" {{ $skill->category == 'Framework' ? 'selected' : '' }}>Framework</option>
                <option value="Database" {{ $skill->category == 'Database' ? 'selected' : '' }}>Database</option>
                <option value="Tools" {{ $skill->category == 'Tools' ? 'selected' : '' }}>Tools</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Skill</label>
            <input type="text" name="name" class="form-control" value="{{ $skill->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Icon (FontAwesome)</label>
            <input type="text" name="icon" class="form-control" value="{{ $skill->icon }}" placeholder="contoh: fab fa-php">
        </div>

        <div class="mb-3">
            <label class="form-label">Level (%)</label>
            <input type="number" name="level" class="form-control" min="0" max="100" value="{{ $skill->level }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
