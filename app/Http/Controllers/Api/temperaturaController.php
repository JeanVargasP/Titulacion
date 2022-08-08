<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Temperatura;
use Illuminate\Http\Request;

class temperaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Temperatura::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        return Temperatura::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function show(Temperatura $temperatura)
    {
        return $temperatura;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Temperatura $temperatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temperatura $temperatura)
    {
        $data = $request->all();

        $temperatura->fill($data);
        $temperatura->save();
        return $temperatura;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temperatura $temperatura)
    {
        $temperatura->delete();
        return $temperatura;
    }
}
