<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function e_news()
    {
        return view('pages.student.e-newsletter');
    }

    public function feedback()
    {
        return view('pages.student.feedback');
    }

    public function development()
    {
        return view('pages.student.skill-development');
    }

    public function vivarnika()
    {
        return view('pages.student.vivarnika');
    }

}
