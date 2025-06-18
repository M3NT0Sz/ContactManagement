@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 mx-auto" style="max-width: 500px;">
        <h2 class="mb-4 text-primary fw-bold">Edit Contact</h2>
        <form action="{{ route('contacts.update', $contact) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $contact->name) }}">
                @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $contact->contact) }}">
                @error('contact')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}">
                @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success px-4">Update</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary px-4">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
