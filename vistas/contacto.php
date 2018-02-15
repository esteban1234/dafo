<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	

  <header>
    <figure class="logo pull-left">
        <img src="../img/dafo.png" alt="DAFO" class="img-responsive">
    </figure>

    <nav class="pull-right">
        <ul>
            <a class="select" href="../index.php">INICIO</a>
            <a class="select" href="nosotros.php">NOSOTROS</a>
            <a class="select" href="servicios.php">SERVICIOS</a>
            <a class="select" id="selector" href="contacto.php">CONTACTO</a>
        </ul>
    </nav>
</header>

<div class="banner4">
   <div class="fondo4">
        <p class="uno">EXPERTOS EN <br>  DERECHO CIVIL Y DERECHO LABORAL</p>
   </div>
</div>

<p class="textcontac"> Si desea más información sobre nuestros servicios, puede contactarnos a través de nuestros teléfonos, correo electrónico o en nuestras oficinas. </p>

<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Nombre Completo</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName2">Teléfono</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Correo</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Comentario</label>
                     <textarea  class="form-control" placeholder=""></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Enviar Mensaje</button>
                  </form>

                  <hr>
                    <h3>DATOS DE OFICINA</h3>

     
                </div>
              </div>
            </div>
        </div>
              <br><br>
         <div class="container">
        <div class="row">
          <div class="col-md-3">
            <i class="fas fa-map-marker-alt fa-7x"></i>
            <h2 class="text-center">DIRECCION</h2>
            <p class="text-center">PENDIENTE</p>
          </div>
          <div class="col-md-3">
            <i class="fas fa-phone fa-7x"></i>
            <h2 class="text-center">TELEFONO</h2>
            <p class="text-center">PENDIENTE</p>
          </div>
          <div class="col-md-3">
            <i class="far fa-envelope fa-7x"></i>
            <h2 class="text-center">CORREO</h2>
            <p class="text-center">info@administradoradafo.com</p>
          </div>
          <div class="col-md-3">
            <i class="far fa-clock fa-7x"></i>
            <h2 class="text-center">HORARIO</h2>
            <p class="text-center">Lunes a Viernes de 9 am a 6 pm</p>
          </div>
        </div>
      </div>

      </section>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/menu.js"></script>
<!-- <script src="../js/sendCORREO.js"></script> -->
</body>
</html>
