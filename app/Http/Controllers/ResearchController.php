<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function research()
    {
        return view('pages.research.research-innovation');
    }
}
