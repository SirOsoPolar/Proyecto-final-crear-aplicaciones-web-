<!DOCTYPE html>
<html>
<head>
	<title>Formulario de votacion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" >
</head>
<header class="inicio">
	<label class="ini">Registro para votantes</label>
</header>


<body>
	<form method="POST" action="Formulario.php" enctype="multipart/form-data">
		<label>Ingrese Nombre:</label><br/>
		<input type="text" name="nombre" required></input><br/><br>
		<label>Ingrese correo:</label><br/>
		<input type="text" name="correo" required></input><br/><br>
		<label>Ingrese Contraseña:</label><br/>
		<input type="password" name="contraseña" required></input><br/>	<br>
		<label> Ingrese Foto:</label>
		<input type="file" name="imagenes"/><br/><br>
		<input type="submit" value="Enviar">
		</form>
	<?php
		$conn = include("conexion.php");
		
  $nombreC=@$_POST['nombre'];
		$correoC=@$_POST['correo'];
		$contraC=@$_POST['contraseña'];		
		$imagen=@addslashes(file_get_contents(@$_FILES['imagenes']['tmp_name']));


		$inser_registro = "INSERT INTO votantes (nombre,correo,contraseña,foto) VALUES ('$nombreC',$correoC,'$contraC','$imagen')";        
		$Query = mysqli_query($conn, $inser_registro);
		$Query++;
		if ($Query==1) {		
				echo "<script >alert('Se ha registrado satisfactoriamente') </script>";
			header("location: login.php");
			
		}

	?>

</body>
</html>