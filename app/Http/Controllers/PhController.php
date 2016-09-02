<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ph;
use Input;
use Validator;
use Redirect;
use Session;

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
      return view('ph.index')->withPhs($phs);
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
        $ph = Ph::find($id);
        return view('ph.show')->withPh($ph);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ph = Ph::find($id);
        return view('ph.edit')->withPh($ph);
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
      $this->validate($request, array(
        'name' => 'max:255',
        'address' => 'max:255',
      ));

      $phedit = Ph::find($id);
      if (!empty($request->input('name'))) {
        $phedit->name = $request->input('name');
      }
      if (!empty($request->input('address'))) {
        $phedit->address = $request->input('address');
      }
      if (!empty($request->googlemaplink)) {
        $phedit->googlemaplink = $request->googlemaplink;
      }
      if (!empty($request->gmap)) {
        $phedit->gmap = $request->gmap;
      }
      if (!empty($request->plano1)) {
        $phedit->plano1 = $request->plano1;
      }
      if (!empty($request->plano2)) {
        $phedit->plano2 = $request->plano2;
      }
      if (!empty($request->plano3)) {
        $phedit->plano3 = $request->plano3;
      }
      if (!empty($request->foto1)) {
        $phedit->foto1 = $request->foto1;
      }
      if (!empty($request->foto2)) {
        $phedit->foto2 = $request->foto2;
      }
      if (!empty($request->foto3)) {
        $phedit->foto3 = $request->foto3;
      }
      if (!empty($request->memoria)) {
        $phedit->memoria = $request->memoria;
      }
      if (!empty($request->estado)) {
        $phedit->estado = $request->estado;
      }
      if (!empty($request->ventas)) {
        $phedit->ventas = $request->ventas;
      }

      $phedit->save();

      return redirect()->route('ph.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phdelete = Ph::find($id);

        $phdelete->delete();

        return redirect()->route('ph.index');
    }

    public function uploadFile()
    {}
}
