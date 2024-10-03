<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boxe;

class BoxeController extends Controller
{
    public function index()
    {
        return view('boxes.index', [
            'boxes' => boxe::all()->where('user_id', auth()->id())
        ]);
    }

    public function create()
    {   
        return view('boxes.create');
    }

    public function store(Request $request)
    {
        
        $boxes = new Boxe();
        $boxes->name = $request->get('name');
        $boxes->address = $request->get('address');
        $boxes->city = $request->get('city');
        $boxes->postal_code = $request->get('postal_code');
        $boxes->country = $request->get('country');
        $boxes->user_id = auth()->id();

        $boxes->save();

        return redirect()->route('boxes.index');
    }
}
