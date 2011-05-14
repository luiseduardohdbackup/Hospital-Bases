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
	<!-- end #header -->
  <div id="page">
  <div id="page-bgtop">
  <div id="page-bgbtm">
    <div id="content">
		<table id='single_info'>
<?php
$patient_no = $_GET['patient_no'];
if ($patient_no != NULL){
	$query = "SELECT	* FROM Patient p, NextOfKin n WHERE p.NOKid = n.NOKid AND p.PatientNumber =".$patient_no;
} else {
	echo "<h2>No record found</h2>";
}

	
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);

echo "<tr><td colspan='2' id='id'>PATIENT NUMBER: ".$row['PatientNumber']."
  <div id='table_links'>
  <a href='patients.php'>See all</a>
  <a href='#'>Edit</a>
  <a href='#'>Delete</a></div>
  </td></tr>
			<tr><td colspan='2' id='title'>Personal Details</td></tr>
		        <tr>
		        	<td>First Name:".$row['Fname']." </td>
					<td>Last Name: ".$row['Lname']."</td>					
		        </tr>			
						<tr>
						<tr>
							<td>Address: ".$row['PAddress']." </td>
							<td>Sex: ".$row['Gender']."</td>
						</tr>
						<tr>
							<td>DOB: ".$row['DateOfBirth']."</td>
							<td>Telephone No: ".$row['Telephone']."</td>
						</tr>
						<tr>
							<td>Date Registered: ".$row['DateRegistered']."</td>
							<td>Marital Status: ".$row['MaritalStatus']."</td>
						</tr>
				<tr><td colspan='2' id='title'>Next-Of-Kin Details</td></tr>		
						<tr>
							<td>Full Name: ".$row['Name']."</td>
							<td>Relationship: ".$row['Relationship']."</td>
						</tr>
						<tr>
							<td>Address: ".$row['NOKAddress']."</textarea></td>
							<td>Telephone No: ".$row['Phone']."</td>
						</tr>";
?>	

					</table>	
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->

    <div style="clear: both;">&nbsp;</div>
  </div>
  </div>
  </div>
  <!-- end #page -->
</div>
<?php  include_once('partials/footer.html' ); ?>
</body>
</html>

