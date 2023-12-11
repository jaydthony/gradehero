<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'desc'=>'required',
            'captcha' => 'required|captcha',
        ]);

        if ($request->hasFile('file')) {
            $imageName = $data['email'] . '-certificate-image-' . time() . rand(1, 1000) . '.' . $request->file->extension();
            $request->file->move(public_path('attachments'), $imageName);
            $data['file'] = $imageName;
        }
        
        Contact::create($data);

        return view("success-message");
    }

    public function reloadCaptcha () {
        return response()->json(['captcha' => captcha_img()]);
    }
}
