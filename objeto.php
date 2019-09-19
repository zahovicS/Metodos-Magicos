<?php
	class objeto
	{
		
		function __toString()
		{
			echo "Instancia creada de la clase obj";
		}

		function __invoke($a,$b)
		{
			echo $a+$b;
		}
	}
?>