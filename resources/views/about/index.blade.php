@extends('layouts.backend')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Data About</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($abouts as $about)
                <tr>
                    <td>{{ $about->id }}</td>
                    <td>{{ $about->title }}</td>
                    <td>{{ Str::limit($about->description, 50) }}</td>
                    <td>
                        @if($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" width="50">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('about.create') }}" class="btn btn-success">Tambah Data Baru</a>
</div>
@endsection