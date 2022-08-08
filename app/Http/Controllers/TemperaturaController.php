<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Temperatura;
use Illuminate\Http\Request;

class TemperaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $keyword = $request->get('search');
        $perPage = 25;
        $alta = 24;

        if (!empty($keyword)) {
            $temperatura = Temperatura::where('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('Grados', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $temperatura = Temperatura::latest()->paginate($perPage);
        }
        if ('Grados' == $alta){
            $temperatura->descripcion = "alta";
        }
        return view('temperatura.index', compact('temperatura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('temperatura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Temperatura::create($requestData);

        return redirect('temperatura')->with('flash_message', 'Temperatura added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $temperatura = Temperatura::findOrFail($id);

        return view('temperatura.show', compact('temperatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $temperatura = Temperatura::findOrFail($id);

        return view('temperatura.edit', compact('temperatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $temperatura = Temperatura::findOrFail($id);
        $temperatura->update($requestData);

        return redirect('temperatura')->with('flash_message', 'Temperatura updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Temperatura::destroy($id);

        return redirect('temperatura')->with('flash_message', 'Temperatura deleted!');
    }
}
