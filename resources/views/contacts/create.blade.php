@extends('layouts.backend')

@section('content')
<h1>Add Contact</h1>
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Type</label>
        <input type="text" name="type" class="form-control" required placeholder="email / phone / location">
    </div>
    <div class="mb-3">
        <label>Icon (FontAwesome class)</label>
        <input type="text" name="icon" class="form-control" placeholder="fas fa-envelope">
    </div>
    <div class="mb-3">
        <label>Value</label>
        <input type="text" name="value" class="form-control" required placeholder="Your contact info">
    </div>
    <div class="mb-3">
        <label>Color (optional)</label>
        <input type="text" name="color" class="form-control" placeholder="#25d366">
    </div>
    <button class="btn btn-primary">Save</button>
</form>
@endsection
