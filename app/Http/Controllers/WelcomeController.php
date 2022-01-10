<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissingPerson;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $missingPersons=MissingPerson::where('confirmed', 1)->orderBy('created_at', 'desc')->take(5)->get();
        return view("welcome", ['missingPersons'=>$missingPersons]);
    }

}
