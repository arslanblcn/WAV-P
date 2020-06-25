<!DOCTYPE html>
<html>
<head>
<style>
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
h2, p {
	text-align: center;
}
</style>
</head>
<body>

<h2>The Secret Message</h2>
<p>Would you like to send a message to universe? <a href="<?php echo($_SERVER["phpi-1.php"]); ?>?msg=BeHappy">Click</a> and send it.</p>

<div class="center">
  <p><b>Here is the message: </b>
  	<?php
	if(isset($_REQUEST["msg"])){
		@eval ("echo " . $_REQUEST["msg"] . ";"); //Can html speacial characters filtered?
	}
	?></p>
</div>

<!-- How do you fix this case? What do you need to do? -->
</body>
</html>