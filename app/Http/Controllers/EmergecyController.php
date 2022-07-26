<?php

namespace App\Http\Controllers;

use App\Models\Emergecy;
use App\Http\Requests\StoreEmergecyRequest;
use App\Http\Requests\UpdateEmergecyRequest;

class EmergecyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmergecyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmergecyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emergecy  $emergecy
     * @return \Illuminate\Http\Response
     */
    public function show(Emergecy $emergecy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emergecy  $emergecy
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergecy $emergecy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmergecyRequest  $request
     * @param  \App\Models\Emergecy  $emergecy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmergecyRequest $request, Emergecy $emergecy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emergecy  $emergecy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergecy $emergecy)
    {
        //
    }
}
