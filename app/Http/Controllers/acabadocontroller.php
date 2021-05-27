<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acabado;
use App\Models\Tipo_producto;
use App\Http\Requests\AcabadosCreateRequest;
use App\Http\Requests\AcabadosEditRequest;

class acabadocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acabados = acabado::all();
        $tipo_productos = tipo_producto::all();
        return view ('acabado.index',compact('acabados','tipo_productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mtipo_productos = tipo_producto::all();
        return view('acabado.create',compact('mtipo_productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcabadosCreateRequest $request)
    {
        $acabados = new acabado();
        
        $acabados->nombre_acabado = $request->get('nombre_acabado');
        $acabados->tipo_acabado = $request->get('tipo_acabado');
        $acabados->descripcion_acabado = $request->get('descripcion_acabado');

        $acabados->save();

        return redirect('/acabado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acabado = acabado::find($id);
        $mtipo_productos = tipo_producto::all();
        $ntipo_producto = tipo_producto::find($acabado->tipo_acabado);
        return view ('acabado.edit',compact('mtipo_productos', 'ntipo_producto'))->with('acabado',$acabado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcabadosEditRequest $request, $id)
    {
        $acabado = acabado::find($id);
        
        $acabado->nombre_acabado = $request->get('nombre_acabado');
        $acabado->tipo_acabado = $request->get('tipo_acabado');
        $acabado->descripcion_acabado = $request->get('descripcion_acabado');

        $acabado->save();

        return redirect('/acabado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acabado = acabado::find($id);
        $acabado->delete();
        return redirect('/acabado');
    }
}
