<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TulajController extends Controller
{
    public function index(){
        
         
        
        return view("tulaj");
    }
    public function store(Request $req)
    {
        $req->validate(
            [
                "tnev" => "required|min:2|max:15",
                "start" => "required|date",
                "end" => "required|date"
                
            ],
            [
                "tnev.required" => "A mezőt kötelező kitölteni!",
                "tnev.min" => "Legalább 2 karaktert adj meg!",
                "tnev.max" => "Maximum 15 karaktert adj meg!",

                "start.required" => "A mezőt kötelező kitölteni!",
                "start.date" => "Dátumot adj meg!",
                "end.required" => "A mezőt kötelező kitölteni!",
                "end.date" => "Dátumot adj meg!"

                
            ]
            );
            DB::insert("INSERT INTO tulajdonosok(nev, tulajdonjog_kezd, tulajdonjog_veg) VALUES (?,?,?)",[$req->get('tnev'),$req->get('start'),$req->get('end')]);
            return redirect("/tulaj")->with("kesz","Az adatfelvetel sikeres!");
    }
}
