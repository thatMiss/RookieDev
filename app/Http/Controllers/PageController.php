<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getCriminalsPage(Request $request)
    {

        return view('criminals');
    }

    public function getCrimeReportPage(Request $request)
    {

        return view('report_crime');
    }

    public function getAccidentReportPage(Request $request)
    {

        return view('report_accident');
    }

    public function getMissingPage(Request $request)
    {

        return view('report_missing');
    }

    public function getContactPage()
    {
        return view("contact");
    }

    public function getNewsPage()
    {
        return view("news");
    }
}
