<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style type="text/css">
.center{
	margin: auto;
	width: 38.5%;
	padding: 10px;
	top: 10px;
	border: 3px solid green;
}
p, h3 {
	text-align: center;
	font-size: 20px;
}
</style>
<body>
	<h3>Who is this guy?</h3>
	<p>If you know him enter his name and than I'll give you hint.</p>
	<div class="center">
		<img src="giphy.gif">
	</div>
	<div style="padding-top: 10px;">
	<center>
		<form action="xss-1.php" method="GET">
			<input type="text" name="name"><input type="submit" value="Submit">
		</form>
	</center>
	</div>
	<div style="padding-top: 10px;"><center>
		<?php 
			if(isset($_GET['name'])){
				$name = strtolower($_GET['name']);
				$tags = array('script','alert');
				$name = str_replace($tags, " ", $name);
				if ($name == "mr robot") {
					echo "Is it only using script tag in xss attacks?"."<br>";
					
				} else {
					echo $name;
				}
			}
		?>
		</center>
	</div>
</body>
</html>