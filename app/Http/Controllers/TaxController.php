<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\Contrat;
use App\Http\Controllers\BillController;


class TaxController extends Controller
{

    public function calculate()
    {
        $bills = Bills::whereHas('contrat', function ($query) {
            $query->where('user_id', auth()->id());
        })->get();

        $revenutotal = 0;
        $taxController = new BillController(); // Instancier le contrôleur

        foreach ($bills as $bill) {
            $revenutotal += $taxController->tax($bill->id); // Appeler la méthode tax()
        }

        return view('tax.show', compact('revenutotal'));
    }



    public function index(){

        return view('tax.index');

    }
}
