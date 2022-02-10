<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    function Acceuil()
    {
        return View('pages.acceuil');
    }
    function Archive()
    {
        return View('pages.archive');
    }
}
