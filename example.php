<?php 
	class example
	{
		
		function __toString()
		{
			echo "Texto";
		}
		function __call($n,$a)
		{
			echo "El metodo: $n esta siendo llamado desde un contexto de objeto y sus
			argumentos son: " . implode(",", $a);
		}
		function __invoke($args="")
		{
			echo "no se esta utilizando bien";
		}
		function __set($name,$valor)
		{
			echo "estableciendo $name, con valor $valor";
		}
		function __get($name)
		{
			echo "consultando el valor en $name";
		}
	}
?>