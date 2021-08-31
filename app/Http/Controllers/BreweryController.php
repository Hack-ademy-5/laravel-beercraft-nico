<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class BreweryController extends Controller
{
    public function store(Request $request)
    {   
        // validation
        $misdatos = $request->validate([
            'name'=>'required|min:3',
            'capacity'=>'required',
            'description'=>'required|min:10|max:255',
        ]);

        // guardar la brewery en el db
        // desde el mundo oop al mundo db
        // $brewery = new Brewery; // asociado a una tabla breweries

        // $brewery->name = $misdatos['name']; // asociada a la columna name
        // $brewery->capacity = $misdatos['capacity']; // asociada a la columna capacity
        // $brewery->description = $misdatos['description']; // asociada a la columna description
        // // hasta aquí estamos en el mundo object oriented
        // $brewery->save(); // conversion al mundo db, el objeto se convierte en record

        // Mass Assignment (todo)
        Brewery::create($misdatos);
        // salir
        return redirect()->route('home')->with('message',"The brewery has been created succesfully");
    }

    public function index()
    {
        // recuperar las breweries del db
        $breweries = Brewery::all();
        // return view('breweries',compact('breweries'));
        return view('breweries',['breweries'=>$breweries]);
    }

    public function show($id)
    {
        // recuperar la brewery con id $id
        $brewery = Brewery::findOrFail($id); // return asap
        
        return view('brewery',compact('brewery'));
    }
}
