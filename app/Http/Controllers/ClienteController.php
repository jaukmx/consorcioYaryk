<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clientes']=cliente::paginate(2);
       return view('cliente.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['clientes']=cliente::paginate(20);
        return view('cliente.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCliente = Request () ->except('_token');


        if($request->hasFile('imagen')){
             $datosCliente['imagen']=$request->file('imagen')->store('uploads','public');
        }
        cliente::insert($datosCliente);

        return redirect('clientes/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = cliente::findOrFail($id);
        return view('cliente.edit', compact( 'cliente' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCliente = Request () ->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $cliente= cliente::findOrFail($id);
            Storage::delete(['public/'.$cliente->imagen]);
            $datosCliente['imagen']=$request->file('imagen')->store('uploads','public');
       }

       cliente::where('id','=',$id)->update($datosCliente);
        $cliente=cliente::findOrFail($id);
        return view('cliente.edit', compact( 'cliente' ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cliente::destroy($id);
        return redirect('clientes/create');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');

    }
}
