<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller
{
    public function contactUs(Request $request)
    {
        $name = $request->name;
        $recipient = 'rookiedev@cyroxsoftech.com';
        $subject = $request->subject;
        $message = $request->message;
        $from = $request->email;

        Mail::to($recipient)->send(new ContactUsMail($request->all()));

        return redirect()->route('contact')
            ->with('success', 'Your message has been successfully sent!');
    }
}
