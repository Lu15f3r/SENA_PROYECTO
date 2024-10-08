<?php             // Este archivo es que muestra la interfaz de usuario para gestionar permisos.
// Se encarga de verificar si el usuario está autenticado y tiene el nivel de acceso adecuado para ver la página.
//activamos el almacenamiento en el buffer
ob_start();
session_start();
if(!isset($_SESSION["nombre"]))
{
	header("Location: login.html"); // si no se loguea se va a esta direccion
} else  { 
require 'header.php';

    // VALIDAR SI LA SESION ALMACEN ES =1
if ($_SESSION['acceso'] == 1) { 

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
            <h1 class="box-title">PERMISOS<button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i
                  class="fa fa-plus-circle"></i> Agregar</button></h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <!-- /.box-header -->
          <!-- centro -->
          <div class="panel-body table-responsive" id="listadoregistros">

            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
              <thead>            
                <th>Nombre</th>            
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <th>Nombre</th>        
              </tfoot>
            </table>
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
  <script type="text/javascript" src="scripts/permiso.js"></script>

  <?php
  }
  ob_end_flush();
  ?>