<?php
	class objeto
	
{		function __toString()
		{
			echo "Instancia creada de la clase obj";
		}

		function __invoke($a,$b)
		{
			echo $a+$b;
		}
		function __call($name,$arg)
		{
			echo "<hr />";
			echo "Metodo llamado: $name";
			echo "<br />";
			echo "Argumentos: " . implode(" , ", $arg);
			/*
			foreach ($arg as $key => $value) {
				echo $value," - ";
			}*/
			echo "<hr />";
		}
	}
?>