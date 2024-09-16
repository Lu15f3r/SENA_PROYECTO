var tabla; // Variable global para almacenar la tabla de permisos.

// Función hace que se ejecuta al inicio de la carga de la página. ***************************+
function init() { // La función init() se ejecuta automáticamente al inicio, init() llama a mostrarform(false), que oculta el formulario y muestra la lista de permisos.
    mostrarform(false);
    listar(); // despues init() llama a listar(), que configura y muestra la tabla de permisos en la página web.
}

// Función para mostrar u ocultar el formulario de permisos.
function mostrarform(flag) {
    if (flag) {
        $("#listadoregistros").hide(); // Oculta la lista de registros.
        $("#formularioregistros").show(); // Muestra el formulario de registros.
        $("#btnGuardar").prop("disabled", false); // Habilita el botón de guardar.
        $("#btnagregar").hide(); // Oculta el botón de agregar.
    } else {
        $("#listadoregistros").show(); // Muestra la lista de registros.
        $("#formularioregistros").hide(); // Oculta el formulario de registros.
        $("#btnagregar").show(); // Muestra el botón de agregar.
    }
}

// Función para listar los permisos en una tabla.
// en la función listar(), se configura un DataTable para mostrar los permisos. *****************************
function listar() {
    tabla = $('#tbllistado').dataTable({
        "aProcessing": true, // Activa el procesamiento del datatable.
        "aServerSide": true, // Realiza paginación y filtrado en el servidor.
        dom: 'Bfrtip', // Define los elementos de control de la tabla.
        buttons: [
            'copyHtml5', // Botón para copiar datos.
            'excelHtml5', // Botón para exportar a Excel.
            'csvHtml5', // Botón para exportar a CSV.
            'pdf' // Botón para exportar a PDF.
        ],
        "ajax": {
            url: '../ajax/permiso.php?op=listar', //Se hace una solicitud al archivo permiso.php usando AJAX con el parámetro op=listar.                                  ***********
            type: "get", // Método de solicitud.
            dataType: "json", // Tipo de datos esperados en la respuesta.
            error: function(e) {
                console.log(e.responseText); // Muestra errores en la consola.
            }
        },
        "bDestroy": true, // Permite destruir la tabla existente si se vuelve a inicializar.
        "iDisplayLength": 10, // Número de registros por página.
        "order": [
            [0, "desc"] // Ordena los registros por la primera columna en orden descendente.
        ]
    }).DataTable(); // Inicializa el datatable.
}

// Llama a la función init para iniciar el script.
init();