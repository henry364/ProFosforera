<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rol;


class rolcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = rol::all();
        return view ('rol.index')->with('rols',$rols);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rols = new rol();

        $rols->nombre_rol = $request->get('nombre_rol');
        $rols->descripcion_rol = $request->get('descripcion_rol');

        $rols->save();

        return redirect('/rol');
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
        $rol = rol::find($id);
        return view ('rol.edit')->with('rol',$rol);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rol = rol::find($id);

        $rol->nombre_rol = $request->get('nombre_rol');
        $rol->descripcion_rol = $request->get('descripcion_rol');

        $rol->save();

        return redirect('/rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = rol::find($id);
        $rol->delete();
        return redirect('/rol');
    }
}
