<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\Contrat;
use App\Models\TemplateContrat;
use App\Models\Locataire;
use App\Models\Boxe;
use Carbon\Carbon;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bills = Bills::whereHas('contrat', function ($query) {
            $query->where('user_id', auth()->id());
        })
        ->whereNull('payment_date') // Ajout ici pour être dans le même filtre
        ->get();
    
    
        return view('bills.index', [
            'bills' => $bills
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bills.create', [
            'contrats' => Contrat::all()->where('user_id', auth()->id()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $current_date = Carbon::now();

        $contrats = Contrat::where('user_id', auth()->id())
                        ->where('start_date', '<=', $current_date)
                        ->where('end_date', '>=', $current_date)
                        ->get();
        foreach($contrats as $contrat){
            $bill = new Bills();
            $bill->name = $contrat->name;
            $bill->paiement_montant = $contrat->monthly_price;
            $bill->period_number =(int)  Carbon::parse($contrat->start_date)->diffInmonths($current_date);
            $bill->contrat_id = $contrat->id;
            $bill->save();
        }
        return redirect()->route('bills.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $bill = Bill::findOrFail($id);
        $bill->delete();

        return redirect()->route('bills.index');
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
        $bill = Bills::findOrFail($id);
        $bill->payment_date = $request->get('start_date');
        $bill->save();

        return redirect()->route('bills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $bill = Bills::findOrFail($id);
        $bill->delete();
        return redirect()->route('bills.index');
        
    }

    public function tax($id){
        $bills = Bills::findOrFail($id);
        $revenu_total = $bills->period_number*$bills->paiement_montant;
        return $revenu_total;
    }
}
