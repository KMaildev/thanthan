<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationchartController extends Controller
{
    public function index()
    {
        return view('chart.index');
    }
}
