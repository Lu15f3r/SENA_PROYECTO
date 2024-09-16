<?php
// Incluimos el archivo de configuración que contiene las constantes para la conexión a la base de datos.
require_once "global.php";

// Creamos una conexión a la base de datos usando las constantes definidas en global.php.
$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Configuramos el juego de caracteres para la conexión a la base de datos.
mysqli_query($conexion, 'SET NAMES "' . DB_ENCODE . '"');

// Verificamos si hubo un error en la conexión a la base de datos.
if (mysqli_connect_errno()) {
    // Si hubo un error, mostramos un mensaje con el detalle del error y detenemos la ejecución del script.
    printf("Falló conexión a la base de datos: %s\n", mysqli_connect_error());
    exit();
}

// Verificamos si las funciones para ejecutar consultas ya están definidas.
// Esto es para evitar definirlas múltiples veces si el archivo se incluye más de una vez.
if (!function_exists('ejecutarConsulta')) {

    // Función para ejecutar una consulta SQL y devolver el resultado.
    function ejecutarConsulta($sql) {
        // Accedemos a la variable $conexion desde el ámbito global.
        global $conexion;
        // Ejecutamos la consulta y devolvemos el resultado.
        $query = $conexion->query($sql);
        return $query;
    }

    // Función para ejecutar una consulta SQL y devolver una fila de resultados.
    function ejecutarConsultaSimpleFila($sql) {
        global $conexion;
        // Ejecutamos la consulta.
        $query = $conexion->query($sql);
        // Obtenemos la primera fila del resultado como un arreglo asociativo.
        $row = $query->fetch_assoc();
        return $row;
    }

    // Función para ejecutar una consulta SQL y devolver el ID del último registro insertado.
    function ejecutarConsulta_retornarID($sql) {
        global $conexion;
        // Ejecutamos la consulta.
        $query = $conexion->query($sql);
        // Devolvemos el ID del último registro insertado.
        return $conexion->insert_id;
    }

    // Función para limpiar una cadena de texto para evitar problemas de inyección SQL y XSS.
    function limpiarCadena($str) {
        global $conexion;
        // Eliminamos espacios al inicio y al final, y escapamos caracteres especiales para prevenir inyección SQL.
        $str = mysqli_real_escape_string($conexion, trim($str));
        // Convertimos caracteres especiales a entidades HTML para prevenir XSS.
        return htmlspecialchars($str);
    }
}
?>
