<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #65B6F5;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #5CA3DA;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2 style="text-align: center;">Search Person</h2>
<p style="text-align: center;">Put a name then I'll give you position and e-mail adress</p>
<form class="example" action="sql2.php" method="GET" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<?php
    include "../settings.php";
    if(!empty($_GET['search'])){
	    $name = $_GET['search']; 
      //First case solution can help you? make safer this page.
	    $result = mysqli_query($conn, "SELECT email FROM users WHERE firstname LIKE '%{$name}%' UNION SELECT position FROM position WHERE firstname LIKE '%{$name}%' ");
		while ($row = mysqli_fetch_array($result))
		{
	        echo $row['email'] . " " . $row['position'];
	        echo "<br>";
		}
    }
?><br>
<!-- If you're still looking for how to do that, real_escape_string function will help you. Good luck :) -->
</body>
</html> 
