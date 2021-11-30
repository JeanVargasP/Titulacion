<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Ph;
use Illuminate\Http\Request;

class PhController extends Controller
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

        if (!empty($keyword)) {
            $ph = Ph::where('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('Nivel', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ph = Ph::latest()->paginate($perPage);
        }

        return view('ph.index', compact('ph'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ph.create');
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
        
        Ph::create($requestData);

        return redirect('ph')->with('flash_message', 'Ph added!');
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
        $ph = Ph::findOrFail($id);

        return view('ph.show', compact('ph'));
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
        $ph = Ph::findOrFail($id);

        return view('ph.edit', compact('ph'));
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
        
        $ph = Ph::findOrFail($id);
        $ph->update($requestData);

        return redirect('ph')->with('flash_message', 'Ph updated!');
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
        Ph::destroy($id);

        return redirect('ph')->with('flash_message', 'Ph deleted!');
    }

    public function chart(){
        /**futuro borrar*/
        $graficos = Ph::all();

        $puntos=[];
        foreach($graficos as $grafico){
                $puntos[]=['name' => $grafico['descripcion'], 'y' => $grafico['Nivel']];
                
        }
        return view('Grafico2',["data" => json_encode($puntos)]);
   }
}
