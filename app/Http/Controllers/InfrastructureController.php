<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfrastructureController extends Controller
{
    public function infrastructure()
    {
        $allItems=DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $infrastructureSection = $allItems->where('parent_id', 40);

        return view('pages.infrastructure.infrastructure', compact('allItems','infrastructureSection')); // Assuming you have a view named 'infrastructure'
    }
}
