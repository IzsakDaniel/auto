<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Welcome extends Controller
{
    public function index(){
        $autok = DB::select("SELECT * FROM autok");
        $tulaj = DB::select("SELECT nev FROM tulajdonosok");
        $baleset = DB::select("SELECT Idopont FROM baleset");

        return view('welcome', ["autok"=> $autok],
        ["tulaj"=> $tulaj])->with(["baleset"=>$baleset]);
    }
    
}
