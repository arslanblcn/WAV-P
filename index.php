<!doctype html>
<html lang="en">
  <head>
  	<title>Web Application Vulnerability and Practicing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
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
	            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="sqli/sqli.php"><span class="fa fa-database mr-3"></span> SQL Injection</a>
	          </li>
            <li>
                <a href="phpi/phpi.php"><span class="fa fa-file-code-o mr-3"></span> PHP Code Injection</a>
            </li>
            <li>
              <a href="lfi/lfi.php"><span class="fa fa-folder-open mr-3"></span> File Inclusion</a>
	          </li>
            <li>
              <a href="fupload/upload.php"><span class="fa fa-file-text-o mr-3"></span>File Upload</a>
            </li>
			      <li>
            	<a href="commexec/commexec.php"><span class="fa fa-free-code-camp mr-3"></span> Command Execution </a>
            </li>
            <li>
              <a href="xss/xss.php"><span class="fa fa-code mr-3"></span> Cross Site Scripting</a>
            </li>
            <li>
              <a href="install.php"><span class="fa fa-download mr-3"></span> Install</a>
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
          What is WAV&P #1 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
      <div class="card-body">
        Web Application Vulnerability and Practising is a web-based vulnerable project which can be helpful for the beginner level people who insterested in web application security. This project includes many vulnerability and you can exploit and prevent them. The project will be more secure thanks to you.
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
          Who can use it? #2 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
      <div class="card-body">
        Anyone who interested in web application security, secure development or bug bounty can use this project.
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
          What kind of things you'll learn? #3 <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
      <div class="card-body">
        In this project you can find types of web application vulnerability. More theory and nudges for any hacking or secure development will be waiting for you.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
      </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>