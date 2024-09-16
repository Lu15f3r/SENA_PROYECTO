<?php
// Definimos una constante que representa la dirección del servidor de la base de datos.
// En este caso, es "localhost", ya que estamos trabajando en el mismo servidor donde está la base de datos.
define ("DB_HOST", "localhost");

// Definimos una constante que contiene el nombre de la base de datos a la que queremos conectar.
define("DB_NAME", "dbsistema");

// Definimos una constante que representa el nombre de usuario de la base de datos.
// En este caso, usamos "root", que es el usuario por defecto en muchas instalaciones de MySQL.
define("DB_USERNAME", "root");

// Definimos una constante que contiene la contraseña del usuario de la base de datos.
// En este caso, la contraseña es "ProyectoSena".
define("DB_PASSWORD", "ProyectoSena");

// Definimos una constante que especifica el juego de caracteres a utilizar en la conexión con la base de datos.
// En este caso, usamos "utf8" para asegurar la compatibilidad con caracteres especiales.
define("DB_ENCODE", "utf8");

// Definimos una constante para el nombre del proyecto o del sistema.
// Esta constante se puede utilizar para mostrar el nombre del proyecto en el título de las páginas web o en otros lugares.
define("PRO_NOMBRE", "ITventas");
?>
