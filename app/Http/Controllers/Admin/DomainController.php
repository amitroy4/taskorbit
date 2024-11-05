<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Domain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domains = Domain::all();
        $clients = Client::all();
        return view('admin.domain.domain',compact('domains','clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('admin.domain.adddomain',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form inputs, allowing all fields to be nullable
        $validatedData = $request->validate([
            'client_id' => 'nullable|integer',
            'domain_name' => 'nullable|string|max:255',
            'purchase_date' => 'nullable|date',
            'reg_firstname' => 'nullable|string|max:255',
            'reg_lastname' => 'nullable|string|max:255',
            'reg_city' => 'nullable|string|max:255',
            'reg_state' => 'nullable|string|max:255',
            'reg_zipcode' => 'nullable|string|max:10',
            'reg_country' => 'nullable|string|max:255',
            'reg_address' => 'nullable|string|max:255',
            'person_name' => 'nullable|string|max:255',
            'person_email' => 'nullable|email|max:255',
            'person_phone' => 'nullable|string|max:20',
            'person_mailing_address' => 'nullable|string|max:255',
            'person_nid_number' => 'nullable|string|max:20',
            'currency_type' => 'nullable|string|max:3',
            'rate' => 'nullable|numeric',
            'amount' => 'nullable|numeric',
            'renewal_date' => 'nullable|date',
            'person_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'person_nid_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Exclude file fields for bulk insert
        $data = $request->except(['person_image', 'person_nid_image']);

        // Handle file uploads for each file field
        $fileFields = [
            'person_image' => 'uploads/person_images',
            'person_nid_image' => 'uploads/person_nid_images',
        ];

        foreach ($fileFields as $field => $path) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store($path, 'public');
            }
        }

        // Store the client domain data
        Domain::create($data);

        return redirect()->route('domain.index')->with('success', 'Domain information saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the client domain by ID
        $clientDomain = Domain::findOrFail($id);

        // Define the file fields and paths
        $fileFields = [
            'person_image',
            'person_nid_image',
        ];

        // Delete associated files if they exist
        foreach ($fileFields as $field) {
            if ($clientDomain->$field) {
                Storage::disk('public')->delete($clientDomain->$field);
            }
        }

        // Delete the client domain record from the database
        $clientDomain->delete();

        return redirect()->route('domain.index')->with('success', 'Domain deleted successfully.');
    }

}
