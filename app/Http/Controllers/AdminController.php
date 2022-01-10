<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('can-do-anything');
        $users = User::all();
        return view('users.list', ['users' => $users]);
    }

    public function listOfficerDetails()
    {
        $users = User::all();
        return view('users.officers', ['users' => $users]);
    }

    public function getOfficerDetails($id)
    {
        $officer= User::findOrFail($id);
        return view('users.officer-details', ['user' => $officer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('can-do-anything');

        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('can-do-anything');

        $validated = $request->validate([
            'password' => ['required', 'string', 'confirmed', 'min:8', 'max:20'],
            'adminName' => ['required', 'string', 'max:255'],
            'adminEmail' => ['required', 'string', 'email', 'max:255'],
            'adminRole' => ['required', 'string'],
            'adminPhone' => ['required', 'string', 'max:15'],
            'adminAddress' => ['required', 'string', 'max:255'],
            'adminArea' => ['required', 'string', 'max:255'],
            'adminAvatar' => ['required', 'image']
        ]);


        $user = User::create([
            'name' => $request->adminName,
            'email' => $request->adminEmail,
            'password' => Hash::make($request->password),
            'phone_number' => $request->adminPhone,
            'user_role' => $request->adminRole,
            'address' => $request->adminAddress,
            'area' => $request->adminArea,
        ]);

        $avatar = $request->file('adminAvatar');
        $avatarName = 'UserAvatar-' . time() . '.' . $avatar->getClientOriginalExtension();
        $avatarName = $avatar->storeAs('profile/avatars/' . $user->id, $avatarName, 'public');

        $user->avatar = $avatarName;
        $user->save();

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        Gate::authorize('can-do-anything');
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        Gate::authorize('can-do-anything');
        return view('users.edit', ['user' => $user]);
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
        Gate::authorize('can-do-anything');

        $user = User::find($id);
        $user->name = $request->adminName;
        $user->email = $request->adminEmail;
        $user->phone_number = $request->adminPhone;
        $user->user_role = $request->adminRole;
        $user->address = $request->adminAddress;
        $user->area = $request->adminArea;

        if ($request->hasFile('adminAvatar')) {
            $avatar = $request->file('adminAvatar');
            $avatarName = 'UserAvatar-' . time() . '.' . $avatar->getClientOriginalExtension();
            $avatarName = $avatar->storeAs('profile/avatars/' . $user->id, $avatarName, 'public');
            $user->avatar = $avatarName;
        }
        $user->save();

        return redirect()->route('users.show', $id);
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
        $user = User::findOrFail($id);
        $name = $user->name;
        $user->delete();

        return redirect()->route('users.index')->with('success', 'The user with name ' . $name . ' and id ' . $id . ' is deleted.');
    }
}
