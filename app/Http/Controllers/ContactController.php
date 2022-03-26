<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        // $contacts = Contact::all();
        // $contacts = Contact::orderBy('first_name', 'asc')->get(); 
        $contacts = Contact::orderBy('id', 'desc')->where(function ($query) {
        })->paginate(4);
        return view('contacts.index', compact('contacts'));
    }
    public function create()
    {
        $contact = new Contact();
        return view('contacts.create', compact('contact'));
    }
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'age' => 'required|numeric',
            'description' => 'required|max:75',
        ]);
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('msg', 'New Patient Added...');
    }
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'age' => 'required|numeric',
            'description' => 'required|max:75',
        ]);
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('msg', 'Patient Updated Successfully...');
    }
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return back()->with('msg', "Patient Deleted...");
    }
}
