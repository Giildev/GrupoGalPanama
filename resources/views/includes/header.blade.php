<div id="logo">
  <a href="/">
    <img src="{{asset('img/logo.png')}}" width="250" height="110" />
  </a>
</div>
  <div id="login">
    <a href="#" data-toggle="modal" data-target="#modalLogin"><img src="{{asset('img/loginBtn.png')}}" width="222" height="30" alt="login" /></a>
  </div>
  <div id="menu">
    <table width="580" height="34" align="right">
      <tr valign="bottom">
        <td width="45" height="28" align="center" valign="top" class="menu"><a href="/" class="menu">Inicio</a></td>
        <td width="143" align="center" valign="top"><span class="menu"><a href="/about" class="menu">¿Quiénes somos?</a></span></td>
        <td width="172" align="center" valign="top" class="menu"><a href="/desarrollo" class="menu">Desarrollos en Panamá</a></td>
        <td width="76" align="center" valign="top"><span class="menu"><a href="/contact" class="menu">Contacto</a></span></td>
      </tr>
    </table>
  </div>

<div id="modal">
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Iniciar sesión</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Correo">
					<input type="password" name="pass" placeholder="Cédula de identidad">
					<input type="submit" name="login" class="login loginmodal-submit" value="Ingresar">
				  </form>
				</div>
			</div>
		  </div>
</div>
