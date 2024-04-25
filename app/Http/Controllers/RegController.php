<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Supporting_documents;
use Illuminate\Http\Request;

class RegController extends Controller
{
//company
 public function company(Request $request)
 {

    return view('company');
 }

 public function store(Request $request)
{
  // Validate form data (optional)
  $validatedData = $request->validate([
    'company_Name' => 'required|string',
    'license' => 'required|in:licensed,notLicensed',
    'region' => 'required|string',
    'block' => 'required|string',
    'address' => 'required|string',
    'telephone' => 'required|string',
    'email' => 'required|string'
    
  ]);

  // Create a new company instance (using model if defined)
  $company = new Company;
  $company->company_name = $validatedData['company_Name'];
  $company->license = $validatedData['license'];
  $company->region = $validatedData['region'];
  $company->region = $validatedData['block'];
  $company->region = $validatedData['address'];
  $company->region = $validatedData['telephone'];
  $company->region = $validatedData['email'];
  // ... other fields

  // Save the company to the database
  $company->save();

  // Handle success or error (e.g., redirect, flash message)
  return redirect()->route('success_route'); // Replace with appropriate route
}

//supporting documents
    public function index(Request $request)
    {
        return view('reg');
    }
    
        public function submitForm(Request $request)
        {
              //dd($request->all());

            $validatedData = $request->validate([
                'certification.*' => 'required|string',
                'file.*' => 'required|file|max:2048', // Validation rules for the file
            ]);
    

            $documents = [];

    foreach ($request->input('certification') as $key => $certification) {
        $fileName = time() . $key . '.' . $request->file('file')[$key]->getClientOriginalExtension(); // Use key for unique filename
        $request->file('file')[$key]->storeAs('public/uploads', $fileName);

        $documents[] = [
            'certification' => $certification,
            'file_path' => 'public/uploads/' . $fileName,
        ];
    }

    Supporting_documents::insert($documents);

    return back()->with('success', 'Documents uploaded and information saved successfully!');
}




            /*
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->storeAs('public/uploads', $fileName); // Store the file in a public directory
    
            // Create and save a File model instance with database connection
            $supporting_documents = Supporting_documents::create([
                'certification' => $request->input('certification'),
                'name' => $request->file->getClientOriginalName(),
                'path' => 'public/uploads/' . $fileName, // Update path based on your storage configuration
            ]);
    
            return back()->with('success', 'File uploaded and information saved successfully!');
        }

        */
}