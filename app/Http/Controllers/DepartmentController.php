<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class DepartmentController extends Controller
{
    public function departments()
    {

        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $departmentSection = $allItems->where('parent_id', 27);
        // Logic to retrieve and display departments
        return view('pages.departments.department',compact('allItems','departmentSection')); // Assuming you have a view named 'departments.index'
    }
}
