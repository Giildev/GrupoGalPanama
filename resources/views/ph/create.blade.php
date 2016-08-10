@extends('layouts.default')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Crear Nuevo PH</div>
                  {!! Form::open(array('url' => 'foo/bar')) !!}
                    <h1>hit</h1>
                  {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
