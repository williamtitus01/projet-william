<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //mise en place d'un middleware
    //création des fonctions crées dans les routes du fichier route
    public function _construct()
    {
        $this->middleware('auth');
    }
  
}
