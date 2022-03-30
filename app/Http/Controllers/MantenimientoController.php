<?php

namespace App\Http\Controllers;

use App\Models\mantenimiento;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['mantenimientos']=mantenimiento::paginate(20);


        return view('mantenimiento.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['mantenimientos']=mantenimiento::paginate(20);
        return view('mantenimiento.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosMantenimiento = Request () ->except('_token');


        if($request->hasFile('imagen')){
             $datosMantenimiento['imagen']=$request->file('imagen')->store('uploads','public');
        }
        mantenimiento::insert($datosMantenimiento);

        return redirect('mantenimiento/create');
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mantenimiento = mantenimiento::findOrFail($id);
        return view('mantenimiento.edit', compact( 'mantenimiento' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMantenimiento = Request () ->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $mantenimiento= mantenimiento::findOrFail($id);
            Storage::delete(['public/'.$mantenimiento->imagen]);
            $datosMantenimiento['imagen']=$request->file('imagen')->store('uploads','public');
       }

       mantenimiento::where('id','=',$id)->update($datosMantenimiento);
        $mantenimiento=mantenimiento::findOrFail($id);
        return view('mantenimiento.edit', compact( 'mantenimiento' ) );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mantenimiento::destroy($id);
        return redirect('mantenimiento/create');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');

    }
}
