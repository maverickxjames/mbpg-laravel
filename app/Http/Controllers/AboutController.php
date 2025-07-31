<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function about()
    {
        return view('pages.about.aboutus');
    }

    public function conduct($page)
    {
        return view('pages.about.conduct', compact('page'));
    }

    public function chairman_msg()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();
        $aboutSection = $allItems->where('parent_id', 1);
        return view('pages.about.chairman', compact('aboutSection', 'allItems'));
    }

    public function director_msg()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();
        $aboutSection = $allItems->where('parent_id', 1);
        return view('pages.about.director', compact('aboutSection', 'allItems'));
    }

    public function principal_msg()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();
        $aboutSection = $allItems->where('parent_id', 1);
        return view('pages.about.principal', compact('aboutSection', 'allItems'));
    }

    public function vision_mission()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();
        $aboutSection = $allItems->where('parent_id', 1);
        return view('pages.about.mission', compact('aboutSection', 'allItems'));
    }

    public function swoc()
    {
        return view('pages.about.swoc' );
    }

    public function perspective()
    {
        return view('pages.about.perspective');
    }

    public function organogram()
    {
        return view('pages.about.organogram');
    }

    public function e_governance()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();
        $aboutSection = $allItems->where('parent_id', 1);

        $govrnanceData = DB::table('governances')->where('status', 1)
            ->orderBy('sort')
            ->get();
        return view('pages.about.egovernance', compact('aboutSection', 'allItems', 'govrnanceData'));
    }
}
