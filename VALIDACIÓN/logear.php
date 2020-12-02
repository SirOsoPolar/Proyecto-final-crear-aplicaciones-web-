<?php
		include("conexion.php");
        $nombreC=@$_GET['nombre'];
		$contraC=@$_GET['contraseña'];
		$resultados = mysqli_query($conexion,"SELECT * FROM usuario WHERE pass = '$contraC'");
		while($consulta = mysqli_fetch_array($resultados)){
			$usuario = $consulta['pass'];
			if ($usuario == $nombreC){
				echo "conectaod";
				header('Location: https://www.youtube.com/watch?v=uKxyLmbOc0Q');
			}
		}
        include("cerrar_conexion.php")
?>