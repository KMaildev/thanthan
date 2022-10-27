<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurPartnerController extends Controller
{
    public function index()
    {
        return view('partners.index');
    }
}
