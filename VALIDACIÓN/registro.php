<?php
		include("conexion.php");
        $nombreC=@$_GET['nombre'];
		$correoC=@$_GET['correo'];
		$contraC=@$_GET['contraseña'];
		mysqli_query($conexion,"INSERT INTO usuario(nombre_usuario,correo,pass) VALUES ('$nombreC','$correoC','$contraC')")    
?>