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
        return view('backoffice/destination/index', ['planets' => $planets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice/destination/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messages = [
            'en_name.required' => "Ce champ n'est pas rempli.",
            'fr_name.required' => "Ce champ n'est pas rempli.",
            'en_description.required' => "Ce champ n'est pas rempli.",
            'fr_description.required' => "Ce champ n'est pas rempli.",
            'distance.required' => "Ce champ n'est pas rempli.",
            'distance.numeric' => "Ce champ doit être un nombre.",
            'distance_unit.required' => "Ce champ n'est pas rempli.",
            'duration.required' => "Ce champ n'est pas rempli.",
            'duration.numeric' => "Ce champ doit être un nombre.",
            'en_duration_unit.required' => "Ce champ n'est pas rempli.",
            'fr_duration_unit.required' => "Ce champ n'est pas rempli.",
            'picture.required' => "Ce champ n'est pas rempli.",
        ];

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'en_name' => 'required',
            'fr_name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'distance' => 'required|numeric',
            'distance_unit' => 'required',
            'duration' => 'required|numeric',
            'en_duration_unit' => 'required',
            'fr_duration_unit' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        $picturePath = $request->file('picture')->store('img', 'public');

        $planet = new Destination();
        $planet->en_name = $validatedData['en_name'];
        $planet->fr_name = $validatedData['fr_name'];
        $planet->en_description = $validatedData['en_description'];
        $planet->fr_description = $validatedData['fr_description'];
        $planet->distance = $validatedData['distance'];
        $planet->distance_unit = $validatedData['distance_unit'];
        $planet->duration = $validatedData['duration'];
        $planet->en_duration_unit = $validatedData['en_duration_unit'];
        $planet->fr_duration_unit = $validatedData['fr_duration_unit'];
        $planet->picture = 'storage/'. $picturePath;
        $planet->save();

        return redirect()->route('destination.index')->with('success', 'Planète ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $planet = Destination::findOrFail($id);
        return view('backoffice/destination/show', ['planet' => $planet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $planet = Destination::findOrFail($id);
        return view('backoffice/destination/edit', ['planet' => $planet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $messages = [
            'en_name.required' => "Ce champ n'est pas rempli.",
            'fr_name.required' => "Ce champ n'est pas rempli.",
            'en_description.required' => "Ce champ n'est pas rempli.",
            'fr_description.required' => "Ce champ n'est pas rempli.",
            'distance.required' => "Ce champ n'est pas rempli.",
            'distance.numeric' => "Ce champ doit être un nombre.",
            'distance_unit.required' => "Ce champ n'est pas rempli.",
            'duration.required' => "Ce champ n'est pas rempli.",
            'duration.numeric' => "Ce champ doit être un nombre.",
            'en_duration_unit.required' => "Ce champ n'est pas rempli.",
            'fr_duration_unit.required' => "Ce champ n'est pas rempli.",
            'picture.required' => "Ce champ n'est pas rempli.",
        ];

        $validatedData = $request->validate([
            'en_name' => 'required',
            'fr_name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'distance' => 'required|numeric',
            'distance_unit' => 'required',
            'duration' => 'required|numeric',
            'en_duration_unit' => 'required',
            'fr_duration_unit' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        if ($request->hasFile('picture')) {

            $picturePath = $request->file('picture')->store('img', 'public');

            $validatedData['picture'] = 'storage/'. $picturePath;
        }

        $planet = Destination::findOrFail($id);
        $planet->update($validatedData);

        return redirect()->route('destination.index')->with('success', 'Planète mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $planet = Destination::findOrFail($id);
        $planet->delete();

        return redirect()->route('destination.index')->with('success', 'Planète supprimée avec succès.');
    }

    public function delete($id)
    {
        $planet = Destination::findOrFail($id);
        return view('backoffice/destination/delete', ['planet' => $planet]);
    }
}
