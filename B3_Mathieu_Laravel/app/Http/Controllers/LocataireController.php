<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locataire;

class LocataireController extends Controller
{
    public function index()
    {
        return view('locataires.index' , [
            'locataires' => Locataire::all()->where('user_id', auth()->id())
        ]);
    }

    public function create()
    {
        return view('locataires.create');
    }

    public function store(Request $request)
    {
        $locataire = new Locataire();
        $locataire->lastname = $request->get('lastname');
        $locataire->firstname = $request->get('firstname');
        $locataire->mail = $request->get('mail');
        $locataire->phone = $request->get('phone');
        $locataire->address = $request->get('address');
        $locataire->city = $request->get('city');
        $locataire->user_id = auth()->user()->id;

        $locataire->save();
        

        return redirect()->route('locataires.index');

    }
}
