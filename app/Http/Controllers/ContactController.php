<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Formulaire dans contact
    **/
    public function index(){

        $enregistrementOk = false;

        return view("contact", compact("enregistrementOk"));
    }
    /* reception et enregistrement des données de mon formulaire */

    public function save(Request $request){

        /* $request pour afficher tous les elements du tableau */

        /* dd($request); */

        $enregistrementOk = false;

        $validation = $request->validate(["nom"=>"required|min:7",
                                        
                                        "prenom"=>"required" ]);

                       // dd($validation);

                        
                    /*Verification de la variable $validation quelle n'est pas vide*/    
                    if(isset($validation)){

                        //nouvelle instance du model Contact
                        $contact = new Contact ;

                            //affectation de la valeur
                            $contact->nom         = $request->nom ;
                            $contact->prenom      = $request->prenom ;
                            $contact->email       = "mail@mail.com" ;
                            $contact->telephone   = "0696" ;
                            $contact->adresse     = "bellevue" ;
                            
                            $contact->save();


                            $enregistrementOk = true;
                    
                    }
                           

        return view("contact",compact("enregistrementOk"));

    }
}
