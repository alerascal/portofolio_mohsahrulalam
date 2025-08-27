@extends('layouts.backend')

@section('content')
<div class="container">
    <h1>Settings</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('settings.update') }}" method="POST">
        @csrf

        <!-- Nama -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Password Lama -->
        <div class="mb-3">
            <label for="current_password" class="form-label">Password Lama</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
            @error('current_password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Password Baru -->
        <div class="mb-3">
            <label for="new_password" class="form-label">Password Baru (opsional)</label>
            <input type="password" name="new_password" id="new_password" class="form-control">
            @error('new_password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Konfirmasi Password Baru -->
        <div class="mb-3">
            <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Settings</button>
    </form>
</div>
@endsection
