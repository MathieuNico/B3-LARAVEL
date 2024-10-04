<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boxe;

class BoxeController extends Controller
{
    public function index()
    {
        return view('boxes.index', [
            'boxes' => Boxe::all()->where('user_id', auth()->id())
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

    public function destroy($id)
    {
        $boxe = Boxe::findOrFail($id);
        $boxe->delete();

        return redirect()->route('boxes.index');
    }

    public function edit($id)
    {
        $boxe = Boxe::findOrFail($id);

        return view('boxes.edit', [
            'boxe' => $boxe
        ]);
    }

    public function update(Request $request, $id)
    {
        $boxe = Boxe::findOrFail($id);

        $boxe->name = $request->get('name');
        $boxe->address = $request->get('address');
        $boxe->city = $request->get('city');
        $boxe->postal_code = $request->get('postal_code');
        $boxe->country = $request->get('country');

        $boxe->save();

        return redirect()->route('boxes.index');
    }
}
