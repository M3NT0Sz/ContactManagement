@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 mx-auto" style="max-width: 500px;">
        <h2 class="mb-4 text-primary fw-bold">Add Contact</h2>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required minlength="6">
                @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}" required pattern="\d{9}">
                @error('contact')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success px-4">Save</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary px-4">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
