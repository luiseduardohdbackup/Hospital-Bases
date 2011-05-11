
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
	$ward_query = "SELECT * FROM Ward WHERE wardNumber =".$ward_no;
	$query= "SELECT	* FROM	Staff s, WardStaff wf WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = ".$ward_no;
} else {
	echo "<h2>No record found</h2>";
}
	echo "<ul id='inner_menu'>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all</a></li>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all </a></li>
				</ul>";
	
$ward_result = mysql_query($ward_query) or die(mysql_error());
$ward_row = mysql_fetch_assoc($ward_result);
$result = mysql_query($query) or die(mysql_error());

echo "<table id='single_info'>";
	echo "<tr><td colspan='6' id='title'>Wellmeadows Hospital </td></tr>";
  echo "
        <tr>
        	<td>Ward Number:".$ward_row['wardNumber']."</td>
					<td>Charge Nurse: ".$ward_row['chargeNurse']."</td>					
				</tr>
				<tr>
					<td>Ward Name:".$ward_row['name']."</td>
					<td>Staff Number: FALTA</td>
				</tr>
				<tr>
					<td>Location: ".$ward_row['location']."</td>
					<td>Telephone Extension: FALTA</td>
				</tr>
				<tr><td colspan='6' id='title'>Staff in this Ward</td></tr
				<tr>
					<td>Staff No</td>
					<td>Name</td>
					<td>Address</td>
					<td>Tel No</td>
					<td>Position</td>
					<td>Shift</td>
				</tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>
					<td style='widh:4px;'>".$row[StaffNum]."</td>
					<td>".$row[Fname]." ".$row[Lname]. "</td>
					<td id='big_cell'>".$row[Address]."</td>
					<td>".$row[Telephone]."</td>
					<td>".$row[Position]."</td>
					<td>FALTA</td>
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
