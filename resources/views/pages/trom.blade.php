@extends('layouts.default')
@section('content')

  <div id="contenidotrom">
      <div id="trom2"><img src="{{asset('img/trom.png')}}" width="300" height="144" alt="trom" /><br />
        <span class="textourl">www.grupotrom.com</span></div>
      <div id="tromtxt2" style="padding-top:50px;">
        <p class="textos">
          <span class="titulo3">Diseño Eficiente</span><br />
          <br />
          Es una empresa de profesionales dedicados al negocio inmobiliario enfocada en optimizar el retorno de la inversión de nuestros socios a través de un diverso y amplio portfolio de bienes además de ofrecer viviendas de interés social en la ciudad de Panamá.<br />
          <br />
          Gerencias Gal, posee gran conocimiento en gestión de inversiones y expertos en transacciones, en mercados ya establecidos y emergentes. Ofreciendo un insuperable servicio al cliente, con integridad y una total transparencia.<br />
          <br />
        </p>
      </div>
  <div class="titulo1" id="vistas">Vistas aéreas de <br /> Urbanismos Construidos</div>
  <div id="vistasslider">
    <!-- Start WOWSlider.com BODY section -->
  <div id="wowslider-container1">
    <div class="ws_images">
      <ul>
        <li><img src="{{asset('img/trom1.jpg')}}" alt="" title="" id="wows1_0"/></li>
        <li><img src="{{asset('img/trom3.jpg')}}" alt="" title="" id="wows1_1"/></li>
        <li><img src="{{asset('img/trom2.jpg')}}" alt="" title="" id="wows1_2"/></li>
        <li><img src="{{asset('img/trom4.jpg')}}" alt="" title="" id="wows1_3"/></li>
        <li><img src="{{asset('img/trom5.jpg')}}" alt="" title="" id="wows1_4"/></li>
        <li><img src="{{asset('img/trom6.jpg')}}" alt="" title="" id="wows1_5"/></li>
       </ul>
     </div>
    <div class="ws_bullets">
      <div>
      <a href="#" title="">1</span></a>
      <a href="#" title="">3</span></a>
      <a href="#" title="">2</span></a>
      <a href="#" title="">4</span></a>
      <a href="#" title="">5</span></a>
      <a href="#" title="">6</span></a>
    </div>
    </div>
  </div>
    <script type="text/javascript" src="{{asset('slider/engine1/wowslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('slider/engine1/script.js')}}"></script>
  <!-- End WOWSlider.com BODY section -->
  </div>
  <div class="titulo1" id="muestras">Muestras de <br />Urbanismos Construidos</div>
  <div id="muestrasslider">

    <div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-8" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0"><img src="{{asset('img/muestratrom1.jpg')}}"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="{{asset('img/muestratrom2.jpg')}}"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="{{asset('img/muestratrom3.jpg')}}"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="{{asset('img/muestratrom4.jpg')}}"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="{{asset('img/muestratrom5.jpg')}}"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="{{asset('img/muestratrom6.jpg')}}"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="{{asset('img/muestratrom7.jpg')}}"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="{{asset('img/muestratrom8.jpg')}}"></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

  </div>
  <div class="titulo1" id="subtitulotrom">Desarrollos en Venezuela</div>
  <div class="col-md-12">
    <div class="col-md-6">
      <div id="columna1"><span class="textoscolumnas">• Urbanización Tronconal II<br />
        • Urbanización La Ruezga Sur<br />
        • Urbanización Sur Aeropuerto<br />
        • Urbanización Las Flores<br />
        • Zona UD-109<br />
        • Urbanización Industrial Corinsa<br />
        • UrbanizaciónCorinsa<br />
        • Edificio Miramar, Club Camurí Grande<br />
        • Urbanización Parque Residencial Flor Amarilla<br />
        • Urbanización Los Guayabitos</span><br />
      </div><p>&nbsp;</p>
    </div>
    <div class="col-md-6">
      <div class="textoscolumnas" id="columna2">• Urbanización El Torreón<br />
        • Urbanización La Exclusiva<br />
        • Urbanización La Flor<br />
        • Urbanización Paraparal I<br />
        • Urbanización Bosque Lindo<br />
        • Edificio Cathy’s Palace<br />
        • Urbanización Industrial El Portal<br />
        • Urbanización  Vista Hermosa<br />
        Urbanización Las Delicias<br />
        Parque Residencial Fenoco</span><br />
      </div>
    </div>
  </div>
  </div>

@endsection
