<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    public function ShowDataOfOwner(){
        return view('Paginas.DatosDueño');
    }
}
