<?php
function expresion1($x,$y){
	$a = (1/$x)+(($x+$y)/3)+(2*($x/$y));
	return $a;
	}
function expresion2($x){
	$a = (((1/2)*$x)+((3+$x)/2)*(2*pow($x,2)))/((2+3)*$x);
	return $a;
	}
function expresion3($x){
	$a = sqrt(pow(2*$x,2)+pow(3,2))/5+$x;
	return $a;
	}
function expresion4($x){
	$a = ((1/2+1/4+1/8)*(pow($x,1/3)))/((sqrt($x)/2)+((3*pow($x,2)/4)));
	return $a;
	}
function expresion5($x){
	$a = sqrt(((pow($x,2)/2)+(1/sqrt($x)))/(3+(1/2)*(pow($x,3))));
	return $a;
	}
$x = $_GET["x"];
$y = $_GET["y"];

?>
<html>
	<head><title>Tarea expresiones</title></head>
	<body>
		<h1>Expresiones</h1>
		<h2>Con X=<?php echo $x?> y Y=<?php echo $y?> <h3>
		
		<img src="rsc/exp1.png" alt="Expresion 1" width="200" height="80"><br>
			<p>Resultado = <?php echo expresion1($x,$y)?></p>

		<img src="rsc/exp2.png" alt="Expresion 2" width="200" height="100"><br>
			<p>Resultado = <?php echo expresion2($x)?> </p>

		<img src="rsc/exp3.png" alt="Expresion 3" width="200" height="100"><br>
			<p>Resultado = <?php echo expresion3($x)?></p>

		<img src="rsc/exp4.png" alt="Expresion 4" width="200" height="100"><br>
			<p>Resultado = <?php echo expresion4($x)?></p>

		<img src="rsc/exp5.png" alt="Expresion 5" width="200" height="100"><br>
			<p>Resultado = <?php echo expresion5($x)?></p>

	</body>

</html>
