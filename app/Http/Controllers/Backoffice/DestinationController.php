<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Destination::all();
        return view('backoffice/destination', ['planets' => $planets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice/destination');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'en_name' => 'required',
            'fr_name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'distance' => 'required',
            'duration' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'en_distance_unit' => 'required',
            'fr_duration_unit' => 'required',
        ]);

        $planet = Destination::create($validatedData);

        return redirect()->route('index')->with('success', 'Planète ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $planet = Destination::findOrFail($id);
        return view('backoffice/destination', ['planet' => $planet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $planet = Destination::findOrFail($id);
        return view('backoffice/destination', ['planet' => $planet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'en_name' => 'required',
            'fr_name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'distance' => 'required',
            'duration' => 'required',
            'picture' => 'image',
            'en_distance_unit' => 'required',
            'fr_duration_unit' => 'required',
        ]);

        $planet = Destination::findOrFail($id);
        $planet->update($validatedData);

        return redirect()->route('index')->with('success', 'Planète mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $planet = Destination::findOrFail($id);
        $planet->delete();

        return redirect()->route('index')->with('success', 'Planète supprimée avec succès.');
    }
}
