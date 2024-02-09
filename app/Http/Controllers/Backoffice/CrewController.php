<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crew;

class CrewController extends Controller
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
        $crews = Crew::all();
        return view('backoffice/crew/index', ['crews' => $crews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice/crew/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messages = [
            'name.required' => "Ce champ n'est pas rempli.",
            'en_description.required' => "Ce champ n'est pas rempli.",
            'fr_description.required' => "Ce champ n'est pas rempli.",
            'en_job.required' => "Ce champ n'est pas rempli.",
            'fr_job.required' => "Ce champ n'est pas rempli.",
            'picture.required' => "Ce champ n'est pas rempli.",
        ];

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'en_job' => 'required',
            'fr_job' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        $picturePath = $request->file('picture')->store('img', 'public');

        $crew = new Crew();
        $crew->name = $validatedData['name'];
        $crew->en_description = $validatedData['en_description'];
        $crew->fr_description = $validatedData['fr_description'];
        $crew->en_job = $validatedData['en_job'];
        $crew->fr_job = $validatedData['fr_job'];
        $crew->picture = 'storage/'. $picturePath;
        $crew->save();

        return redirect()->route('crew.index')->with('success', "membre d'équipage ajoutée avec succès.");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $crew = Crew::findOrFail($id);
        return view('backoffice/crew/show', ['crew' => $crew]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $crew = Crew::findOrFail($id);
        return view('backoffice/crew/edit', ['crew' => $crew]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $messages = [
            'name.required' => "Ce champ n'est pas rempli.",
            'en_description.required' => "Ce champ n'est pas rempli.",
            'fr_description.required' => "Ce champ n'est pas rempli.",
            'en_job.required' => "Ce champ n'est pas rempli.",
            'fr_job.required' => "Ce champ n'est pas rempli.",
            'picture.required' => "Ce champ n'est pas rempli.",
        ];

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
            'en_job' => 'required',
            'fr_job' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        if ($request->hasFile('picture')) {

            $picturePath = $request->file('picture')->store('img', 'public');

            $validatedData['picture'] = 'storage/'. $picturePath;
        }

        $crew = Crew::findOrFail($id);
        $crew->update($validatedData);

        return redirect()->route('crew.index')->with('success', "membre d'équipage mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crew = Crew::findOrFail($id);
        $crew->delete();

        return redirect()->route('crew.index')->with('success', "membre d'équipage supprimée avec succès.");
    }

    public function delete($id)
    {
        $crew = Crew::findOrFail($id);
        return view('backoffice/crew/delete', ['crew' => $crew]);
    }
}
