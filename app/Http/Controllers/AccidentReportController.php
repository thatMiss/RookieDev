<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccidentReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


class AccidentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accidents = AccidentReport::all();
        return view('accidents.index', ['accidents' => $accidents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accidents.create');
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
            $attachmentName = 'AccidentReport-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/Accidents/Attachments', $attachmentName, 'public');
        }

        $accident = AccidentReport::create([
            'first_name' => $request->firstName?:'Anonymous',
            'last_name' => $request->lastName?:'Anonymous',
            'email' => $request->email?:'Anonymous',
            'phone' => $request->phone?:'Anonymous',
            'date' => $request->date,
            'city' => $request->city,
            'location' => $request->location,
            'message' => $request->message,
            'attachment' => $attachmentName,
        ]);
        if (Auth::check()) {
            return redirect()->route('accidents.show', $accident->id);
        }
        return redirect()->route('report-accident')
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
        $accident = AccidentReport::findOrFail($id);
        return view('accidents.show', ['accidentReport' => $accident]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accident = AccidentReport::findOrFail($id);
        return view('accidents.edit', ['accident' => $accident]);
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
        $accident = AccidentReport::findOrFail($id);
        $attachmentName = $accident->attachment;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = 'AccidentReport-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/Accidents/Attachments', $attachmentName, 'public');
        }
        $accident->update([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'city' => $request->city,
            'location' => $request->location,
            'message' => $request->message,
            'attachment' => $attachmentName,
        ]);
        return redirect()->route('accidents.show', $accident->id);
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

        $accident = AccidentReport::findOrFail($id);
        if ($accident->attachment) {
            Storage::disk('public')->delete($accident->attachment);
        }
        $accident->delete();

        return redirect()->route('accidents.index')->with('success', 'The accident report with id ' . $id . ' is deleted.');
    }
}
