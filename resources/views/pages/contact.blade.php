@extends('layouts.default')
@section('content')
  <div id="imagencontacto">
    <img src="{{asset('img/contacto_foto.jpg')}}" width="960" height="200" alt="contacto" />
  </div>
  <div id="contactocontenido">
  <div id="direccion">
  <p><span class="titulo1">Dirección:</span><br />
   <span class="textos">Edf. World Trade Center Piso 12, Ofc. 1201.  <br />
     Panamá, Rep. de Panamá</span></p>
     <p><span class="titulo1">Teléfonos:   </span><br />
       <span class="textos">507 -2237550</span></p>
     </div>


     <div id="formulario">
      <form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table width="500" border="0">
          <tr>
            <td height="51" colspan="2" class="tituloform">Consulte con nosotros cualquier duda:</td>
          </tr>
          <tr>
            <td width="233" class="textos">Nombre o Compañía</td>
            <td width="257" class="textos">Mensaje</td>
          </tr>
          <tr>
            <td><input name="compania" type="text" id="compania" size="20" /></td>
            <td rowspan="7" align="right"><label for="comentarios"></label>
             <textarea name="comentarios" id="comentarios" cols="40" rows="10"></textarea></td>
           </tr>
           <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="textos">Email</td>
          </tr>
          <tr>
            <td><label for="mail"></label>
             <input name="mail" type="text" id="mail" size="20" /></td>
           </tr>
           <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="textos">Teléfono</td>
          </tr>
          <tr>
            <td><label for="telefono"></label>
             <input name="telefono" type="text" id="telefono" size="20" /></td>
           </tr>
           <tr>
            <td>&nbsp;</td>
            <td align="right"><input type="submit" name="enviar" id="enviar" value="Enviar" /></td>
          </tr>
        </table>
      </form>
      </div>
      </div>
@endsection
