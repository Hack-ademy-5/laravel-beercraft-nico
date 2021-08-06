<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    public function home()
    {
        $breweries = $this->breweries;
        
        return view('welcome',compact('breweries'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $misadatos = $request->validate([
            "name"=>"required|min:3",
            "email"=>"required",
            "subject"=>"required|min:3|max:30",
            "message"=>"required|min:10|max:255"
        ]);

        // guardar los datos de contacto en el db
        
        // enviar un correo de confirmacion

        // salir 
        return redirect()->route('home')->with('message',"Hemos recibido correctamente tu mensaje, pronto te contestaremos");
    }


}
