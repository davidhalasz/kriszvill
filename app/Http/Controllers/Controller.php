<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Mail;
use App\Mail\SendEmail; 

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendEmail(Request $request)
{
    
    // Validate the form data
    $validatedData = $request->validate(
        [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
            'attachments.*' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
        ],
        [
            'name.required' => 'Név megadása kötelező!',
            'email.required' => 'Email megadása kötelező!',
            'phone.required' => 'Telefonszám megadása kötelező!',
            'message.required' => 'Üzenet megadása kötelező!',
        ]
    );

    $email = new SendEmail($validatedData);

    if ($request->hasFile('attachments')) {
        $attachments = $request->file('attachments');
    
        foreach ($attachments as $attachment) {
            $email->attach($attachment->getRealPath(), [
                'as' => $attachment->getClientOriginalName(),
                'mime' => $attachment->getMimeType(),
            ]);
        }
    }
    
    Mail::to('1mrwoof@gmail.com')->send($email);
    return back()->with('success', 'Üzenet sikeresen elküldve!');
}
}
