<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;


class WildController extends Controller
{
//methode qui affiche les noms
    public function allNames()
    {
        $names = Name::all(); //Demande au model Name de récupérer les name dans la BDD

        return view('welcome', ['names' => $names]); 
    }

//methode qui permet l'ajout d'un personnage dans la bdd
    public function added(Request $request)
    {
        $name = new Name; //Instancie le Model Name.php

        $name->name = $request->name;// $name->name: Récupère le name dans la BDD et $request->name : met le name dans la variable $request

        $name->save();
        
        return redirect('/');

    }

}