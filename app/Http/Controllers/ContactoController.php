<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['contactos']=contacto::paginate(20);

        return view('contacto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['contactos']=contacto::paginate(1);
        return view('contacto.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosContacto = Request () ->except('_token');


       if($request->hasFile('imagen')){
            $datosContacto['imagen']=$request->file('imagen')->store('uploads','public');
       }
       contacto::insert($datosContacto);
       return redirect('contacto/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = contacto::findOrFail($id);
        return view('contacto.edit', compact( 'contacto' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(contacto $contacto)
    {
        //
    }



    public function envioContacto(Request $request)
    {

    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');

    }
}
