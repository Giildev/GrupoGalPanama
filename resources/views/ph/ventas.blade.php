@extends('layouts.default')
@section('content')
  <div style='width: 1200px; height: 800px;margin-left: auto; margin-right: auto; margin-top: 25px; margin-bottom: 45px' >
    <div style='width: 1200px; height: 800px;margin-left: auto; margin-right: auto; margin-top: 25px; margin-bottom: 45px' >
      <button onclick="goBack()">Volver</button>

  <script>
  function goBack() {
      window.history.back();
  }
  </script>

    <embed src="img/ph/pdf/{{ $ph->ventas }}" width='1200' height='790' type='application/pdf'/>
  </div>
@endsection
