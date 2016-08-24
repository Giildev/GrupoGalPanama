@extends('layouts.default')
@section('content')
<div id="titulonosotros">
  <p class="titulo3">Desarrollos en Panamá</p>
</div>
<div id="contentdesarrollo">
  <div class="col-md-12">
    @foreach($phs as $ph)
      <div class="col-md-3">
        <a href="{{"ph/$ph->id"}}">
          <div class='phtitulos' id='donwaldofoto'><img src="{{asset("img/ph/$ph->foto1")}}" width='220' height='100' alt='donwaldo' /></div>
          <div class='phtitulos' id='donwaldonnombre'>{{ $ph->name }}</div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
