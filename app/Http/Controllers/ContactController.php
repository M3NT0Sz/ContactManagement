<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Get all contacts with pagination (10 per page)
        $contacts = Contact::paginate(10);
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        // Show the form to create a new contact
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        // Validate and store a new contact
        $validated = $request->validate([
            'name' => 'required|string|min:6',
            'contact' => 'required|digits:9|unique:contacts,contact',
            'email' => 'required|email|unique:contacts,email',
        ]);
        $contact = Contact::create($validated);
        return redirect()->route('contacts.show', $contact);
    }

    public function show(Contact $contact)
    {
        // Show details of a single contact
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        // Show the form to edit an existing contact
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        // Validate and update the contact
        $validated = $request->validate([
            'name' => 'required|string|min:6',
            'contact' => 'required|digits:9|unique:contacts,contact,' . $contact->id,
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
        ]);
        $contact->update($validated);
        return redirect()->route('contacts.show', $contact);
    }

    public function destroy(Contact $contact)
    {
        // Soft delete the contact
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
