<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BalesetController extends Controller
{
    public function index(){
     return view("ajaj");

    }
    public function store(Request $req)
    {
        $req->validate(
            [
                "Idopont" => "required|date",
                "serules_leirasa" => "required|min:5|max:500"
                
            ],
            [
                "Idopont.required" => "A mezőt kötelező kitölteni!",
                "Idopont.date" => "Dátumot adj meg!",

                "serules_leirasa.required" => "A mezőt kötelező kitölteni!",
                "serules_leirasa.min" => "Minimum 10 karaktert kell tartalmaznia!",
                "serules_leirasa.max" => "Maximum 500 karaktert tartalmazhat!"

                
            ]
            );
            DB::insert("INSERT INTO baleset(Idopont, serules_leirasa) VALUES (?,?)",[$req->get('Idopont'),$req->get('serules_leirasa')]);
            return redirect("/ajaj")->with("kesz","Az adatfelvetel sikeres!");
    }
}

