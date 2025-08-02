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
}
