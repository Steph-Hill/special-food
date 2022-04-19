<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
        /*
        Formulaire
        */
    public function index(){

        /*
        Affiche la page contact dans view
        */
        return view("contact");

    }

    /**
     *  Enregistrement du formulaire
     **/

    public function save(Request $request){

        $validated = $request->validate([
            'nom' => 'required',
            
        ]);

        dd($request);

        return view("contact");

    }
}
