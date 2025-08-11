<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{
    public function admissionProcess()
    {
        
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();
        $admissionSection = $allItems->where('parent_id', 71);

        $ugCourse=DB::table('courses')
            ->where('status', 1)
            ->where('type', 'ug')
            ->get();

        $pgCourse = DB::table('courses')
            ->where('status', 1)
            ->where('type', 'pg')
            ->get();  
        return view('pages.admission.admission-process',compact('allItems','admissionSection','ugCourse','pgCourse')); // Assuming you have a view named 'admission.process'
    }
}
