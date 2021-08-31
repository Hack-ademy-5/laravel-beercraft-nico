<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    
    public function home()
    {
        $breweries = Brewery::all();
        
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
        DB::table('contacts')->insert($misadatos);
        // enviar un correo de confirmacion

        // salir 
        return redirect()->route('home')->with('message',"Hemos recibido correctamente tu mensaje, pronto te contestaremos");
    }

    public function contacts()
    {
        // recuperar todos los contactos del db
        $contacts = DB::table('contacts')->get(); // select * from contacts where name = "n (SQL)
        // devolver la vista pasandole los contactos
        return view('contacts',['contacts'=>$contacts]);
    }


}
