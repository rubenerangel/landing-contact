<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, [
                'name' => 'required|min:4',
                'email' => 'required|email',
                'state' => 'required',
                'city' => 'required',
            ]);

            Contact::create($request->all());

            return response()->json(['message' => 'Tu información ha sido recibida satisfactoriamente'], 200);
        }
    }
}
