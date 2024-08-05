<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request, Contact $contact)
    {
        $contacts = $contact->where('name', 'like', '%' . $request->search . '%')
            ->orWhere('email', 'like', '%' . $request->search . '%')->get();

        switch ($request->sort) {
            case 'name-asc':
                $contacts = $contact->orderBy('name', 'asc')->get();
                break;
            case 'name-desc':
                $contacts = $contact->orderBy('name', 'desc')->get();
                break;
            case 'created_at-asc':
                $contacts = $contact->orderBy('created_at', 'asc')->get();
                break;
            case 'created_at-desc':
                $contacts = $contact->orderBy('created_at', 'desc')->get();
                break;
        }

        return view('index', compact('contacts'));
    }
    public function contactForm()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validatedData  = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:contacts'],
            'phone' => ['nullable'],
            'address' => ['nullable'],
        ]);

        Contact::create($validatedData);

        return redirect()->back()->with('message', 'Contact Created Successfully');
    }
    public function editForm($id)
    {
        $contact = Contact::find($id);
        return view('edit', compact('contact'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('show', compact('contact'));
    }
    public function updateForm(Request $request, $id)
    {
        $validatedData  = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['nullable'],
            'address' => ['nullable'],
        ]);

        Contact::where('id', $id)->update($validatedData);

        return redirect()->back()->with('message', 'Contact Updated Successfully');
    }

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message', 'Contact Deleted Successfully');
    }
}
