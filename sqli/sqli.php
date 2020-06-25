<!doctype html>
<html lang="en">
  <head>
  	<title>Web Application Vulnerability and Practicing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
			<div class="p-4">
		  		<h1><a href="../index.php" class="logo">WAV&P</a></h1>
		  		<p style="margin-top: -15px;">Web Application Vulnerability and Practicing</p>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="../index.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="sqli.php"><span class="fa fa-database mr-3"></span> SQL Injection</a>
	          </li>
            <li>
                <a href="../phpi/phpi.php"><span class="fa fa-file-code-o mr-3"></span> PHP Code Injection</a>
            </li>
	          <li>
              <a href="../lfi/lfi.php"><span class="fa fa-folder-open mr-3"></span> File Inclusion</a>
	          </li>
            <li>
              <a href="../fupload/upload.php"><span class="fa fa-file-text-o mr-3"></span> File Upload</a>
            </li>
            <li>
              <a href="../commexec/commexec.php"><span class="fa fa-free-code-camp mr-3"></span> Command Execution </a>
            </li>
            <li>
              <a href="../xss/xss.php"><span class="fa fa-code mr-3"></span> Cross Site Scripting</a>
            </li>
            <li>
              <a href="../install.php"><span class="fa fa-download mr-3"></span> Install</a>
            </li>
	        </ul>

	        <div class="footer">
	        	<p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> WAV&P
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">
          What is SQL Injection #1 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
      <div class="card-body">
        SQL Injection is a web application vulnerability that is allow to attacker might execute sql commands in database. An attacker can see sensitive data and modify (INSERT, UPDATE, DELETE) them by using sql commands. The SQL injection vulnerability can be found where the application and database communicate each other. <br>
        <h5>Types of SQL Injection</h5>
          <ol>
            <h6><li>In-band SQLi (Classic SQLi)</li></h6>
            <p>This type of sql injection is the most common and easy to exploit. There are two types of in-band SQLi.</p>

            <ul><h6><li>Error-based SQLi</li></h6></ul>
            <p>This SQLi technique is based on error messages thrown by the database server to get information about the structure of the database.</p>

            <ul><h6><li>Union-based SQLi</li></h6></ul>
            <p>Leverages the UNION SQL operator to combine the results of two or more SELECT statements into a single result.</p>
            
            <h6><li>Inferential SQLi (Blind SQLi)</li></h6>
            <p>In this SQLi type, the data is not actually transferred between the web application and the attacker is not able to directly see the response of the injected queries. This kind of vulnerability is exploited when the attacker enumerates the database by observing the application's behavior.</p>

            <ul><h6><li>Boolean-based Blind SQLi</li></h6></ul>
            <p>A type of attack that forces a different result to be returned in the application, depending on whether the query sent to the database returns true or false.</p>

            <ul><h6><li>Time-based Blind SQLi</li></h6></ul>
            <p>A type of attack that forces a query sent to the database to wait a certain time. Depending on the result of query, the attacker may return true or false result by looking at the http response is delayed or sudden answer even if no data is coming from the database. </p>
          </ol>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">
          Learn Database Query Basics #2 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
      <div class="card-body">
        In this section, you'll understand how a query works in the database. Firstly, you need to open the mysql server then use <b>WAVP</b> database. Let's start with 4 types of databases queries which are INSERT, SELECT, UPDATE and DELETE commands. A person who use these commands can add, update, delete or list a value from database as desired. So, for the beginning, you can run these queries in your mysql console screen.<br><br>
        <h6>SELECT Statement</h6>
         <code class="code">
            SELECT 1;<br>
            SELECT 1 + 1;<br>
            SELECT '1' + '1';<br>
            SELECT '2 + 1';<br>
            SELECT '2' + 'a';<br>
            SELECT 'b' + 'a';<br>
            SELECT '2' '1' 'b'-'1';<br>
         </code>
         After running you'll see different results. This is because mysql understands the values in between quotes marks as integer. Well, How do we search value in a database? In this queries, you'll make query in users table that belongs to wavp database.<br>
          <code class="code">
            SELECT * FROM users;<br>
            SELECT firstname,lastname FROM users;<br>
            SELECT * FROM users WHERE firstname="john";<br>
            SELECT * FROM users WHERE firstname LIKE "%a%";
         </code><br>
         As you see, all data, by name, values ​​containing a character can be drawn in the database with queries similar to them.<br><br>
         <h6>INSERT Statement</h6>
         A value can add into database by using insert query. Here are examples; <br>
         <code class="code">
            INSERT INTO users (firstname,lastname,email) VALUES ("janny","kennen","jannywavp@wavp.com");<br>
            INSERT INTO users (firstname,lastname,email) VALUES ("jack","stevenson","jackwavp@wavp.com"),("ashley","young","ashleywavp@wavp.com");
         </code><br>
         You can also add multiple values in a one query. <br><br>
         <h6>UPDATE Statement</h6>
            The update statement modifies existing data in a table. You can also use the UPDATE statement change values in one or more columns of a single row or multiple rows. Here are examples; <br>
            <code class="code">
              UPDATE users SET firstname="jhonny" WHERE id = 3; <br>
              UPDATE users SET firstname="johnny",lastname="deep",email="johnnywavp@wavp.com" WHERE id = 3; <br>
            </code>
            As you can see, A value can modify by using update statement.

            <h6>DELETE Statement</h6>
            To delete data from a table, you use the MySQL DELETE statement. <br>
            <code class="code">
              DELETE FROM users WHERE id = 3; <br>
              DELETE FROM users WHERE firstname="johnny"; <br>
            </code>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          Case 1 #3 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
      <div class="card-body">
        In this case, you'll make some search on users table. You'll search by name and you already known that how select statement works. So, how will you manipulate it? Let's see. Remember! A speacial mark can broke the query.<br><br>
        <a href="sql1.php"><button class="btn btn-primary" type="button">Go to Page</button></a>

      </div>
    </div>

  </div>
  <!-- Accordion card -->
  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree4">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
        aria-expanded="false" aria-controls="collapseThree4">
        <h5 class="mb-0">
          Case 2 #4 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
      <div class="card-body">
        In this case, you'll make a query and get a result from different tables. So, Can you dump the all data from these tables? You know what kind of sqli is this. Good luck :) <br><br>
        <a href="sql2.php"><button class="btn btn-primary" type="button">Go to Page</button></a>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
      </div>
	</div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>