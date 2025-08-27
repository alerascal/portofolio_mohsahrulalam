@extends('layouts.backend')

@section('content')
<h1>Add Contact</h1>
<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- penting untuk method update -->
    
    <div class="mb-3">
        <label>Type</label>
        <input type="text" name="type" class="form-control" required placeholder="email / phone / location" value="{{ old('type', $contact->type) }}">
    </div>
    <div class="mb-3">
        <label>Icon (FontAwesome class)</label>
        <input type="text" name="icon" class="form-control" placeholder="fas fa-envelope" value="{{ old('icon', $contact->icon) }}">
    </div>
    <div class="mb-3">
        <label>Value</label>
        <input type="text" name="value" class="form-control" required placeholder="Your contact info" value="{{ old('value', $contact->value) }}">
    </div>
    <div class="mb-3">
        <label>Color (optional)</label>
        <input type="text" name="color" class="form-control" placeholder="#25d366" value="{{ old('color', $contact->color) }}">
    </div>
    <button class="btn btn-primary">Update</button>
</form>

@endsection
