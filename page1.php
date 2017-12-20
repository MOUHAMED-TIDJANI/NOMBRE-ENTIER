<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NOMBRE AU CLAVIER</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$("#datepicker").datepicker({ dateFormat: "mm-dd" }).val()
		});
	</script>
	<script>
		<?php
		session_start();
		?>
	</script>


</head>
<body>

<div class="container">
	
	<div id="header">
		<div class="intro_text">
			<h1> NOMBRE AU CLAVIER </h1>
			<p> <?php echo date("d - m - Y");?></p>
			<h2><?php
			
		$x=$_POST['nombre'];
		echo "LE NOMBRE SUPERIEUR DIRECT DE " . ($x) . " EST  " ;
    $tailleNombre = strlen($x);
    for($i = 1 ; $i < $tailleNombre ; $i++)
    {
        echo $x[$i - 2] ;
    }
	
$number1 = substr($x, strrpos($x, '.') - 1);
echo $number1;

  echo $x[($tailleNombre - 1)-1];?><hr><?php


?></h2>
<hr>
<a href="index.php"> RETOUR </a>
		</div>
	</div>
	<!-- Ceci est un commentaire, il ne 
sera pas affiché dans le navigateur HTML -->

</body>
</html>