@extends('layouts.backend')

@section('content')
<h1>Manage Contacts</h1>
<a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add Contact</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Type</th>
            <th>Value</th>
            <th>Icon</th>
            <th>Color</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->type }}</td>
            <td>{{ $contact->value }}</td>
            <td><i class="{{ $contact->icon }}"></i></td>
            <td style="background: {{ $contact->color ?? 'transparent' }}">{{ $contact->color }}</td>
            <td>
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this contact?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
