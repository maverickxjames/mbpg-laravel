<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademicsController extends Controller
{
    public function academicCalendar()
    {
        // Logic to retrieve and return the academic calendar view
        return view('pages.academics.academic_calendar');
    }

    public function co_pso()
    {
        // Logic to retrieve and return the CO-PSO view
        return view('pages.academics.co_pso');
    }

    public function results()
    {
        // Logic to retrieve and return the results view
        return view('pages.academics.result');
    }

    public function activity()
    {
        $activities = DB::table('activity')
            ->orderBy('created_at', 'desc')
            ->paginate(12); // Show 12 per page

        $currentPage = $activities->currentPage(); // Active page number
        $totalPages = $activities->lastPage();     // Total number of pages
        $startIndex = ($currentPage - 1) * $activities->perPage() + 1; // Start index for the current page

        return view('pages.academics.activity', compact('activities', 'currentPage', 'totalPages', 'startIndex'));
    }


    public function achievement()
    {
        // Logic to retrieve and return the achievement view
        return view('pages.academics.achievement');
    }

    public function MoU_collaboration()
    {
        // Logic to retrieve and return the MoU collaboration view
        return view('pages.academics.collaborations');
    }
}
