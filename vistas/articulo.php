<?php
//activamos el almacenamiento en el buffer
ob_start();
session_start();
if(!isset($_SESSION["nombre"]))
{
	header("Location: login.html"); // si no se loguea se va a esta direccion
} else  { // 

require 'header.php'; // asignaicon de perfiles
if ($_SESSION['almacen'] == 1) { 

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
            <h1 class="box-title">ARTICULOS <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i
                  class="fa fa-plus-circle"></i> Agregar</button> <a  target="_blank" href="../reportes/rptarticulos.php"><button class="btn btn-info">Reporte</button></a> </h1>
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
                <th>Categoría</th>
                <th>Código</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Estado</th>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
              <th>Opciones</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Código</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Estado</th>
              </tfoot>
            </table>
          </div>

<!-- COMIENZO FORMULARIO REGISTRO--->
          <div class="panel-body" id="formularioregistros">
            <form action="" name="formulario"  id="formulario" method="POST">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label for="">Nombre:</label>
<input type="hidden" id="idarticulo" name="idarticulo">
<input type="text" placeholder="Nombre" name="nombre" id="nombre" maxlength="100" class="form-control" required>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Categoria:</label>
<select name="idcategoria" id="idcategoria" class="form-control selectpicker"  data-live-search="true"required></select>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label for="">Stock:</label>
<input type="number"  name="stock" id="stock" class="form-control" required>
              </div>


              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label for="">Descripcion:</label>
<input type="text" placeholder="Descripcion" name="descripcion" id="descripcion" maxlength="256" class="form-control">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label for="">Imagen:</label>
<input type="file" name="imagen" id="imagen" class="form-control">
<input type="hidden" name="imagenactual" id="imagenactual">
<img src="" width="150px" height="120px" id="imagenmuestra">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label for="">Codigo:</label>
<input type="text" name="codigo" id="codigo" class="form-control" placeholder="Codigo de barras">
<button class="btn btn-success" type="button" onclick="generarbarcode()">GENERAR</button>
<button class="btn btn-info" type="button" onclick="imprimir()">IMPRIMIR</button>
<div id="print">
  <svg id="barcode"></svg>
</div>
              </div>
              
              
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> GUARDAR</button>
                <button class="btn btn-danger" type="button" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i> CANCELAR</button>
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
  <script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
  <script type="text/javascript" src="../public/js/Jquery.PrintArea.js"></script>
  <script type="text/javascript" src="scripts/articulo.js"></script>

  <?php
  }
  ob_end_flush();
  ?>