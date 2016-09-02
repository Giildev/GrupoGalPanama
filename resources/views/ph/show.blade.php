@extends('layouts.default')
@section('content')
  <div id='titulophtown'>
  	<p class='titulo3'>{{ $ph->name }}</p>
  </div>
  <div id='contenidotown'>
  	<table width='960' height='272' border='0' align='left'>
  		<tr>
  			<td width='420' height='246' valign='top'><p class='textos'><span class='tituloform'>Ubicación:</span></p>
  				<p class='textos'>&nbsp;</p>
  				<p class='textos'>{{$ph->address}}<br />
  					<br />
  					<a href='#'><img src='{{asset("img/informe_btn.png")}}' width='186' height='30' alt='informe' /></a></p></td>
  					<td width='420' align='center' valign='top'><p class='tituloform'>Google Map</p>
  						<p class='textos'><center>
  							<a href='{{$ph->googlemaplink}}' target="_blank"><img src='{{asset("img/ph/$ph->foto1")}}' width='346' height='196' /></a>
  						</center></p></td>
  					</tr>
  				</table>
  				<p>&nbsp;</p>
  				<table width='960' border='0' align='left'>
  					<tr>
  						<td align='center' valign='middle' bgcolor='#133779'><p class='titulosblancos'>Planos de apartamentos</p></td>
  						<td align='center' valign='middle' bgcolor='#133779'><p class='titulosblancos'>Fotos del desarrollo</p></td>
  					</tr>
  					<tr>
  						<td align='center'><a href='{{asset("img/ph/$ph->foto1")}}' target='_blank'><img src='{{asset("img/ph/$ph->foto1")}}' width='250' height='150' onerror="if (this.src != 'error.jpg') this.src = '{{asset("img/FALTANTE.jpg")}}';" /></a></td>
  						<td align='center'><a href='{{asset("img/ph/$ph->foto1")}}' target='_blank'><img src='{{asset("img/ph/$ph->foto1")}}' width='250' height='150' onerror="if (this.src != 'error.jpg') this.src = '{{asset("img/FALTANTE.jpg")}}';" /></a></td>
  					</tr>
  					<tr>
  						<td align='center'><a href='{{asset("img/ph/$ph->foto1")}}' target='_blank'><img src='{{asset("img/ph/$ph->foto1")}}' width='250' height='150' onerror="if (this.src != 'error.jpg') this.src = '{{asset("img/FALTANTE.jpg")}}';" /></a></td>
  						<td align='center'><a href='{{asset("img/ph/$ph->foto1")}}' target='_blank'><img src='{{asset("img/ph/$ph->foto1")}}' width='250' height='150' onerror="if (this.src != 'error.jpg') this.src = '{{asset("img/FALTANTE.jpg")}}';" /></a></td>
  					</tr>
  					<tr>
  						<td align='center'><a href='{{asset("img/ph/$ph->foto1")}}' target='_blank'><img src='{{asset("img/ph/$ph->foto1")}}' width='250' height='150' onerror="if (this.src != 'error.jpg') this.src = '{{asset("img/FALTANTE.jpg")}}';" /></a></td>
  						<td align='center'><a href='{{asset("img/ph/$ph->foto1")}}' target='_blank'><img src='{{asset("img/ph/$ph->foto1")}}' width='250' height='150' onerror="if (this.src != 'error.jpg') this.src = '{{asset("img/FALTANTE.jpg")}}';" /></a></td>
  					</tr>
  				</table>
  				<p class='tituloform'>&nbsp;</p>
  				<p>&nbsp;</p>
  				<p>&nbsp;</p>
  			</div>
@endsection
