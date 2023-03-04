<?php

		$x = $_POST['Caja1'];
		$y = $_POST['Caja2'];
		$z = $_POST['Caja3'];

	$orden1=0;
	$orden2=0;
	$orden3=0;
	
	if(($x < $y) && ($x < $z))
	{
		if($y > $z)
		{
			$orden2 = $z;
			$orden3 = $y;
		}else
		{
			$orden2 = $y;
			$orden3 = $z;
		}
		$orden1 = $x;
	}
	else if (($y < $x) && ($y < $z))
	{
		if($x > $z)
		{
			$orden2 = $z;
			$orden3 = $x;
		}else
		{
			$orden2 = $x;
			$orden3 = $z;
		}
		$orden1 = $y;
	}
	else if (($z < $x) && ($z < $y))
	{
		if($x > $y)
		{
			$orden2 = $y;
			$orden3 = $x;
		}else 
		{
			$orden2 = $x;
			$orden3 = $y;
		}
		$orden1 = $z;
	}

 echo "<center>El orden correcto es $orden1, $orden2 y $orden3</center>";
?>