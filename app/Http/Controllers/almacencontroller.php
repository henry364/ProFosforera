<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\almacen;
use App\Http\Requests\AlmacenCreateRequest;
use App\Http\Requests\AlmacenEditRequest;

class almacencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacens = almacen::all();
        return view ('almacen.index')->with('almacens',$almacens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlmacenCreateRequest $request)
    {
        $almacens = new almacen();
        
        $almacens->nombre_almacen = $request->get('nombre_almacen');
        $almacens->descripcion_almacen = $request->get('descripcion_almacen');

        $almacens->save();

        return redirect('/almacen');
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
        $almacen = almacen::find($id);
        return view ('almacen.edit')->with('almacen',$almacen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlmacenEditRequest $request, $id)
    {
        $almacen = almacen::find($id);
        
        $almacen->nombre_almacen = $request->get('nombre_almacen');
        $almacen->descripcion_almacen = $request->get('descripcion_almacen');

        $almacen->save();

        return redirect('/almacen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $almacen = almacen::find($id);
        $almacen->delete();
        return redirect('/almacen');
    }
}
