<html>
<head>
<title>PROBLEMAS</title>
	<body>
	<?php
	echo "hola mundo<br>";
	echo "<br>";
	echo "INSTITUTO CIPEC";
	echo "<br>";
	echo "GESTION 2012";
	echo "<br>";
	$nombre="wilder terceros";
	echo "<br>";
	$promedio=76.82;
	$fecha="02/04/2012";					
	echo $nombre;
	echo "<br>";
	echo $promedio;
	echo "<br>";
	echo $fecha ;
	echo "<br>";
	
	$nom_producto="pc";
	$prec_compra=12;
	$cantidad=5;
	$total=$prec_compra*$cantidad;
	$iva=0.013*$total;
	$total_pagar=$total-$iva;
	
	echo $total_pagar;
	ECHO"<BR>";
	
	$NUM1=RAND(1,10);
	
		IF($NUM1>5)
		ECHO"ES MAYOR A 5_";
			ELSE
				ECHO"ES MENOR A 5";
				ECHO"<BR>";
			ECHO"_EL NUMERO INGRESADO ES ".$NUM1; ECHO"<BR>";
	$NUMERO1=RAND(1,1000);
	echo "EL NUMERO ESCOGIDO ES ".$NUMERO1;
	ECHO"<BR>";
		IF($NUMERO1>10 && $NUMERO1<100)
			ECHO"el # ingresado tiene _2_ dijitos_";
ECHO"<BR>";
			IF ($NUMERO1>=100 && $NUMERO1<1000)
			ECHO"EL NUMEOR ES DE _3_ DIJITOS";
			ECHO"<BR>";
				IF ($NUMERO1<10)
				print"EL ES DE UN _1_DIJITO_";
				print"<BR>";
	$X=2;	
	FOR($I=1;$I<=10;$I++)
	{
		$X=$X+2;
		ECHO"LA SUMA ".$X;
		ECHO"<BR>";
	}
	?>
	</body>
	</html>