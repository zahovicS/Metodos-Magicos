<?php

	class alumnos extends usuarios
	{
		private $carrera;
		private $semestre;

		function __construct()
		{
			parent::__construct();
		}

		public function setCarrera($carrera)
		{
			$this->carrera=$carrera;
		} 	

		public function getCarrera()
		{
			return $this->carrera;
		}

		public function setSemestre($semestre)
		{
			$this->semestre=$semestre;
		} 	

		public function getSemestre()
		{
			return $this->semestre;
		}

		function __toString()
		{
			var_dump($this);
		}
		
	}
?>