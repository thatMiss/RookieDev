<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrimeReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


class CrimeReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crimes = CrimeReport::all();
        return view('crimes.index', ['crimes' => $crimes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crimes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attachmentName = null;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = 'CrimeReport-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/Crimes/Attachments', $attachmentName, 'public');
        }

        $crime = CrimeReport::create([
            'first_name' => $request->firstName?:'Anonymous',
            'last_name' => $request->lastName?:'Anonymous',
            'email' => $request->email?:'Anonymous',
            'phone' => $request->phone?:'Anonymous',
            'date' => $request->date,
            'type' => $request->crimeType,
            'city' => $request->city,
            'message' => $request->message,
            'attachment' => $attachmentName,
            'location' => $request->location,
        ]);

        if (Auth::check()) {
            return redirect()->route('crimes.show', $crime->id);
        }
        return redirect()->route('report-crime')
            ->with('success', 'Your report is successfully sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crime = CrimeReport::findOrFail($id);
        return view('crimes.show', ['crimeReport' => $crime]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crime = CrimeReport::findOrFail($id);
        return view('crimes.edit', ['crimeReport' => $crime]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crime = CrimeReport::findOrFail($id);
        $attachmentName = $crime->attachment;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = 'CrimeReport-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/Crimes/Attachments', $attachmentName, 'public');
        }

        $crime->update([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'type' => $request->crimeType,
            'city' => $request->city,
            'message' => $request->message,
            'attachment' => $attachmentName,
            'location' => $request->location,
        ]);
        return redirect()->route('crimes.show', $crime->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('can-do-anything');

        $crime=CrimeReport::findOrFail($id);
        if ($crime->attachment) {
            Storage::disk('public')->delete($crime->attachment);
        }
        $crime->delete();

        return redirect()->route('crimes.index')->with('success', 'The report with id '.$id.' is deleted.');
    }
}
