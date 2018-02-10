<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	<div class="bannermenu2">
	<div class="contenlogomenu">
		<figure class="logo">
			<img src="../img/calcu.png" alt="" class="img-responsive pull-left">
		</figure>
		<div id="header__icon" class="menu-opcion">
		  <i id="open" class="fa fa-align-justify fa-2x" aria-hidden="true"></i>
		  <i id="close" class="fa fa-close fa-2x close"  aria-hidden="true"></i>
		  <p>Menu</p>
		</div>
		<nav class=" menu pull-right">
			<ul>
				<li><a href="../index.php">INDEX</a></li>
				<li><a href="nosotros.php">NOSOTROS</a></li>
				<li><a href="servicios.php">SERVICIOS</a></li>
				<li><a class="select" href="contacto.php">CONTACTO</a></li>
			</ul>
		</nav>
	</div>
</div>

<article class="empresa">
	<p>CONTACTO</p>
</article>

<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6751614859095!2d-99.17229638564491!3d19.426436386887875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff4a2e34317d%3A0x7d6e7dc8caf395e7!2sPaseo+de+la+Reforma+383%2C+Cuauht%C3%A9moc%2C+06500+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1497036187970" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="bg-faded py-5 form1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="text-tit-contacto">CALCUEXPRESS REPARADORES DE EMPRESAS S.C.P</h3>
          <p class="text-info-contacto">
            <br>Av. Paseo de la Reforma #383 <br>
                por C. Rio Nilo y Rio Guadalquivir <br>
                Col. Cuauhtemoc, Cd. de México C.P. 06500
            <br> <abbr title="Phone">Teléfono:</abbr>PENDIENTE <br>
            <abbr title="Mail">Correo:</abbr>info@calcuexpress.com <br>
            <abbr title="Mail">Horario:</abbr>Lunes a Viernes de 9am a 6pm
            </p>
        </div>
        <div class="col-md-6">
          <h2 class="pi-item">Formulario de contacto</h2>
          <form onSubmit="return false">
            <fieldset class="form-group"> <label for="exampleInputEmail1">Nombre completo</label>
              <input type="text" id="txtNOMBRE" name="txtNOMBRE" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu nombre completo"> </fieldset>

              <fieldset class="form-group"> <label for="exampleInputEmail1">Teléfono</label>
              <input type="text" id="txtTELEFONO" name="txtTELEFONO" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu teléfono"> </fieldset>

            <fieldset class="form-group"> <label for="exampleInputEmail1">Correo</label>
              <input type="email" id="txtCORREO" name="txtCORREO" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu correo"> </fieldset>

              <fieldset class="form-group"> <label for="exampleInputEmail1">Comentario</label>
               <textarea type="text" id="txtCOMENTARIO" name="txtCOMENTARIO" class="form-control" rows="3" placeholder="Escribe tu comentario"></textarea>
              </fieldset>

							<div id="_AJAX_PRE_"></div>
							</div>

            <button type="submit" class="btn btn-warning pull-right" id="btnContactUs" onclick="sendCORREO()">Enviar</button>
						<!-- <button type="submit" class="btn btn-warning pull-right" id="btnContactUs"  onclick="sendCORREO()">ENVIAR</button> -->
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/menu.js"></script>
<!-- <script src="../js/sendCORREO.js"></script> -->
</body>
</html>
