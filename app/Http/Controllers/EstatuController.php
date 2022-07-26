<?php

namespace App\Http\Controllers;

use App\Models\Estatu;
use App\Http\Requests\StoreEstatuRequest;
use App\Http\Requests\UpdateEstatuRequest;

class EstatuController extends Controller
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
     * @param  \App\Http\Requests\StoreEstatuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstatuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estatu  $estatu
     * @return \Illuminate\Http\Response
     */
    public function show(Estatu $estatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estatu  $estatu
     * @return \Illuminate\Http\Response
     */
    public function edit(Estatu $estatu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstatuRequest  $request
     * @param  \App\Models\Estatu  $estatu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstatuRequest $request, Estatu $estatu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estatu  $estatu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estatu $estatu)
    {
        //
    }
}
