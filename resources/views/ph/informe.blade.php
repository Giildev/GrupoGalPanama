@extends('layouts.default')
@section('content')
  <div id='tituloinforme'>

    <p class='titulo3'>Informe Confidencial: {{ $ph->name }}</p>

  </div>

  <div class="container">
    <div class="col-md-12" style="margin-left: 10%">

          <div id='permisologiant'><a href="informe/etapas" onmouseout='MM_swapImgRestore()' onmouseover='MM_swapImage('permisologia','','img/etapas_btn_out.jpg',1)'><img src='{{asset('img/etapas_btn_out.jpg')}}' width='185' height='185' id='permisologia' /></a></div>

          <div id='memoriant'><a href='informe/memoria' onmouseout='MM_swapImgRestore()' onmouseover='MM_swapImage('memoria','','memoria_btnout.png',1)'><img src='{{asset('img/memoria_btnout.png')}}' width='185' height='185' id='memoria' /></a></div>

          <div id='estadont'><a href='informe/estado' onmouseout='MM_swapImgRestore()' onmouseover='MM_swapImage('estado','','img/estado_btnout.png',1)'><img src='{{asset('img/estado_btnout.png')}}' width='185' height='185' id='estado' /></a></div>

          <div id='ventasnt'><a href='informe/ventas'  onmouseout='MM_swapImgRestore()' onmouseover='MM_swapImage('ventas','','img/ventas_btnout.png',1)'><img src='{{asset('img/ventas_btnout.png')}}' width='185' height='185' id='ventas' /></a></div>
    </div>
  </div>
@endsection
