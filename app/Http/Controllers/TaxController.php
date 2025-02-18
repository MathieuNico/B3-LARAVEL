<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\Contrat;
use App\Http\Controllers\BillController;
use Barryvdh\DomPDF\Facade\Pdf; 
use Carbon\Carbon;


class TaxController extends Controller
{

    public function calculate()
    {
        $current_year = Carbon::now()->year;
        $bills = Bills::whereHas('contrat', function ($query) use ($current_year) {
            $query->where('user_id', auth()->id())
                    ->whereYear('payment_date', $current_year);
        })->get();

        $revenutotal = 0;
        $taxController = new BillController(); 

        foreach ($bills as $bill) {
            $revenutotal += $taxController->tax($bill->id);
        }

        return $revenutotal;
    }



    public function index(){

        return view('tax.index');

    }

    public function export(){
        $bills = new TaxController();
        $revenutotal = 0;

        $revenutotal = $this->calculate();
        
        $pdf = Pdf::loadView('tax.pdf', compact('revenutotal'));

        // Télécharger le fichier PDF
        return $pdf->download("Impots.pdf");

    }
}
