<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    function Acceuil()
    {

        return View('pages.acceuil',['data'=>'']);
    }
    function  get_media($data)
    {
        return View('pages.acceuil',['data'=>$data]);
    }
    function Archive()
    {
        return View('pages.archive');
    }
}
