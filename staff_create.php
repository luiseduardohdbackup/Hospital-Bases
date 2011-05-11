
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Wellmeadows Hospital</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="javascript/jquery.js" type="text/javascript"></script>
<script src="javascript/slider.js" type="text/javascript"></script>
<script src="javascript/application.js" type="text/javascript"></script>
</head>
<body>
	
  <?php  include_once('partials/mysql_init.php' ); ?>
<div id="wrapper">
  <?php  include_once('partials/header.html' ); ?>
	<script>$('#menu ul li.staff').addClass("current_page_item");</script>

  <div id="page">
  <div id="page-bgtop">
  <div id="page-bgbtm">
    <div id="content">

<?php
	$Fname = 		        $_POST['Fname'];
	$Lname = 		        $_POST['Lname'];
	$Addresss = 		    $_POST['Addresss'];
	$Telephone = 		    $_POST['Telephone'];
	$BirthDate = 		    $_POST['BirthDate'];
	$Gender = 		      $_POST['Gender'];
	$InsuranceNumber = 	$_POST['InsuranceNumber'];
	$CurrentSalary = 		$_POST['CurrentSalary'];
	$SalaryScale = 		  $_POST['SalaryScale'];
	$TypeOfEmployment = $_POST['TypeOfEmployment'];
  $HoursPerWeek = 		$_POST['HoursPerWeek'];
  $last_id = "SELECT StaffNum FROM Staff HAVING StaffNUm = MAX(StaffNUm)";
	$chino = mysql_query($last_id) or die(mysql_error());
	echo "<h1>Insert existoso</h1>";
	
	

?>
<a href="forma.php">Volver</a>
</body>
</html>
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <ul>
	
        <li>
          <div id="search" >
						<h2>Buscar:</h2>

			       <form method="get" action="reporte_forma_staff.php">
		            <div id="form">
		              <p>
		              	<label>Qualification: </label>
		              	<input type="text" name="qualification" id="search-text" value="" />
									</p>
									<p>
		              	<label>Position: </label>
		              	<input type="text" name="position" id="search-text" value="" />
									</p>
		              <input type="submit" id="search-submit" value="Buscar" />
		            </div>
		          </form>
          </div>
          <div style="clear: both;">&nbsp;</div>
        </li>
      </ul>
    </div>
    <!-- end #sidebar -->
    <div style="clear: both;">&nbsp;</div>
  </div>
  </div>
  </div>
  <!-- end #page -->
</div>
  <div id="footer">
    <p>Creado por: Rogelio Guzman, Miguel Gonzalez, Alfonso Reyes y Gerardo Garcia</p>
  </div>
  <!-- end #footer -->
</body>
</html>
