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
            default:
                $data=null;
            
        }
        return view('pages.other.other_pdfview', ['data' => $data]);
    }

    public function calendarPdfView($slug)
    {
       $calendar=DB::table('calender')->where('slug',$slug)->first();
        return view('pages.other.calendar_pdfview', ['calendar' => $calendar]);
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

    public function uok_cia_pdf($slug)
    {
       $uok_cia=DB::table('uok_cia')->where('slug',$slug)->first();
        return view('pages.other.uok_cia_pdfview', ['uok_cia' => $uok_cia]);
    }
}
