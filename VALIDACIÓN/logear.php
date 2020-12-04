<?php
		include("conexion.php");
        session_start();

        $nombreC=@$_GET['nombre'];
		$contraC=@$_GET['contraseña'];

		$q = "SELECT COUNT(*) as contar FROM usuario WHERE nombre_usuario = '$nombreC' AND pass = '$contraC'";
		$consulta= mysqli_query($conexion,$q);
		$array = mysqli_fetch_array($consulta);
		
		if($array['contar']>0){
			$_SESSION['username']=$nombreC;
           header("location: sesion.php");
		}else{
			echo "datos incorrectos";
		}


		
?> 