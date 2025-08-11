<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumsController extends Controller
{
    public function alumni_association()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $forumSection = $allItems->where('parent_id', 48);
        return view('pages.Forums.alumni-association', compact('allItems', 'forumSection'));
    }

    public function anti_ragging()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $forumSection = $allItems->where('parent_id', 48);
        return view('pages.Forums.anti-ragging', compact('allItems', 'forumSection'));
    }

    public function placement()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $forumSection = $allItems->where('parent_id', 48);
        return view('pages.Forums.placement', compact('allItems', 'forumSection'));
    }

    public function sveep()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $forumSection = $allItems->where('parent_id', 48);
        return view('pages.Forums.sveep', compact('allItems', 'forumSection'));
    }

    public function special()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $forumSection = $allItems->where('parent_id', 48);
        return view('pages.Forums.special', compact('allItems', 'forumSection'));
    }

    public function grievance_redressal()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $forumSection = $allItems->where('parent_id', 48);
        return view('pages.Forums.grievance', compact('allItems', 'forumSection'));
    }

    public function women()
    {
        $allItems = DB::table('menus')->where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $forumSection = $allItems->where('parent_id', 48);
        return view('pages.Forums.women-cell', compact('allItems', 'forumSection'));
    }
}
