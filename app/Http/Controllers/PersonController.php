<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Requests\StorePersonRequest;

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


    return back()->with('person-added',"Person registered successfully!");

   }
}
