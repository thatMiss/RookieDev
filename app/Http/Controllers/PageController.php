<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissingPerson;
use App\Models\MostWantedPerson;
use App\Models\User;

class PageController extends Controller
{
    public function getCriminalsPage(Request $request)
    {
        $wantedPersons = MostWantedPerson::select('*')->orderBy('created_at', 'desc')->get();
        return view('wanted/criminals', ['mostWanted' => $wantedPersons]);
    }

    public function getCrimeReportPage(Request $request)
    {
        if ($request->query('anonymous') == 'true') {
            return view('crimes/anonymous_report_crime');
        }
        return view('crimes/report_crime');
    }

    public function getAccidentReportPage(Request $request)
    {
        if ($request->query('anonymous') == 'true') {
            return view('accidents/anonymous_report_accident');
        }

        return view('accidents/report_accident');
    }

    public function getMissingPage(Request $request)
    {
        if ($request->query('anonymous') == 'true') {
            return view('missing/anonymous_report_missing');
        }

        return view('missing/report_missing');
    }

    public function getContactPage()
    {
        return view("contact");
    }

    public function getListMissingPage()
    {
        $missings = MissingPerson::where('confirmed', 1)->orderBy('created_at', 'desc')->get();
        return view('missing/list-missing', ['mpersons' => $missings]);
    }


    public function getMissingPersonDetails($id)
    {
        $missingPerson = MissingPerson::findOrFail($id);
        return view('missing/missing-details', ['missingPerson' => $missingPerson]);
    }

    public function getWantedPersonDetails($id)
    {
        $wantedPerson = MostWantedPerson::findOrFail($id);
        return view('wanted/criminal_details', ['wanted' => $wantedPerson]);
    }

}
