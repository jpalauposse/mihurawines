<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ViewController extends Controller
{  
    public function vistas($vista){
        
        return view($vista);
        
    }
} 