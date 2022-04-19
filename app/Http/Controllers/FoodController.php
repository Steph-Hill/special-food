<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /* Page Principal */
    public function index(){

        /*
        Lecture de l'element food avec la pagination de 4 elements
        */
        $foods = Food::Paginate(4);

        /**/
        return view("accueil", compact("foods"));

    }

    public function detail($id=0){


        $food = Food::where("id",$id)->first();

      

        return view("detail",compact("food"));
    }
}
