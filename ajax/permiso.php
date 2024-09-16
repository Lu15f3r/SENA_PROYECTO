<?php 
require_once "../modelos/Permiso.php"; // Incluye el archivo Permiso.php, que define la clase Permiso.
// Crea una nueva instancia de la clase Permiso.
$permiso = new Permiso(); 
// El archivo permiso.php recibe la solicitud AJAX con el parámetro op=listar. 
switch ($_GET["op"]) {
    case 'listar':    
        $rspta = $permiso->listar(); // Llama al método listar de la clase Permiso.
        $data = Array(); // Declara un array vacío para almacenar los datos.

        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "0" => $reg->nombre // Agrega el nombre del permiso al array de datos.
            );
        }

        $results = array(
            "sEcho" => 1, // Información para el datatables (gestión de datos en la tabla).
            "iTotalRecords" => count($data), // Total de registros encontrados.
            "iTotalDisplayRecords" => count($data), // Total de registros a mostrar.
            "aaData" => $data // Los datos que se enviarán al datatable.
        );

        echo json_encode($results); // Convierte el array de resultados a formato JSON y lo envía como respuesta.
        break;
}
?>
