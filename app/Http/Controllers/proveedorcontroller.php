<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedor;
use App\Models\Producto;
use App\Http\Requests\ProveedoresEditRequest;
use App\Http\Requests\ProveedoresCreateRequest;

class proveedorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedors = proveedor::all();
        return view ('proveedor.index')->with('proveedors',$proveedors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('proveedor.create');
    }

    public function getproductos(request $request,$id)
    {
        if ($request->ajax()){
            $nproductos=producto::productos($id);
            return response()->json($nproductos);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedoresCreateRequest $request)
    {
        $proveedors = new proveedor();
        
        $proveedors->nombre_proveedor = $request->get('nombre_proveedor');
        $proveedors->telefono_proveedor = $request->get('telefono_proveedor');
        $proveedors->correo_proveedor = $request->get('correo_proveedor');
        $proveedors->rtn_proveedor = $request->get('rtn_proveedor');
        $proveedors->identidad_proveedor = $request->get('identidad_proveedor');
        $proveedors->direccion_proveedor = $request->get('direccion_proveedor');
        $proveedors->descripcion_proveedor = $request->get('descripcion_proveedor');

        $proveedors->save();

        return redirect('/proveedor');
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
        $proveedor = proveedor::find($id);
        return view ('proveedor.edit')->with('proveedor',$proveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedoresEditRequest $request, $id)
    {
        $proveedor = proveedor::find($id);
        
        $proveedor->nombre_proveedor = $request->get('nombre_proveedor');
        $proveedor->telefono_proveedor = $request->get('telefono_proveedor');
        $proveedor->correo_proveedor = $request->get('correo_proveedor');
        $proveedor->rtn_proveedor = $request->get('rtn_proveedor');
        $proveedor->identidad_proveedor = $request->get('identidad_proveedor');
        $proveedor->direccion_proveedor = $request->get('direccion_proveedor');
        $proveedor->descripcion_proveedor = $request->get('descripcion_proveedor');

        $proveedor->save();

        return redirect('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = proveedor::find($id);
        $proveedor->delete();
        return redirect('/proveedor');
    }
}
