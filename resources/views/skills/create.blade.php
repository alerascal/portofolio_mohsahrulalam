@extends('layouts.backend')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Skill</h1>

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

    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category" class="form-control" required>
                <option value="">Pilih Kategori</option>
                <option value="Bahasa Pemrograman">Bahasa Pemrograman</option>
                <option value="Framework">Framework</option>
                <option value="Database">Database</option>
                <option value="Tools">Tools</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Skill</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Icon (FontAwesome)</label>
            <input type="text" name="icon" class="form-control" placeholder="contoh: fab fa-php">
        </div>

        <div class="mb-3">
            <label class="form-label">Level (%)</label>
            <input type="number" name="level" class="form-control" min="0" max="100" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
