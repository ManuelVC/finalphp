<?php 

class Conexion{

	private $host = 'localhost';
	private $us = 'root';
	private $pw = 'root';
	private $bd = 'repositorio';
	private $con = null;


	private function conectar(){
		$this->con = new mysqli(
				$this->host,
				$this->us,
				$this->pw,
				$this->bd
			);
		if($this->con->connect_errno){
			die('Error al conectar con la base de datos');
		}
	}

	private function cerrar(){
		$this->con->close();
	}

	public function sql($sql){
		$this->conectar();

		$resultados = $this->con->query($sql);

		$this->cerrar();
		return $resultados;
	}

	

}





 ?>