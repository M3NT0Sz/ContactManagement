@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0 fw-bold text-primary">Contacts</h1>
            @auth
                <a href="{{ route('contacts.create') }}" class="btn btn-primary px-4">Add Contact</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary px-4">Login to Add Contact</a>
            @endauth
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle bg-white rounded shadow-sm">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td><a href="{{ route('contacts.show', $contact) }}" class="text-decoration-none text-dark fw-semibold">{{ $contact->name }}</a></td>
                            <td>{{ $contact->contact }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No contacts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $contacts->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
