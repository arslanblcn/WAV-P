<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style type="text/css">
.center {
	margin: auto;
	width: 50.2%;;
	padding: 10px;
	top: 10px;
}
p {
	text-align: center;
	font-size: 20px;
}
</style>
<body>
	<p>Do you want to read something. Enter a file name (e.g. note.txt).</p>
	<div class="center">
		<img src="giphy.gif" width="660" height="280">
	</div>
	<form method="GET" action="commexec-1.php">
		<div class=""><center>
			<input type="text" name="file"><input type="submit" value="Submit">
		</center>
		</div>
	</form>
<div class="center"><center>
	
	<?php 
	
		if(isset($_GET['file'])){
			$file = $_GET['file'];
			$badChars = array('/','|',';','(',')', '&&');
			$file = str_replace($badChars, " " ,$file);
			echo shell_exec("cat"." ".$file);
			echo shell_exec("type"." ".$file);
			// You can add all characters into array or there is a php function that blocks these bad characters
		}

	?>
	</center>
</div> <!-- Had all special characters  been disabled? -->

</body>
</html>