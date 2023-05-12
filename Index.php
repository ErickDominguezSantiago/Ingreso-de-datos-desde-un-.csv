<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso de datos</title>
</head>

<body>

    <div  >
        /*creación del metodo post para el formulario, este manda a llamar las acciones de ingreso */
    <form method="POST" action="Ingreso.php" enctype="multipart/form-data">
		<label for="archivo">Selecciona un archivo CSV:</label>
		<input type="file" name="archivo" id="archivo">
		<br><br>
		<input type="submit" value="Subir archivo">
	</form>
    </div>
    
</body>
