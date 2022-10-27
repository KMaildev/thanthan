<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChairmanController extends Controller
{
    public function index()
    {
        return view('chairman.index');
    }
}
