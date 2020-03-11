<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::all();
        return view('resources.people.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'surname' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'avatar' => 'required',
        ]);

        $person = Person::create($request->all());

        if ($request->hasFile("avatar")) {
            $url = upload_file('avatar','/pasports');
            $person->avatar = $url;
            $person->save();
        }

        return redirect('/people');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('resources.people.edit', compact("person"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'surname' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'avatar' => 'required',
        ]);

        $person->update($request->input());

        if ($request->hasFile("avatar")) {
            $url = upload_file('avatar','/pasports');
            $person->avatar = $url;
            $person->save();
        }

        return redirect('/people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect('/people');
    }
}
