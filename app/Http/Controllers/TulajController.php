<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TulajController extends Controller
{
    public function index(){
        
         
        
        return view("tulaj");
    }
}
