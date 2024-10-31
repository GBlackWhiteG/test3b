<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Number;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('sername')->get();

        return view('contacts.index', compact('contacts'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'middlename' => 'required',
            'sername' => 'required',
        ]);

        Contact::create($data);

        return redirect()->route('contacts.index');
    }

    public function show(Contact $contact)
    {
        $numbers = Number::where('contact_id', $contact->id)->orderBy('created_at', 'desc')->get();

        return view('contacts.show', compact('contact'), compact('numbers'));
    }
}
