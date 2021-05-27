<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\proveedor;
use App\Models\tipo_producto;
use App\Models\marca;


class productocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::all();
        $marcas = marca::all();
        $proveedors = proveedor::all();
        $tipo_productos = tipo_producto::all();

        return view ('producto.index',compact('productos','tipo_productos','marcas','proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $mproveedors = proveedor::all();
        $mtipo_productos = tipo_producto::all();
        $mmarcas = marca::all();
        return view('producto.create',compact('mproveedors','mtipo_productos','mmarcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre_producto'=>'required|unique:productos',
            'tipo_producto'=>'required',
            'marca_producto'=>'required',
            'proveedor_producto'=>'required',
            'descripcion_producto'=>'required'
        ]
        );

        $productos = new producto();

        $productos->nombre_producto = $request->get('nombre_producto');
        $productos->tipo_producto = $request->get('tipo_producto');
        $productos->marca_producto = $request->get('marca_producto');
        $productos->proveedor_producto = $request->get('proveedor_producto');
        $productos->descripcion_producto = $request->get('descripcion_producto');

        $productos->save();

        return redirect('/producto');
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
        $producto = producto::find($id);
        $mproveedors = proveedor::all();
        $nproveedor = proveedor::find($producto->proveedor_producto);
        $mmarcas = marca::all();
        $nmarca = marca::find($producto->marca_producto);
        $mtipo_productos = tipo_producto::all();
        $ntipo_producto = tipo_producto::find($producto->tipo_producto);
        return view ('producto.edit',compact('mproveedors','mmarcas','mtipo_productos','nproveedor','nmarca','ntipo_producto'))->with('producto',$producto);
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
        $request->validate([
            'nombre_producto'=>'required',
            'tipo_producto'=>'required',
            'marca_producto'=>'required',
            'proveedor_producto'=>'required',
            'descripcion_producto'=>'required'
        ]
        );
        $producto = producto::find($id);

        $producto->nombre_producto = $request->get('nombre_producto');
        $producto->tipo_producto = $request->get('tipo_producto');
        $producto->marca_producto = $request->get('marca_producto');
        $producto->proveedor_producto = $request->get('proveedor_producto');
        $producto->descripcion_producto = $request->get('descripcion_producto');

        $producto->save();

        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::find($id);
        $producto->delete();
        return redirect('/producto');
    }
}
