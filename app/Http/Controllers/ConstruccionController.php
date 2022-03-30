<?php

namespace App\Http\Controllers;

use App\Models\construccion;
use Illuminate\Http\Request;
use LDAP\Result;

use Illuminate\Support\Facades\Storage;

class ConstruccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['construccions']=construccion::paginate(20);

        return view('construccion.construccion',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['construccions']=construccion::paginate(20);
        return view('construccion.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /// $datosConstrucion = Request () ->all();
       $datosConstrucion = Request () ->except('_token');


       if($request->hasFile('imagen')){
            $datosConstrucion['imagen']=$request->file('imagen')->store('uploads','public');
       }
       construccion::insert($datosConstrucion);
       return redirect('construccion/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function show(construccion $construccion)
    {
        return view('construccion.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $construccion = construccion::findOrFail($id);
        return view('construccion.edit', compact( 'construccion' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $datosConstrucion = Request () ->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $construccion=construccion::findOrFail($id);
            Storage::delete(['public/'.$construccion->imagen]);
            $datosConstrucion['imagen']=$request->file('imagen')->store('uploads','public');
       }

        construccion::where('id','=',$id)->update($datosConstrucion);
        $construccion=construccion::findOrFail($id);
        return view('construccion.edit', compact( 'construccion'   ) );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        construccion::destroy($id);
        return redirect('construccion/create');

    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');

    }
}
