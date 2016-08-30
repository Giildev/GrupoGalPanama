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

    public function upload() {
      // getting all of the post data
      $file = array('image' => Input::file('gmap'));
      // setting up rules
      $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('/ph')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if (Input::file('image')->isValid()) {
          $destinationPath = 'public\img\ph'; // upload path
          $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renameing image
          Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
          // sending back with message
          Session::flash('success', 'Upload successfully');
          return Redirect::to('/ph');
        }
        else {
          // sending back with error message.
          Session::flash('error', 'uploaded file is not valid');
          return Redirect::to('/ph');
        }
      }
    }
}
