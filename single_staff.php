
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
//Por medio de $_GET se obtiene el tipo de query seleccionado en la forma anterior.

//Por medio de if se hacen comparaciones para determinar el query a realizar
//Si el query seleccionado fue el 1, simplemente se muestra el contenido de la tabla employee.
$staff_no = $_GET['staff_no'];
if ($staff_no != NULL){
	$query= "SELECT	DISTINCT * FROM	Staff s, Qualifications q, WorkExperience w WHERE s.StaffNum = q.StaffNum AND s.StaffNum = w.StaffNum AND s.StaffNum = ".$staff_no;
	
	echo "<ul id='inner_menu'>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all</a></li>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all </a></li>
				</ul>";
	
} else {
	echo "<h2>No record found</h2>";
}	

$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);

echo "<table id='single_info'>";
	echo "<tr><td colspan='2' id='id'>STAFF NUMBER: ".$row['StaffNum']."</td></tr>
	<tr><td colspan='2' id='title'>Personal Details</td></tr>";
  echo "
        <tr>
        	<td>First Name: ".$row['Fname']."</td>
					<td>Last Name: ".$row['Lname']."</td>					
        </tr>			
				<tr>
				<tr>
					<td>Address: ".$row['Address']."</td>
					<td>Sex: ".$row['Gender']."</td>
				</tr>
				<tr>
					<td>".$row['']."</td>
					<td>DOB: ".$row['BirthDate']."</td>
				</tr>
				<tr>
					<td>Tel No: ".$row['Telephone']."</td>
					<td>Medicare: ".$row['InsuranceNumber']."</td>
				</tr>
				<tr>
					<td>Position: ".$row['Position']."</td>
					<td>Ward: Falta </td>
				</tr>
				<tr>
					<td>Current Salary: ".$row['CurrentSalary']."</td>
					<td>Hours/Week: ".$row['HoursPerWeek']."</td>
				</tr>
				<tr>
					<td>Paid Weekly or Monthly (Enter W or M): Falta</td>
					<td>Permanent or Temporary (Enter P or T): ".$row['TypeOfEmployment']."</td>					
				</tr>
				<tr>
					<td>Permanent or Temporary (Enter P or T): ".$row['TypeOfEmployment']."</td>
					<td>Medicare: ".$row['InsuranceNumber']."</td>
				</tr>
				<tr>
						<td id='title'>Qualifications </td>
						<td id='title'>Work Experience </td>
				</tr>
				<tr>
					<td>Type: ".$row['Type']."</td>
					<td>Position: Falta </td>
				</tr>
				<tr>
					<td>Date: Falta </td>
					<td>Start Date: ".$row['StartDate']."</td>
				</tr>
				<tr>
					<td>Institution: ".$row['Institution']."</td>
					<td>Finish Date: ".$row['FinishDate']."</td>
				</tr>
				<tr>
					<td></td>
					<td>Organisation: Falta </td>
				</tr>";
				
				
echo "</table>";
?>

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
