@extends('layouts.backend')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Pengalaman</h1>
    <a href="{{ route('experiences.create') }}" class="btn btn-primary mb-3">Tambah Pengalaman</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Tahun</th>
                <th>Judul</th>
                <th>Framework/Tools</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($experiences as $exp)
            <tr>
                <td>{{ $exp->date }}</td>
                <td>{{ $exp->title }}</td>
                <td>{{ $exp->company }}</td>
                <td>{{ Str::limit($exp->description, 100) }}</td>
                <td>
                    <a href="{{ route('experiences.edit', $exp->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('experiences.destroy', $exp->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
