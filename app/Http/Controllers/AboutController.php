<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        return view('about2');
    }

    public function store()
    {
        dd('submitted');
    }
}
