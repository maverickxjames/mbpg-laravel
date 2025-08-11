<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            // Logic to retrieve and return the activity view
            return view('pages.academics.activity');
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
