@extends('layouts.backend')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Hero Section</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('hero.create') }}" class="btn btn-primary mb-3">Tambah Hero</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Badge</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Deskripsi</th>
                    <th>Stats</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($heroes as $hero)
                    <tr>
                        <td>{{ $hero->id }}</td>
                        <td>{{ $hero->badge }}</td>
                        <td>{{ $hero->title }}</td>
                        <td>{{ $hero->subtitle }}</td>
                        <td>{{ $hero->desc }}</td>
                        <td>
                            @if(is_array($hero->stats))
                                <ul class="list-unstyled">
                                    @foreach($hero->stats as $stat)
                                        <li><strong>{{ $stat['label'] }}</strong>: {{ $stat['value'] }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <em>Tidak ada data</em>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('hero.edit', $hero->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('hero.destroy', $hero->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data Hero Section</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
