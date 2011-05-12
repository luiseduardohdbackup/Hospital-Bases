
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
	$s_query= "SELECT	* FROM	Staff s WHERE s.StaffNum = ". $staff_no;
	$q_query= "SELECT	* FROM	Staff s, Qualifications q WHERE s.StaffNum = q.StaffNum AND s.StaffNum = ".$staff_no;
	$w_query= "SELECT	* FROM	Staff s, WorkExperience w WHERE s.StaffNum = w.StaffNum AND s.StaffNum = ".$staff_no;
	
	echo "<ul id='inner_menu'>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all</a></li>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all </a></li>
				</ul>";
	
} else {
	echo "<h2>No record found</h2>";
}	

$result = mysql_query($s_query) or die(mysql_error());
$row = mysql_fetch_assoc($result);

echo "<table id='single_info'>";
	echo "<tr><td colspan='2' id='id'>STAFF NUMBER: ".$row['StaffNum']."</td></tr>
	<tr><td colspan='3' id='title'>Personal Details</td></tr>";
  echo "
        <tr>
        	<td><b>First Name: </b>".$row['Fname']."</td>
					<td><b>Last Name: </b>".$row['Lname']."</td>					
        </tr>			
				<tr>
				<tr>
					<td><b>Address: </b>".$row['Address']."</td>
					<td><b>Sex: </b>".$row['Gender']."</td>
				</tr>
				<tr>
					<td> </td>
					<td><b>DOB: </b>".$row['BirthDate']."</td>
				</tr>
				<tr>
					<td><b>Tel No: </b>".$row['Telephone']."</td>
					<td><b>Medicare: </b>".$row['InsuranceNumber']."</td>
				</tr>
				<tr>
					<td><b>Position: </b>".$row['Position']."</td>
					<td><b>Ward: </b>Falta </td>
				</tr>
				<tr>
					<td><b>Current Salary: </b>".$row['CurrentSalary']."</td>
					<td><b>Hours/Week: </b>".$row['HoursPerWeek']."</td>
				</tr>
				<tr>
					<td><b>Paid Weekly or Monthly (Enter W or M): </b>Falta</td>
					<td><b>Permanent or Temporary (Enter P or T): </b>".$row['TypeOfEmployment']."</td>					
				</tr>
				<tr>
					<td><b>Permanent or Temporary (Enter P or T): </b>".$row['TypeOfEmployment']."</td>
					<td><b>Medicare: </b>".$row['InsuranceNumber']."</td>
				</tr>
				<tr>
						<td id='title' colspan='3'>Qualifications </td>
				</tr>
				<tr>
					<td><b>Type</b></td>
					<td><b>Date</b></td>
					<td><b>Institution</b></td>
				</tr>";

$result = mysql_query($q_query) or die(mysql_error());
while($row = mysql_fetch_array($result)) {
	echo "<tr>
					<td>".$row['Type']."</td>
					<td>".$row['DateOfQualification']."</td>
					<td>".$row['Institution']."</td>
				</tr>
				
				";
			}
			
	echo "<tr>
				<td id='title' colspan='3'>Work Experience </td>
				</tr>
		<tr>
					<td><b>Position</b></td>
					<td><b>Start Date</b></td>
					<td><b>Finish Date</b></td>
					<td><b>Organization</b></td>
				</tr>";
				
$result = mysql_query($w_query) or die(mysql_error());

while($row = mysql_fetch_array($result)) {
	echo "<tr>
					<td>".$row['Position']."</td>
					<td>".$row['StartDate']."</td>
					<td>".$row['FinishDate']."</td>
					<td>".$row['Name']."</td>
				</tr>
				
				";
			}
				
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
