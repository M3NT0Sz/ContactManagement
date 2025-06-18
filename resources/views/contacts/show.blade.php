@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 mx-auto" style="max-width: 500px;">
        <h2 class="mb-4 text-primary fw-bold">Contact Details</h2>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>ID:</strong> {{ $contact->id }}</li>
            <li class="list-group-item"><strong>Name:</strong> {{ $contact->name }}</li>
            <li class="list-group-item"><strong>Contact:</strong> {{ $contact->contact }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $contact->email }}</li>
        </ul>
        <div class="d-flex justify-content-between">
            <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning px-4">Edit</a>
            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger px-4" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary px-4">Back</a>
        </div>
    </div>
</div>
@endsection
