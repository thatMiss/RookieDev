<?php

namespace App\Http\Controllers;

use App\Models\AccidentReport;
use App\Models\CrimeReport;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use App\Models\User;
use App\Models\MissingPerson;
use App\Models\MostWantedPerson;

class HomeController extends Controller
{
    public function getDashboard()
    {
        $missingCount=MissingPerson::all()->count();
        $wantedCount=MostWantedPerson::all()->count();
        $accidentCount=AccidentReport::all()->count();
        $crimeCount=CrimeReport::all()->count();

        return view('dashboard', [
            'missingCount'=>$missingCount,
            'wantedCount'=>$wantedCount,
            'accidentCount'=>$accidentCount,
            'crimeCount'=>$crimeCount,
        ]);
    }

    public function getAdminProfile()
    {
        $currentUser = Auth::user();
        return view('profile.show', ['currentUser' => $currentUser]);
    }

    public function updateAdminProfile(Request $request, $id)
    {
        $admin = User::findOrFail($id);
        if ($request->hasFile('adminAvatar')) {
            $avatar = $request->file('adminAvatar');
            $avatarName = 'UserAvatar-' . time() . '.' . $avatar->getClientOriginalExtension();
            $avatarName = $avatar->storeAs('profile/avatars/' . $admin->id, $avatarName, 'public');
            $admin->avatar = $avatarName;

            $admin->save();
        }

        $admin->update([
            'phone_number' => $request->phone,
            'address' => $request->address,
            'area' => $request->area,
        ]);
        return redirect()->route('admin-profile')
            ->with('success', 'Your profile information has been successfully updated.');
    }
}
