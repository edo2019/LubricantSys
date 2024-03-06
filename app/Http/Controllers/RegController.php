<?php

namespace App\Http\Controllers;

use App\Models\Supporting_documents;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index(Request $request)
    {
        return view('reg');
    }
/*
    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'number_NameOfCertification1' => 'required',
            'number_NameOfCertification2' => 'required',
            'number_NameOfCertification3' => 'required',
            'number_NameOfCertification4' => 'required',
            'Attachment1' => 'required|file',
            'Attachment2' => 'required|file',
            'Attachment3' => 'required|file',
            'Attachment4' => 'required|file',
        ]);

        // Save uploaded files
        $attachments = [];
        foreach (['Attachment1', 'Attachment2', 'Attachment3', 'Attachment4'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $path = $file->store('attachments');
                $attachments[$field] = $path;
            }
        }

        // Create a new Supporting_documents instance with the validated data
        $supporting_documents = Supporting_documents::create([
            'number_NameOfCertification1' => $validatedData['number_NameOfCertification1'],
            'number_NameOfCertification2' => $validatedData['number_NameOfCertification2'],
            'number_NameOfCertification3' => $validatedData['number_NameOfCertification3'],
            'number_NameOfCertification4' => $validatedData['number_NameOfCertification4'],
            'Attachment1' => $attachments['Attachment1'] ?? null,
            'Attachment2' => $attachments['Attachment2'] ?? null,
            'Attachment3' => $attachments['Attachment3'] ?? null,
            'Attachment4' => $attachments['Attachment4'] ?? null,
        ]);

        // Return success response
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    

    public function submitForm(Request $request)
    {
      //dd($request->all());

        $validatedData = $request->validate([
            'number_NameOfCertification' => 'required|string',
            'Attachment' => 'required|file|mimes:pdf,docx,jpeg,png,jpg|max:2048', // Adjust validation rules as needed
          
        ]);
    
        $documents = [];
         foreach ($request->except(['_token']) as $key => $value) {
        if (str_contains($key, 'Attachment')) {
            $fileName = time() . '.' . $request->file($key)->getClientOriginalExtension();
            $request->file($key)->storeAs('public/uploads', $fileName);
            $documents[] = [
                'number' => str_replace('Attachment', '', $key), // Updated key
                'name' => $request->input('number_NameOfCertification' . str_replace('attachment', '', $key)), // Updated input name
                'attachment_path' => 'storage/uploads/' . $fileName,
            ];
        }
    }

    // Now, you can save the documents to the database
    foreach ($documents as $document) {
        Supporting_documents::create($document);
    }
    
        return back()->with('success', 'Documents submitted successfully!');
    }
    */

    
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