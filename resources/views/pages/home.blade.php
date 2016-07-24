@extends('layouts.default')
@section('content')
  <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
  <div class="ws_images">
    <ul>
  		<li><img src="{{asset('img/bookie1.jpg')}}" alt="" title="" id="wows1_0"/></li>
  		<li><img src="{{asset('img/bookie3.jpg')}}" alt="" title="" id="wows1_1"/></a></li>
  		<li><img src="{{asset('img/bookie2.jpg')}}" alt="" title="" id="wows1_2"/></li>
	   </ul>
   </div>
	<div class="ws_bullets">
    <div>
		<a href="#" title=""><span><img src="{{asset('slider/data1/tooltips/bookie1.jpg')}}" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="{{asset('slider/data1/tooltips/bookie3.jpg')}}" alt=""/>3</span></a>
    <a href="#" title=""><span><img src="{{asset('slider/data1/tooltips/bookie2.jpg')}}" alt=""/>2</span></a>
	</div>
  </div>
</div>
  <script type="text/javascript" src="{{asset('slider/engine1/wowslider.js')}}"></script>
  <script type="text/javascript" src="{{asset('slider/engine1/script.js')}}"></script>
<!-- End WOWSlider.com BODY section -->
<div id="separador"></div>
  <div id="advantanges">
    <div id="opciones">
      <div id="advan1" class="titulo1">
        <center>Nuestro producto<br />es innovador</center>
      </div>
      <div id="iconosindex">
        <center>
          <a href="/etapasdenegocio"><img src="{{asset('img/icono1.png')}}" width="130" height="130" alt="experiencecargo" /></a><br />
          <span class="textosa">Etapas del modelo de Negocio</span>
        </center>
      </div>
      <div id="iconosindex">
        <center>
          <a href="/atencion"><img src="{{asset('img/icono2.png')}}" width="130" height="130" alt="globalcargo" /></a><br />
          <span class="textosa">Atención Personalizada</span>
        </center>
      </div>
      <div id="iconosindex">
        <center>
          <a href="/ubicacion"><img src="{{asset('img/icono3.png')}}" width="130" height="130" alt="consultingcargo" /></a><br />
          <span class="textosa">Ubicación de los proyectos</span>
        </center>
      </div>
      <div id="iconosindex">
        <center>
          <a href="/panama"><img src="{{asset('img/icono4.png')}}" width="130" height="130" alt="consultingcargo" /></a><br />
          <span class="textosa">Inversión Asegurada en Panamá</span>
        </center>
      </div>
    </div>
  </div>
<div id="separador" style="margin-top: 2%;"></div>
@endsection
