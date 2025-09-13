<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherController extends Controller
{
  

    public function pdfView($slug)
    {
       $links=DB::table('indicator_links')->where('slug',$slug)->first();
        return view('pages.other.pdfview', ['links' => $links]);
    }
}
