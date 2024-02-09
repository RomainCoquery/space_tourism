<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
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
        $technologies = Technology::all();
        return view('backoffice/technology/index', ['technologies' => $technologies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice/technology/add');
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
            'picture.required' => "Ce champ n'est pas rempli.",
        ];

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'en_name' => 'required',
            'fr_name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        $picturePath = $request->file('picture')->store('img', 'public');

        $technology = new Technology();
        $technology->en_name = $validatedData['en_name'];
        $technology->fr_name = $validatedData['fr_name'];
        $technology->en_description = $validatedData['en_description'];
        $technology->fr_description = $validatedData['fr_description'];
        $technology->picture = 'storage/'. $picturePath;
        $technology->save();

        return redirect()->route('technology.index')->with('success', "membre d'équipage ajoutée avec succès.");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $technology = Technology::findOrFail($id);
        return view('backoffice/technology/show', ['technology' => $technology]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $technology = Technology::findOrFail($id);
        return view('backoffice/technology/edit', ['technology' => $technology]);
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
            'picture.required' => "Ce champ n'est pas rempli.",
        ];

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'en_name' => 'required',
            'fr_name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        if ($request->hasFile('picture')) {

            $picturePath = $request->file('picture')->store('img', 'public');

            $validatedData['picture'] = 'storage/'. $picturePath;
        }

        $technology = Technology::findOrFail($id);
        $technology->update($validatedData);

        return redirect()->route('technology.index')->with('success', "membre d'équipage mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $technology = Technology::findOrFail($id);
        $technology->delete();

        return redirect()->route('technology.index')->with('success', "membre d'équipage supprimée avec succès.");
    }

    public function delete($id)
    {
        $technology = Technology::findOrFail($id);
        return view('backoffice/technology/delete', ['technology' => $technology]);
    }
}
