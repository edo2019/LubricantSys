<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index(Request $request)
    {

        return view('reg');
    }

    public function submitForm(Request $request)
{
    // Validate form data
    $request->validate([
        'license' => 'required|string', 
        'company_Name' => 'required|string', 
        'region' => 'required|string', 
        'rlock' => 'required|string',
        'telephone' => 'required|string', 
        'address' => 'required|string', 
        'email'  => 'required|string',
      
        //contact person

        'name' => 'required|string',
        'title' => 'required|string',
        'address' => 'required|string',
        'email' => 'required|string',

        //lubricant detail

        'lubricantName' => 'required|string',
        'lubricantType' => 'required|string',
        'lubricantPerformanceLevel' => 'required|string',
        'lubricantBrand' => 'required|string',
        'number_Certification' => 'required|string',

        //phone number
        'phone_number' => 'required|string',
        'altern_phone_Number' => 'required|string',

        //supporting documents

        'number_NameOfCertification' => 'required|string',
        'Attachment1' => 'required|string',
        'Attachment2' => 'required|string',
        'Attachment3',
        'Attachment4'     
    ]);

    //creatinging tables here

    // Create a new user
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ]);

    // Create a new address associated with the user
    $address = Address::create([
        'user_id' => $user->id,
        'street' => $request->input('street'),
        'city' => $request->input('city'),
        'country' => $request->input('country'),
    ]);

    // Return success response
    return response()->json(['message' => 'Data submitted successfully']);
}

}
