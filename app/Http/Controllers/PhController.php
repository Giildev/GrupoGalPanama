<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ph;

class PhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $phs = Ph::all();
      return view('ph.show')->withPhs($phs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ph.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
          $this->validate($request, array(
            'name' => 'required|max:255',
            'address' => 'required|max:255',
          ));
        //store
          $ph = new Ph;
          $ph->name = $request->name;
          $ph->address = $request->address;
          $ph->googlemaplink = $request->googlemaplink;
          $ph->gmap = $request->gmap;
          $ph->plano1 = $request->plano1;
          $ph->plano2 = $request->plano2;
          $ph->plano3 = $request->plano3;
          $ph->foto1 = $request->foto1;
          $ph->foto2 = $request->foto2;
          $ph->foto3 = $request->foto3;
          $ph->memoria = $request->memoria;
          $ph->estado = $request->estado;
          $ph->ventas = $request->ventas;
          $ph->save();

        // redirect

        return redirect()->route('ph.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
