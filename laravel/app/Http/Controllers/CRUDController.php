<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CRUDController extends Controller
{
    //
    
    public function show()
    {
        if (Auth::check())
        {
            $title = "CRUD";
            return view('CRUD', compact('title'));
        }
        else
        {
            $errorMSG = "Strona niedostępna dla niezalogowanych";
            $title = "Błąd";
            return view('errorPage', compact('title', 'errorMSG'));
        }
    }
}
