<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
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
