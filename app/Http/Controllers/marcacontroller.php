<?php

namespace App\Http\Controllers;

use App\Models\marca;
use Illuminate\Http\Request;
use App\Http\Requests\MarcaEditRequest;
use App\Http\Requests\MarcaCreateRequest;

class marcacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = marca::all();
        return view ('marca.index')->with('marcas',$marcas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaCreateRequest $request)
    {
        $marcas = new marca();

        $marcas->nombre_marca = $request->get('nombre_marca');
        $marcas->descripcion_marca = $request->get('descripcion_marca');

        $marcas->save();

        return redirect('/marca');
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
   /* public function edit($id)
    {
        $marca = marca::find($id);
        return view ('marca.edit')->with('marca',$marca);
    }*/
    public function edit(Marca $marca)
    {
        return view ('marca.edit',compact('marca'));


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaEditRequest $request, Marca $marca)
    {
       // $marca = marca::find($id);
      /*
       $marca->nombre_marca = $request->get('nombre_marca');
       $marca->descripcion_marca = $request->get('descripcion_marca');
    $marca->save();*/
    $data = $request->only('nombre_marca','descripcion_marca');


$marca->update($data);
        return redirect('/marca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = marca::find($id);
        $marca->delete();
        return redirect('/marca');
    }
}
