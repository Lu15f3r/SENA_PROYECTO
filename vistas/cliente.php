<?php

//activamos el almacenamiento en el buffer
ob_start();
session_start();
if(!isset($_SESSION["nombre"]))
{
	header("Location: login.html"); // si no se loguea se va a esta direccion
} else  {  

require 'header.php';
    // VALIDAR SI LA SESION acceso ES =1
    if ($_SESSION['ventas'] == 1) { 

?>

<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h1 class="box-title">CLIENTE <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i
                  class="fa fa-plus-circle"></i> Agregar</button></h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <!-- /.box-header -->
          <!-- centro -->
          <div class="panel-body table-responsive" id="listadoregistros">

            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
              <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Numero Documento</th>
                <th>Telefono</th>
                <th>Email</th>
                
              </thead>
              <tbody>
              </tbody>
              <tfoot>
              <th>Opciones</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Numero Documento</th>
                <th>Telefono</th>
                <th>Email</th>
              </tfoot>
            </table>
          </div>

<!-- COMIENZO FORMULARIO REGISTRO--->
          <div class="panel-body" style="height: 400px;" id="formularioregistros">
            <form action="" name="formulario"  id="formulario" method="POST">
              <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label for="">Nombre:</label>
<input type="hidden" id="idpersona" name="idpersona">
<input type="hidden" id="tipo_persona" name="tipo_persona" value="Cliente">
<input type="text" placeholder="Nombre Proveedor" name="nombre" id="nombre" maxlength="100" class="form-control" required>
              </div>

              <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label for="">Tipo  Documento</label>
<select name="tipo_documento" id="tipo_documento" class="form-control select-picker" required>
  <option value="NIT">NIT</option>
  <option value="RUT">RUT</option>
  <option value="CEDULA">C.C</option>
</select>
              </div>

<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Numero Documento</label>
<input type="text" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Numero de Documento">
</div>

<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Direccion</label>
<input type="text" class="form-control" name="direccion" id="direccion" maxlength="70" placeholder="Direccion">
</div>

<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Telefono</label>
<input type="number" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="Telefono">
</div>

<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Email</label>
<input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="Email @">
</div>


              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> GUARDAR</button>
                <button class="btn btn-danger" type="button" id="btnGuardar" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i> CANCELAR</button>
              </div>
            </form>
          </div>
          <!-- FINAL FORMULARIO REGISTRO--->
          <!--Fin centro -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->

<?php

}
else {  // si notiene acceso
  require 'noacceso.php';
}
require 'footer.php'
  ?>
  <script type="text/javascript" src="scripts/cliente.js"></script>
  <?php
  }
  ob_end_flush();
  ?>