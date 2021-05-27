<?php

namespace App\Http\Controllers;
use App\Models\compra;
use App\Models\Proveedor;
use App\Models\producto; 
use App\Http\Requests\CompraCreateRequest;
use App\Http\Requests\CompraEditRequest;

use Illuminate\Http\Request;

class compracontroller extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = compra::with('productos')->get();
        $proveedors = proveedor::all();
        return view ('compra.index',compact('compras','proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mproveedors = proveedor::all();
        $mproductos = producto::all();
        return view('compra.create',compact('mproveedors','mproductos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompraCreateRequest $request)
        {
            $compra = compra::create($request->all());
        
            $mproductos = $request->input('productos', []);
            $cantidads = $request->input('cantidads', []);
            for ($mproducto=0; $mproducto < count($mproductos); $mproducto++) {
                if ($mproductos[$mproducto] != '') {
                    $compra->productos()->attach($mproductos[$mproducto], ['cantidad' => $cantidads[$mproducto]]);
                }
            }
        
            return redirect()->route('compra.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compra = compra::find($id);
        $proveedor =proveedor::find($compra->proveedor_compra);
        $view = view('compra.show',compact('proveedor'))->with('compra',$compra);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('compra');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = compra::find($id);
        $mproveedors = proveedor::all();
        $mproductos = producto::all();
        return view ('compra.edit',compact('mproveedors','mproductos'))->with('compra',$compra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompraEditRequest $request, $id)
    {
        $compra = compra::create($request->all());
        
        $mproductos = $request->input('productos', []);
        $cantidads = $request->input('cantidads', []);
        for ($mproducto=0; $mproducto < count($mproductos); $mproducto++) {
            if ($mproductos[$mproducto] != '') {
                $compra->productos()->attach($mproductos[$mproducto], ['cantidad' => $cantidads[$mproducto]]);
            }
        }

        return redirect('/compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra = compra::find($id);
        $compra->delete();
        return redirect('/compra');
    }
}
