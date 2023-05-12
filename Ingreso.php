<?php
require 'conexion.php'; //llamada a una conexión hecha en otro documento
$table = "datos"; // esta variable puede estar en la pagina de conexión o no estar siempre y cuando se extablezca en la construcción de la consulta la tabla que queremos
// Verificar si se ha enviado un archivo
if(isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
	// Obtener la ruta temporal del archivo
	$ruta_temporal = $_FILES['archivo']['tmp_name'];
    $data = array(); //inicialización de variable, aunque inecesaria.
    // leer el archivo
    if (($handle = fopen($ruta_temporal, "r")) !== FALSE) {
        //optenemos la información en $data con fgetcsv
        while ($data = fgetcsv($handle,1000,',')){//Tomamos los datos que haya en el .csv en $data
            $num = count ($data);   
            print"";
            echo $data[0]; //solo imprime el primer campo tomado de cada fila se puede borrar ya que es solo de visualización para loq ue hace
            //construimos la consulta sql
            $sql = "INSERT INTO $table (nombre, apellido, edad) VALUES ('".$data[0]."', '".$data[1]."', $data[2])";
            //Validamos que la consulta esté bién 
            if (mysqli_query($conexion, $sql)) { //ya que esto es para validar se puede quitar todo el if dejando solo la ejecución de la consulta (mysqli_query($conexion, $sql))siempre dentro del while
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }   
        }
       
    }
    // Cerrar la conexión a la base de datos
	mysqli_close($conexion);
    //imprimimos un comprobante de que ha funcionado como debe
	echo "Importación completada";
} 
else {
    //no hay archivo subido 
	echo "Error al subir el archivo.";
}
?>