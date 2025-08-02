<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NAACController extends Controller
{
    public function iqac()
    {
           $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $naacSection = $allItems->where('parent_id', 32);
        // Logic to retrieve and display departments
        return view('pages.naac.iqac',compact('allItems','naacSection')); // Assuming you have a view named 'departments.index'
    }

    public function institutional_distinctiveness()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $naacSection = $allItems->where('parent_id', 32);
        // Logic to retrieve and display departments
        return view('pages.naac.institutional-distinctiveness', compact('allItems', 'naacSection')); // Assuming you have a view named 'departments.index'
    }

    public function aap()
    {
       
        return view('pages.naac.aap'); // Assuming you have a view named 'departments.index'
    }

    public function par(){
        return view('pages.naac.par'); // Assuming you have a view named 'departments.index'
    }

    public function aishe(){
        return view('pages.naac.aishe'); // Assuming you have a view named 'departments.index'
    }

    public function iiqa_dvv(){
        return view('pages.naac.iiqa-dvv'); // Assuming you have a view named 'departments.index'
    }

    public function iqac_minutes_atr(){
        return view('pages.naac.iqac-minutes'); // Assuming you have a view named 'departments.index'
    }
}
