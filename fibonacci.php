<html>
<head>
	<title> </title>
</head>
<body> 
	 <?php
	$fibo = [];
    	$a = 0;
    	$b = 1;
	$n=2048;
    	for ($i = 0; $i < $n; $i++) {
        	$fibo[$i] = $a;
        	$temp = $a + $b;
        	$a = $b;
        	$b = $temp;
    		}
				
		for ($i = 0; $i < $n; $i++) {
        	echo $fibo[$i], "<br>";
		
    		}

	?>
		
</body>
</html>