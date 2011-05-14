

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
$ward_no = $_GET['ward_no'];
if ($ward_no != NULL){
	$ward_query = "SELECT	w.wardNumber, w.name, w.location, w.totalNumberBeds, w.telephoneExtension, w.medicalDirector, s.Fname, s.Lname, s.StaffNum FROM	Ward w JOIN Staff s ON	s.StaffNum = w.chargeNurse AND w.wardNumber =".$ward_no;
	$query= "SELECT	* FROM Patient p, PatientAllocation pa WHERE	p.PatientNumber = pa.PatientNumber AND (DatePlaced = '0000-00-00 00:00:00' OR DatePlaced IS NULL) AND dateOnWaitinglist > '0000-00-00 00:00:00' AND pa.wardNo =".$ward_no;
} else {
	echo "<h2>No record found</h2>";
}

$ward_result = mysql_query($ward_query) or die(mysql_error());
$ward_row = mysql_fetch_assoc($ward_result);
$result = mysql_query($query) or die(mysql_error());

echo "<table id='single_info'>";
  echo "
        <tr>
        	<td colspan='5'><b>Ward Number:</b> ".$ward_row['wardNumber']."</td>
          </tr>
        <tr>
					<td ><b>Charge Nurse:</b> ".$ward_row['Fname']." ".$ward_row['Lname']."</td>					
					<td ><b>Telephone Extension:</b> ".$ward_row['telephoneExtension']."</td>
				</tr>
				<tr>
					<td ><b>Ward Name:</b> ".$ward_row['name']."</td>
					<td ><b>Staff Number:</b> ".$ward_row['StaffNum']."</td>
				</tr>
				<tr>
					<td><b>Location:</b> ".$ward_row['location']."</td>
				</tr>
				<tr><td colspan='7' id='title'><b>Patients in this ward</b></td></tr
				<tr>
					<td><b>Patient No</b></td>
					<td><b>Name</b></td>
					<td><b>On waiting list</b></td>
					<td><b>Expected days</b></td>
					<td><b>Bed Number</b></td>
				</tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>
            <td style='widh:4px;'><a href='single_patient.php?patient_no=".$row['PatientNumber']."'>".$row['PatientNumber']."</a></td>
					<td>".$row['Fname']." ".$row['Lname']. "</td>
					<td>".$row['dateOnWaitinglist']."</td>
					<td>".$row['expectedDays']."</td>
					<td>".$row['bedNumber']."</td>
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
