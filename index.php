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
			<form action="page1.php" method="post">
			Veuillez entrer UN NOMBRE : <input type="text" name="nombre" placeholder="ENTRER UN NOMBRE ENTIER" size="13" align="middle"><hr>
			<input type="submit" value="NOMBRE SUPERIEUR">
		</div>
	</div>
	<!-- Ceci est un commentaire, il ne 
sera pas affiché dans le navigateur HTML -->

</body>
</html>