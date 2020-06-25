<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
p {
	text-align: center;
	font-size: 20px;
}
button {
	position: relative;
	margin: auto;
	left: 650px;
	padding: 10px;
	bottom: 10px;
}
</style>
<body>
		<p>I'm sure that you're feeling like this right now. Click the button and see what it is.</p>
		<a href="lfi-1.php?file=giphy.php"><button> Show </button></a><br>
		<?php 
			if(isset($_GET["file"])){
				$file = $_GET["file"];
				$file = str_replace(array(" ./", "../"), "", $file); 
				include($file);
			}
		?>
<!-- Dear Developer friend took a precaution but not safer this app-->
</body>
</html>