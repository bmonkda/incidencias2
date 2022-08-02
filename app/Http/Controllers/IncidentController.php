<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Http\Requests\StoreIncidentRequest;
use App\Http\Requests\UpdateIncidentRequest;
use App\Models\Category;
use App\Models\Emergency;
use App\Models\Subcategory;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $incidencias = Incident::all();
        $incidencias = Incident::paginate(10);
        // $incidencias = Incident::where('user_id', auth()->id())
                // ->where('estatu_id', '!=' , 4)
                // ->orderBy('estatu_id', 'asc')
        //         // ->latest('estatu_id')
                // ->paginate(5);
        // return $incidencias;
        return view('incidencias.index', compact('incidencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        $subcategorias = Subcategory::all();
        $urgencias = Emergency::all();

        // return [$categorias, $subcategorias, $urgencias];
        
        return view('incidencias.create', compact(['categorias', 'subcategorias', 'urgencias']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIncidentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncidentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function show(Incident $incident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function edit(Incident $incident)
    {
        return view('incidencias.edit', compact('incident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncidentRequest  $request
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncidentRequest $request, Incident $incident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incident $incident)
    {
        //
    }

    public function category(Category $category){
        $incidencias = Incident::where('category_id', $category->id)
                        ->where('estatus', 2)   
                        ->latest('id')
                        ->paginate(5);
        return view('incidencias.category',compact('incidencias', 'category'));
    }

}
