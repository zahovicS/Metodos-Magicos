<?php
	class usuarios extends SGDB
	{
		private $nombres;
		private $apellidos;
		private $dni;

		function __construct()
		{
			$this->nombres="Nuevo Usuario";
			$this->apellidos="desconocido";
			$this->dni="S/N";
		}
  
		function __destruct()
		{
			echo "destruyendo objeto...";
		}

		public function setNombres($nombres)
		{
			//codigo que verifique y proteja a tu objeto
			$this->nombres=$nombres;
		}

		public function getNombres()
		{
			return $this->nombres;
		}

		function __toString()
		{
			 var_dump($this);
		}

		function __invoke()
		{
			echo "Esta empleando de manera incorrecta el objeto";
		}

		public function guardar($nombres,$apellidos)
		{
			echo $nombres," , ",$apellidos;
		}
		public function check_duplicados($nombres,$apellidos)
		{
			echo "No hay duplicados";
		}
		public function buscar($dato="")
		{
			echo "sin dato a buscar, te mostrare todo";
		}	

	}
?>