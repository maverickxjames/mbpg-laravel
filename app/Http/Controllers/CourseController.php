<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class CourseController extends Controller
{
    public function courses()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();
        $courseSection = $allItems->where('parent_id', 23);

        $ugCourse=DB::table('courses')
            ->where('status', 1)
            ->where('type', 'ug')
            ->get();

        $pgCourse = DB::table('courses')
            ->where('status', 1)
            ->where('type', 'pg')
            ->get();

        $phdCourse = DB::table('courses')
            ->where('status', 1)
            ->where('type', 'phd')
            ->get();
        // Logic to retrieve and display courses
        return view('pages.courses.course', compact('allItems','courseSection','ugCourse','pgCourse','phdCourse')); // Assuming you have a view named 'courses.index'
    }
}
