<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweryController extends Controller
{
    public function store(Request $request)
    {   
        // validation
        $misdatos = $request->validate([
            'name'=>'required|min:3',
            'city'=>'required',
            'description'=>'required|min:10|max:255',
            'img'=>'required'
        ]);

        // guardar la brewery en el db

        // salir
        return redirect()->route('home')->with('message',"The brewery has been created succesfully");
    }

    public function index()
    {
        // recuperar las breweries del db
        $breweries = $this->breweries;
        // return view('breweries',compact('breweries'));
        return view('breweries',['breweries'=>$breweries]);
    }
}
