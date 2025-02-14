<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateContrat;

class TemplateContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('templatecontrats.index', [
            'template_contrats' => TemplateContrat::all()->where('user_id', auth()->id())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('templatecontrats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $templatecontrat = new TemplateContrat();
        $templatecontrat->name = $request->get('name');
        $templatecontrat->content = $request->get('content');
        $templatecontrat->user_id = auth()->user()->id;

        $templatecontrat->save();

        return redirect()->route('templatecontrats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('templatecontrats.show', [
            'template_contrats' => TemplateContrat::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('templatecontrats.edit', [
            'template_contrats' => TemplateContrat::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $templatecontrat = TemplateContrat::findOrFail($id);

        $templatecontrat->name = $request->get('name');
        $templatecontrat->content = $request->get('content');

        $templatecontrat->save();

        return redirect()->route('templatecontrats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $templatecontrat = TemplateContrat::findOrFail($id);
        $templatecontrat->delete();

        return redirect()->route('templatecontrats.index');
    }
}
