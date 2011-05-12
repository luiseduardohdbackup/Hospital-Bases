
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Wellmeadows Hospital</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="javascript/jquery.js" type="text/javascript"></script>
<script src="javascript/slider.js" type="text/javascript"></script>
<script src="javascript/application.js" type="text/javascript"></script>
</head>
<body>
	<script>$("menu ul li").removeClass("current_page_item");$('menu ul li.wards').addClass("current_page_item");</script>
  <?php  include_once('partials/mysql_init.php' ); ?>
<div id="wrapper">
  <?php  include_once('partials/header.html' ); ?>
	<script>$('#menu ul li.wards').addClass("current_page_item");</script>

  <div id="page">
  <div id="page-bgtop">
  <div id="page-bgbtm">
    <div id="full_width">
	
<?php
//Por medio de $_GET se obtiene el tipo de query seleccionado en la forma anterior.

//Por medio de if se hacen comparaciones para determinar el query a realizar
//Si el query seleccionado fue el 1, simplemente se muestra el contenido de la tabla employee.
$patient_no = $_GET['patient_no'];
if ($patient_no != NULL){
	$patient_query = "SELECT	* FROM	Patient p, PatientAllocation pa, Ward w WHERE	pa.wardNo = w.wardNumber AND p.PatientNumber = pa.PatientNumber AND p.PatientNumber =".$patient_no;
	$query= "SELECT	* FROM	Patient p, medicationList m, drug d WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber =".$patient_no;
} else {
	echo "<h2>No record found</h2>";
}
	echo "<ul id='inner_menu'>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all</a></li>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all </a></li>
				</ul>";
	
$patient_result = mysql_query($patient_query) or die(mysql_error());
$patient_row = mysql_fetch_assoc($patient_result);
$result = mysql_query($query) or die(mysql_error());

echo "<table id='single_info'>";
	echo "<tr><td colspan='6' id='title'><b>Wellmeadows Hospital</br> Patient Medication Form</b></td></tr>";
  echo "
        <tr>
			<td colspan='6'><b>Patient Number:</b> ".$patient_row['PatientNumber']."</td> 
		</tr>
        	<tr>
				<td colspan='3'><b>Full Name: </b>".$patient_row['Fname']." ".$patient_row['Lname']."</td>
					<td colspan='3'><b>Ward Number:</b> ".$patient_row['wardNo']."</td>					
			</tr>
				
			<tr>
				<td colspan='3'><b>Bed Number:</b> ".$patient_row['bedNumber']."</td>
				<td colspan='3'><b>Ward Name:</b> ".$patient_row['name']."</td>
			</tr>
				<tr><td colspan='6' id='title'>Patient's Medication</td></tr
				<tr>
					<td><b>Drug No</b></td>
					<td><b>Name</b></td>
					<td><b>Method of Admin</b></td>
					<td><b>Units per Day</b></td>
					<td><b>Start Date</b></td>
					<td><b>Finish Date</b></td>
				</tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>
					<td id='id'><a href='reporte_drugs.php?drug_no=".$row['drugNumber']."'>".$row['drugNumber']."</a></td>
					<td>".$row['name']."</td>
					<td>".$row['adminMethod']."</td>
					<td>".$row['unitPerDay']."</td>
					<td>".$row['startDate']."</td>
					<td>".$row['endDate']."</td>
				</tr>
				
				";
			}
				
				
				
echo "</table>";
?>

    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->
 
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
