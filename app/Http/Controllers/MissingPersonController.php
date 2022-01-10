<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissingPerson;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MissingPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->user_role != 'missing-person-admin') {
            Gate::authorize('can-do-anything');
        }
        $missings = MissingPerson::all();
        return view('missing.index', ['mpersons' => $missings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missing.create');
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
            $attachmentName = 'MissingPerson-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/MissingPerson/Attachments', $attachmentName, 'public');
        }

        $missing = MissingPerson::create([
            'complainant_first_name' => $request->complainantFirstName?:'Anonymous',
            'complainant_last_name' => $request->complainantLastName?:'Anonymous',
            'email' => $request->email?:'Anonymous',
            'phone' => $request->phone?:'Anonymous',
            'missing_first_name' => $request->missingFirstName,
            'missing_last_name' => $request->missingLastName,
            'gender' => $request->gender,
            'age' => $request->age,
            'last_seen' => $request->lastSeen,
            'city' => $request->city,
            'address' => $request->address,
            'description' => $request->description,
            'attachment' => $attachmentName,
        ]);
        if (Auth::check()) {
            return redirect()->route('missing.show', $missing->id);
        }
        return redirect()->route('report-missing')
            ->with('success', 'Your report is successfully sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MissingPerson $missing)
    {
        return view('missing.show', ['missingPerson' => $missing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MissingPerson $missing)
    {
        return view('missing.edit', ['missingPerson' => $missing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MissingPerson $missing)
    {
        $attachmentName = $missing->attachment;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = 'MissingPerson-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/MissingPerson/Attachments', $attachmentName, 'public');
        }

        $missing->update([
            'complainant_first_name' => $request->complainantFirstName,
            'complainant_last_name' => $request->complainantLastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'missing_first_name' => $request->missingFirstName,
            'missing_last_name' => $request->missingLastName,
            'gender' => $request->gender,
            'age' => $request->age,
            'last_seen' => $request->lastSeen,
            'city' => $request->city,
            'address' => $request->address,
            'description' => $request->description,
            'attachment' => $attachmentName,
            'confirmed' => (boolean) $request->confirmation,
        ]);
        return redirect()->route('missing.show', $missing->id);
    }

    public function confirm(Request $request)
    {
        Gate::authorize('can-do-anything');

        $missing = MissingPerson::findOrFail($request->input('confirmMissing'));
        $missing->confirmed = true;
        $missing->save();
        return redirect()->route('missing.index')->with('success', 'The missing person has been confirmed.');
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

        $missing = MissingPerson::findOrFail($id);
        if ($missing->attachment) {
            Storage::disk('public')->delete($missing->attachment);
        }
        $missing->delete();

        return redirect()->route('missing.index')->with('success', 'The missing person with id ' . $id . ' is deleted.');
    }
}
