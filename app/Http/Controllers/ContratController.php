<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;
use App\Models\Locataire;
use App\Models\Boxe;
use App\Models\TemplateContrat;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contrats.index', [
            'contrats' => Contrat::all()->where('user_id',auth()->id())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contrats.create', [
            'locataires' => Locataire::all()->where('user_id', auth()->id()),
            'boxes' => Boxe::all()->where('user_id', auth()->id()),
            'templatecontrats' => TemplateContrat::all()->where('user_id', auth()->id())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $locataire = Locataire::find($request->get('locataire_id'));
        $boxe = Boxe::find($request->get('boxe_id'));
        $templatecontrat = TemplateContrat::find($request->get('templatecontrat_id'));
        $templateContent = $templatecontrat->content;

        if (is_array($templateContent) && isset($templateContent['ops'])) {
            $text = collect($templateContent['ops'])->pluck('insert')->implode('');
        } else {
            $text = $templateContent; // Cas où c'est déjà une chaîne
        }

        $text = str_replace("!Nom!", $locataire->lastname, $text);
        $text = str_replace("!Prenom!", $locataire->firstname, $text);
        $text = str_replace("!Mail!", $locataire->mail, $text);
    
        $contrat = new Contrat();
        $contrat->start_date = $request->get('start_date');
        $contrat->end_date = $request->get('end_date');
        $contrat->name = $request->get('name');
        $contrat->locataire_id = $request->get('locataire_id');
        $contrat->boxe_id = $request->get('boxe_id');
        $contrat->user_id = auth()->id();
        $contrat->templatecontrat_id = $request->get('templatecontrat_id');
        $contrat->content = json_encode($text);
        $contrat->save();
        return response()->json([
            'message' => 'Contrat créé avec succès',
            'contrat' => $contrat
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('contrats.show', [
            'contrat' => Contrat::findOrFail($id)
        ]);
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
        //
    }
}
