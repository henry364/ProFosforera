<?php

namespace App\Http\Controllers;
use App\Models\movimiento;
use App\Models\acabado;
use App\Models\producto;
use App\Http\Requests\MovimientoCreateRequest;
use App\Http\Requests\MovimientoEditRequest;

use Illuminate\Http\Request;

class movimientocontroller extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = movimiento::with('productos')->get();
        $acabados = acabado::all();
        return view ('movimiento.index',compact('movimientos','acabados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $macabados = acabado::all();
        $mproductos = producto::all();
        return view('movimiento.create',compact('macabados','mproductos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovimientoCreateRequest $request)
        {
            $movimiento = movimiento::create($request->all());
        
            $mproductos = $request->input('productos', []);
            $cantidads = $request->input('cantidads', []);
            $unidads = $request->input('unidads', []);
            for ($mproducto=0; $mproducto < count($mproductos); $mproducto++) {
                if ($mproductos[$mproducto] != '') {
                    $movimiento->productos()->attach($mproductos[$mproducto], ['cantidad' => $cantidads[$mproducto]]);
                }
            }
        
            return redirect()->route('movimiento.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movimiento = movimiento::find($id);
        $acabado =acabado::find($movimiento->acabado_movimiento);
        $view = view('movimiento.show',compact('acabado'))->with('movimiento',$movimiento);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('movimiento');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimiento = movimiento::find($id);
        $macabados = acabado::all();
        $mproductos = producto::all();
        return view ('movimiento.edit',compact('macabados','mproductos'))->with('movimiento',$movimiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovimientoEditRequest $request, $id)
    {
        $movimiento = movimiento::create($request->all());
        
        $mproductos = $request->input('productos', []);
        $cantidads = $request->input('cantidads', []);
        for ($mproducto=0; $mproducto < count($mproductos); $mproducto++) {
            if ($mproductos[$mproducto] != '') {
                $movimiento->productos()->attach($mproductos[$mproducto], ['cantidad' => $cantidads[$mproducto]]);
            }
        }

        return redirect('/movimiento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimiento = movimiento::find($id);
        $movimiento->delete();
        return redirect('/movimiento');
    }
}
