<?php

namespace App\Http\Controllers;

use App\Models\Person; // Fixed model name
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a list of persons.
     */
    public function index()
    {
        $persons = Person::all(); // Fixed model reference

        return view('personList', compact('persons'));
    }

    /**
     * Store a new person in the database.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        // Create and save a new person
        Person::create([
            'name' => $request->name,
            'age' => $request->age,
        ]);

        return redirect()->route('person.index')->with('success', 'Person added successfully!');
    }
}
