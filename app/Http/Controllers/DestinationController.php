<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;


class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // Validate the request
      $request->validate([
        'destination_name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'location' => 'required|string',
    ]);

    // Collect data from the request
    $data = [
        'destination_name' => $request->destination_name,
        'description' => $request->description,
        'price' => $request->price,
        'location' => $request->location,
    ];

    // Handle the image upload if it exists
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/destinations'), $imageName);
        $data['image'] = $imageName; // Store the image path
    }

    // Create the destination record with the collected data
    Destination::create($data);



        return redirect()->route('destinations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    // $destinations = Destination::with('reviews')->get();
    // return view('admin.destinations.index', compact('destinations'));

    $destinations = Destination::all();
    return view('admin.destinations.show', compact('destinations'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destinations.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'destination_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/destinations'), $imageName);
            $validatedData['image'] = $imageName; // Store the image path
        }
        $destination = Destination::findOrFail($id);
        $destination->update($validatedData);

        return redirect()->route('destinations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('destinations.index');
    }
}
