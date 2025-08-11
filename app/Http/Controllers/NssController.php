<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NssController extends Controller
{
    public function nss()
    {
        return view('pages.nss.nss');
    }
}
