<?php

namespace App\Http\Controllers;

use App\Models\MostWantedPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class MostWantedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->user_role != 'most-wanted-admin') {
            Gate::authorize('can-do-anything');
        }
        $wanted = MostWantedPerson::all();
        return view('wanted.index', ['mostWanted' => $wanted]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->user_role != 'most-wanted-admin') {
            Gate::authorize('can-do-anything');
        }

        return view('wanted.create');
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
        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $attachmentName = 'MostWanted-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/Wanted/Attachments', $attachmentName, 'public');
        }

        $wantedPerson = MostWantedPerson::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'gender' => $request->gender,
            'age' => $request->age,
            'marital_status' => $request->marital,
            'occupation' => $request->occupation,
            'crime' => $request->crime,
            'message' => $request->message,
            'price' => $request->price,
            'tag' => $request->tag,
            'attachment' => $attachmentName,
        ]);

        return redirect()->route('wanted.show', $wantedPerson->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wantedPerson = MostWantedPerson::find($id);
        return view('wanted.show', ['mostWanted' => $wantedPerson]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MostWantedPerson $wanted)
    {
        return view('wanted.edit', ['mostWanted' => $wanted]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MostWantedPerson $wanted)
    {
        $attachmentName = $wanted->attachment;
        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $attachmentName = 'MostWanted-' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachmentName = $attachment->storeAs('Reports/Wanted/Attachments', $attachmentName, 'public');
        }

        $wanted->update([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'gender' => $request->gender,
            'age' => $request->age,
            'marital_status' => $request->marital,
            'occupation' => $request->occupation,
            'crime' => $request->crime,
            'message' => $request->message,
            'price' => $request->price,
            'tag' => $request->tag,
            'attachment' => $attachmentName,
        ]);
        return redirect()->route('wanted.show', $wanted->id);
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

        $wanted = MostWantedPerson::findOrFail($id);
        if ($wanted->attachment) {
            Storage::disk('public')->delete($wanted->attachment);
        }
        $wanted->delete();

        return redirect()->route('wanted.index')->with('success', 'The most wanted person with id ' . $id . ' is deleted.');
    }
}
