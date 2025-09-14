<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherController extends Controller
{
    public function pdfView($slug)
    {
       $links=DB::table('indicator_links')->where('slug',$slug)->first();
        return view('pages.other.pdfview', ['links' => $links]);
    }

     public function otherpdfView($type,$slug)
    {
        switch ($type){
            case 'calendar':
                $data=DB::table('calender')->where('slug',$slug)->where('status',1)->first();
                break;
            case 'uok-cia':
                $data=DB::table('uok_cia')->where('slug',$slug)->first();
                break;
            case 'extended-profile':
                $data=DB::table('extended_profile')->where('slug',$slug)->first();
                break;
            case 'addon-courses':
                $data=DB::table('addon_course')->where('slug',$slug)->first();
                break;
            case 'ethics':
                $data=DB::table('ethics')->where('slug',$slug)->first();
                break;
            case 'syllabus':
                $data=DB::table('syllabus')->where('slug',$slug)->first();
                break;
            case 'feedback':
                $data=DB::table('feedback')->where('slug',$slug)->first();
                break;
            default:
                $data=null;
            
        }
        return view('pages.other.other_pdfview', ['data' => $data]);
    }

    public function calendarView()
    {
        $calender=DB::table('calender')->where('status',1)->orderBy('sort_order','ASC')->get();
        return view('pages.other.calendar', compact('calender'));
    }

    public function uok_cia()
    {
        $uok_cia = DB::table('uok_cia')->where('status', 1)->orderBy('sort_order', 'ASC')->get();
        return view('pages.other.uok_cia', compact('uok_cia'));
    }

    public function addon_courses()
    {
        $addon_courses = DB::table('addon_course')->where('status', 1)->orderBy('sort_order', 'ASC')->get();
        return view('pages.other.addon_courses', compact('addon_courses'));
    }

    public function ethics()
    {
        $ethics = DB::table('ethics')->where('status', 1)->orderBy('sort_order', 'ASC')->get();
        return view('pages.other.ethics', compact('ethics'));
    }

    public function syllabus()
    {
        $syllabus = DB::table('syllabus')->where('status', 1)->orderBy('sort_order', 'ASC')->get();
        return view('pages.other.syllabus', compact('syllabus'));
    }

    public function feedback()
    {
         $feedback = DB::table('feedback')
        ->where('status', 1)
        ->orderBy('link_group')
        ->orderBy('sort_order')
        ->get()
        ->groupBy('link_group');

        return view('pages.other.feedback', compact('feedback'));
    }
   
}
