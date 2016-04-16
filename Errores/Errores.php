<?php 


class Errores{

	public static function errorInicio($mensaje){
		$_SESSION['errorLog'] = $mensaje;
        header('Location: index.php');
	}

}


 ?>