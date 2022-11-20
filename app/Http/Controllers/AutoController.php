<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AutoController extends Controller
{
    public function index(){
     return view("auto");

    }
    public function store(Request $req)
    {
        $req->validate(
            [
                "rendszam" => "required|min:4|max:8",
                "tipus" => "required|min:2|max:20",
                "szin" => "required|min:2|max:20"
            ],
            [
                "rendszam.required" => "A mezőt kötelező kitölteni!",
                "rendszam.min" => "Minimum 4 karaktert kell tartalmaznia!",
                "rendszam.max" => "Maximum 8 karaktert tartalmazhat!",

                "tipus.required" => "A mezőt kötelező kitölteni!",
                "tipus.min" => "Minimum 2 karaktert kell tartalmaznia!",
                "tipus.max" => "Maximum 20 karaktert tartalmazhat!",

                "szin.required" => "A mezőt kötelező kitölteni!",
                "szin.min" => "Minimum 2 karaktert kell tartalmaznia!",
                "szin.max" => "Maximum 20 karaktert tartalmazhat!",
            ]
            );
            DB::insert("INSERT INTO autok(rendszam, tipus, szin) VALUES (?,?,?)",[$req->get('rendszam'),$req->get('tipus'),$req->get('szin')]);
            return redirect("/auto")->with("kesz","Az adatfelvetel sikeres!");
    }
}
