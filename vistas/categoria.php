<?php
ob_start();
session_start();

if (!isset($_SESSION["nombre"])) {
    header("Location: login.html"); // si no se loguea se va a esta direccion
    exit();
} else {
    require 'header.php';

    // VALIDAR SI LA SESION almacen  ES =1, si la variabkle de sesion almacen es ==1 el ususario puede reisar todo el contenido
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
                        <h1 class="box-title">CATEGORIAS <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i
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
                                <th>Descripcion</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                            </tfoot>
                        </table>
                    </div>

                    <!-- COMIENZO FORMULARIO REGISTRO--->
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form action="" name="formulario" id="formulario" method="POST">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="">Nombre:</label>
                                <input type="hidden" id="idcategoria" name="idcategoria">
                                <input type="text" placeholder="Nombre" name="nombre" id="nombre" maxlength="50" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="">Descripcion:</label>
                                <input type="text" placeholder="Descripcion" name="descripcion" id="descripcion" maxlength="256" class="form-control">
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> GUARDAR</button>
                                <button class="btn btn-danger" type="button" id="btnCancelar" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i> CANCELAR</button>
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
require 'footer.php';
}
ob_end_flush();
?>
<script type="text/javascript" src="scripts/categoria.js"></script>
