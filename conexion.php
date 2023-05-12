<?php

/* Conexión a base de datos */
$host_db = "";//El puerto de entrada o el host name de la base de datos
$user_db = "";//Usuario que responde en la base de datos
$pass_db = "";//Contraseña requeridad para realizar consultas 
$db_name = "";//nombre de la base de datos
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}


?>