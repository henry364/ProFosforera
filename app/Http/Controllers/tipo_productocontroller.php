<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_producto;

use App\Http\Requests\TipoProductoEditRequest;
use App\Http\Requests\TipoProductoCreatetRequest;

class tipo_productocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_productos = tipo_producto::all();
        return view ('tipo_producto.index')->with('tipo_productos',$tipo_productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoProductoCreatetRequest $request)
    {
        $tipo_productos = new tipo_producto();

        $tipo_productos->nombre_tipo_producto = $request->get('nombre_tipo_producto');
        $tipo_productos->descripcion_tipo_producto = $request->get('descripcion_tipo_producto');

        $tipo_productos->save();

        return redirect('/tipo_producto');
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
        $tipo_producto = tipo_producto::find($id);
        return view ('tipo_producto.edit')->with('tipo_producto',$tipo_producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoProductoEditRequest $request, $id)
    {
        $tipo_producto = tipo_producto::find($id);

        $tipo_producto->nombre_tipo_producto = $request->get('nombre_tipo_producto');
        $tipo_producto->descripcion_tipo_producto = $request->get('descripcion_tipo_producto');

        $tipo_producto->save();

        return redirect('/tipo_producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_producto = tipo_producto::find($id);
        $tipo_producto->delete();
        return redirect('/tipo_producto');
    }
}
