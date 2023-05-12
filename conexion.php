<?php

/* Conexión a base de datos */
$host_db = "sql200.epizy.com";
$user_db = "epiz_34034225";
$pass_db = "FnYvwqPavj8";
$db_name = "epiz_34034225_persona";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}


?>