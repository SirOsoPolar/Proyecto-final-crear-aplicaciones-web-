<!DOCTYPE html>
<html>
<head>
	<title>Formulario de votacion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" >
</head>

<header class="inicio">
	<label class="ini">SISTEMA DE VOTACION</label>
</header>

<body>
<form method="POST" action="login.php" enctype="multipart/form-data">
<br>
		<label>Ingrese Correo:</label><br/>
		<div>
		<input type="correo" name="correo" required></input><br/>
		</div>
		<label>Ingrese Contraseña:</label><br/>
		<input type="password" name="contrase" required></input><br/><br>
		<input type="submit" value="Ingresar">		

		</form>		
		<?php
		$conn = include("conexion.php");
		session_start();
		$cedulaC=@$_POST['correo'];
		$contraC=@$_POST['contrase'];


		$Consulta="SELECT * FROM votantes WHERE correo='$correoC' AND contraseña= '$contraC'" ;
		
		$query = mysqli_query($conn,$Consulta);
	
		while($row = @mysqli_fetch_array($query)){
			$id = $row["idvotante"];
			$nombre= $row["nombre"];
			$correo = $row["correo"];
			$contra= $row["contraseña"];
			$imagen = $row["foto"];			
			if ($contra==$contraC) {
				if ($documento==$cedulaC) {
					$_SESSION['foto']=$imagen;
					$_SESSION['nombrePersona']=$nombre;
					$_SESSION['idVotante']=$id;
					header("Location: Ingresado.php ");				
				}
			}else{
				echo "<script >alert('usted no esta registrado') </script>";
			}
		}		

		?>

</body>