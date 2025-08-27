@extends('layouts.backend')

@section('content')
<div class="container">
    <h2>Manajemen Link Sosial Media</h2>
    <a href="{{ route('social_links.create') }}" class="btn btn-primary mb-3">Tambah Link</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Icon</th>
                <th>URL</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($links as $link)
            <tr>
                <td>{{ $link->name }}</td>
                <td><i class="{{ $link->icon }}"></i></td>
                <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                <td>
                    <a href="{{ route('social_links.edit', $link->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('social_links.destroy', $link->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus link ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
