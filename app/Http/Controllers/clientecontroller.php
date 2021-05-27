<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Http\Requests\ClienteEditRequest;
use App\Http\Requests\ClienteCreateRequest;

class clientecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::all();
        return view ('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {
        $clientes = new cliente();

        $clientes->nombre_cliente = $request->get('nombre_cliente');
        $clientes->telefono_cliente = $request->get('telefono_cliente');
        $clientes->correo_cliente = $request->get('correo_cliente');
        $clientes->rtn_cliente = $request->get('rtn_cliente');
        $clientes->identidad_cliente = $request->get('identidad_cliente');
        $clientes->direccion_cliente = $request->get('direccion_cliente');
        $clientes->descripcion_cliente = $request->get('descripcion_cliente');

        $clientes->save();

        return redirect('/cliente');
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
        $cliente = cliente::find($id);

        return view ('cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(ClienteEditRequest $request, $id)
    public function update(ClienteEditRequest $request, $id)
    {
        $cliente = cliente::find($id);

        $cliente->nombre_cliente = $request->get('nombre_cliente');
        $cliente->telefono_cliente = $request->get('telefono_cliente');
        $cliente->correo_cliente = $request->get('correo_cliente');
        $cliente->rtn_cliente = $request->get('rtn_cliente');
        $cliente->identidad_cliente = $request->get('identidad_cliente');
        $cliente->direccion_cliente = $request->get('direccion_cliente');
        $cliente->descripcion_cliente = $request->get('descripcion_cliente');

        $cliente->save();

        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect('/cliente');
    }
}
