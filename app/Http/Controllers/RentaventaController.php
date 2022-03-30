<?php

namespace App\Http\Controllers;

use App\Models\rentaventa;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class RentaventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['rentaventas']=rentaventa::paginate(20);
        return view('rentaventa.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['rentaventas']=rentaventa::paginate(20);
        return view('rentaventa.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosRentaventa = Request () ->except('_token');


        if($request->hasFile('imagen')){
             $datosRentaventa['imagen']=$request->file('imagen')->store('uploads','public');
        }
        rentaventa::insert($datosRentaventa);

        return redirect('renta-venta/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rentaventa  $rentaventa
     * @return \Illuminate\Http\Response
     */
    public function show(rentaventa $rentaventa)
    {
        //w
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rentaventa  $rentaventa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rentaventa = rentaventa::findOrFail($id);
        return view('rentaventa.edit', compact( 'rentaventa' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rentaventa  $rentaventa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosRentaventa = Request () ->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $rentaventa= rentaventa::findOrFail($id);
            Storage::delete(['public/'.$rentaventa->imagen]);
            $datosRentaventa['imagen']=$request->file('imagen')->store('uploads','public');
       }

       rentaventa::where('id','=',$id)->update($datosRentaventa);
        $rentaventa=rentaventa::findOrFail($id);
        return view('rentaventa.edit', compact( 'rentaventa' ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rentaventa  $rentaventa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        rentaventa::destroy($id);
        return redirect('renta-venta/create');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');

    }
}
