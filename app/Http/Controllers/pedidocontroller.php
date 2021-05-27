<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\cliente;
use App\Models\producto; 
use App\Http\Requests\PedidoCreateRequest;
use App\Http\Requests\PedidoEditRequest;

use Illuminate\Http\Request;

class pedidocontroller extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::with('productos')->get();
        $clientes = cliente::all();
        return view ('pedido.index',compact('pedidos','clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mclientes = cliente::all();
        $mproductos = producto::all();
        return view('pedido.create',compact('mclientes','mproductos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidoCreateRequest $request)
        {
            $pedido = pedido::create($request->all());
        
            $mproductos = $request->input('productos', []);
            $cantidads = $request->input('cantidads', []);
            for ($mproducto=0; $mproducto < count($mproductos); $mproducto++) {
                if ($mproductos[$mproducto] != '') {
                    $pedido->productos()->attach($mproductos[$mproducto], ['cantidad' => $cantidads[$mproducto]]);
                }
            }
        
            return redirect()->route('pedido.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);
        $cliente =cliente::find($pedido->cliente_pedido);
        $view = view('pedido.show',compact('cliente'))->with('pedido',$pedido);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('pedido');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = pedido::find($id);
        $mclientes = cliente::all();
        $mproductos = producto::all();
        return view ('pedido.edit',compact('mclientes','mproducto'))->with('pedido',$pedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PedidoEditRequest $request, $id)
    {
        $pedido = pedido::create($request->all());
        
        $mproductos = $request->input('productos', []);
        $cantidads = $request->input('cantidads', []);
        for ($mproducto=0; $mproducto < count($mproductos); $mproducto++) {
            if ($mproductos[$mproducto] != '') {
                $pedido->productos()->attach($mproductos[$mproducto], ['cantidad' => $cantidads[$mproducto]]);
            }
        }

        return redirect('/pedido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = pedido::find($id);
        $pedido->delete();
        return redirect('/pedido');
    }
}
