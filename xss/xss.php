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
		  		<h1><a href="index.html" class="logo">WAV&P</a></h1>
		  		<p style="margin-top: -15px;">Web Application Vulnerability and Practicing</p>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="../index.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="../sqli/sqli.php"><span class="fa fa-database mr-3"></span> SQL Injection</a>
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
              <a href="xss.php"><span class="fa fa-code mr-3"></span> Cross Site Scripting</a>
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
          What is Cross Site Scripting? #1 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
      <div class="card-body">
        <h6>Description</h6>
           Cross Site Scripting is a client-side code injection attack. The attacker can execute malicious scripts in a browser of the victim by using XSS vulnerability. The attack occurs when the victim visits the web-page or web application that executes the malicious code. Thus, the web page or web application becomes a vehicle to deliver the malicious script to the user’s browser. Vulnerable vehicles that are commonly used for Cross-site Scripting attacks are forums, message boards, and web pages that allow comments. There are 3 type of XSS vulnerability :
           <ul>
             <li><b>Reflected XSS</b> where the malicious script comes from the current HTTP request.</li>
             <li><b>Stored XSS</b> where the malicious script comes from the website's database.</li>
             <li><b>Dom-Based XSS</b> where the vulnerability exists in client-side code rather than server-side code. </li>
           </ul>
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
          Case 1 #2 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
      <div class="card-body">
        It's blocking something that you entered. Different payloads can help you. <br><br>
        <a href="xss-1.php"><button class="btn btn-primary" type="button">Go to Page</button></a>
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