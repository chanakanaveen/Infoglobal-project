<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;

class PersonController extends Controller
{
   public function index(){

    $people = Person::all();
    return view('show',compact('people'));

   }

   public function store(StorePersonRequest $request ){


    $request->validated();

    Person::create([
            'name' => $request->name,
            'address' => $request->address,
            'id_number' => $request->id_number,
            'dob' => $request->dob,
            'age' => $request->age,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'religion' => $request->religion,
            'nationality' => $request->nationality,

    ]);



    return back()->with('person-added', "Person registered successfully!");


   }

   public function person(Person $person){
    return view('person',compact('person'));
   }

   public function edit(Person $person){
    return view('edit',compact('person'));
   }

   public function update(UpdatePersonRequest $request,Person $person){

    $person->update($request->only([
        'name',  'dob', 'age', 'mobile', 'gender', 'address', 'religion', 'nationality'
    ]));

    // return back()->with('person-updated', "Person updated successfully!");
    return redirect('/show')->with('person-updated', 'Profile updated!');

   }

   public function delete(Person $person){

    $person->delete();
    return back()->with('person-deleted', "Person delete successfully");
   }
}
