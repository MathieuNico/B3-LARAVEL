<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;
use App\Models\Locataire;
use App\Models\Boxe;
use App\Models\TemplateContrat;
use Barryvdh\DomPDF\Facade\Pdf; 
class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contrats.index', [
            'contrats' => Contrat::with('locataire','boxe')->where('user_id', auth()->id())->get()
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
        $boxe->locataire_id = $locataire->id;
        
        $templateContent = json_decode($templatecontrat->content, true);

        
        if (is_array($templateContent) && isset($templateContent['ops'])) {
            
            foreach ($templateContent['ops'] as &$op) {
                if (isset($op['insert'])) {
                    $op['insert'] = str_replace("!Nom!", $locataire->lastname, $op['insert']);
                    $op['insert'] = str_replace("!Prenom!", $locataire->firstname, $op['insert']);
                    $op['insert'] = str_replace("!Mail!", $locataire->mail, $op['insert']);
                    $op['insert'] = str_replace("!Telephone!", $locataire->phone, $op['insert']);
                    $op['insert'] = str_replace("!Adresse!", $locataire->address, $op['insert']);
                    $op['insert'] = str_replace("!CodePostal!", $locataire->postal_code, $op['insert']);
                    $op['insert'] = str_replace("!Ville!", $locataire->city, $op['insert']);
                    $op['insert'] = str_replace("!Pays!", $locataire->country, $op['insert']);
                    $op['insert'] = str_replace("!BoxNom!", $boxe->name, $op['insert']);
                    $op['insert'] = str_replace("!BoxPrix!", $boxe->price, $op['insert']);
                    $op['insert'] = str_replace("!RIB!", $locataire->numberbank, $op['insert']);
                    $op['insert'] = str_replace("!BoxAdresse!", $boxe->address, $op['insert']);
                    $op['insert'] = str_replace("!BoxCodePostal!", $boxe->postal_code, $op['insert']);
                    $op['insert'] = str_replace("!BoxVille!", $boxe->city, $op['insert']);
                    $op['insert'] = str_replace("!BoxPays!", $boxe->country, $op['insert']);
                }
            }
        }

        $contrat = new Contrat();
        $contrat->start_date = $request->get('start_date');
        $contrat->end_date = $request->get('end_date');
        $contrat->name = $request->get('name');
        $contrat->locataire_id = $request->get('locataire_id');
        $contrat->monthly_price = $request->get('monthly_price');
        $contrat->boxe_id = $request->get('boxe_id');
        $contrat->user_id = auth()->id();
        $contrat->templatecontrat_id = $request->get('templatecontrat_id');
        
        
        $contrat->content = json_encode($templateContent);

        $contrat->save();
        $boxe->save();

        return redirect()->route('contrats.index'); 
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
        return view('contrats.edit', [
            'contrats' => Contrat::findOrFail($id),
        ]);
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
        $contrat = Contrat::findOrFail($id);
        $contrat->delete();

        return redirect()->route('contrats.index');
    }


    public function export($id){
        // Récupérer le contrat avec les relations nécessaires
    $contrat = Contrat::with('locataire')->findOrFail($id);

    // Charger la vue avec les données
    $pdf = Pdf::loadView('contrats.pdf', compact('contrat'));

    // Télécharger le fichier PDF
    return $pdf->download("contrat_{$contrat->id}.pdf");
    }

    

}
