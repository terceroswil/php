<html>
<head>
<title>problemas resueltos</title>
<body>
	<?php
	echo "hola mundo";
	$nombre="jo se manuel";
	echo "<br>";
	echo $nombre;
	echo"<br>";
	$hola=45;
	$mundo=55;
	$cero=0;
	$cero=$hola+$mundo;
	echo $cero;echo"<br>";echo"<br>";
	$num1=rand(1,10);
		if($num1>5)
			{
			echo"el numero es mayor a 5";
			echo"<br>";
			echo"el numero ingresado es_".$num1;echo"<br>";
			}
			else{
				echo"el numero es menor q 5 ";echo"<br>";
				echo"el numero ingresado es ".$num1;ECHO"<BR>";
				}
	$num2=rand(1,1000);
	echo"el numero ingesado es ".$num2;echo"<br>";
	if($num2>=10 && $num2<100)
		echo"tiene 2 dijitos";
	else
		if($num2>99 && $num2<1000)
		print"tiene 3 dijitos";
			else
				if($num1>1 && $num2<10)
				echo"tiene 1 dijito";
	?>
	
</body>
</html>