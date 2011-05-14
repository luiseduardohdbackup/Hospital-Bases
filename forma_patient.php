<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Wellmeadows Hospital</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/jquery-ui-1.8.12.custom.css" rel="stylesheet" type="text/css" media="screen" />
<script src="javascript/jquery.js" type="text/javascript"></script>
<script src="javascript/jquery-ui-1.8.12.custom.min.js" type="text/javascript"></script>
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
<script>
	$(function() {
		$( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	</script>

    <form method="post" action="create_patient.php">
		<table id='form_info'>
      <tr><td colspan='2' id='id'>Patient Form
        <div id='table_links'>
        <a href='patients.php'>See all</a>
      </td></tr>
			<tr><td colspan='2' id='title'>Personal Details</td></tr>
		        <tr>
					<td>First Name: <input type="text" name="f_name" required="required"></td>					
					<td>Last Name: <input type="text" name="lname" required="required"></td>					
		        </tr>			
						<tr>
						<tr>
							<td>Address: <textarea rows="4" name="address" required="required"></textarea></td>
							<td>Sex: <input type="text" name="sex" required="required"></td>
						</tr>
						<tr>
							<td>DOB: <input class="datepicker" type="text" name="dob" required="required"></td>
							<td>Telephone No: <input type="text" name="telephone" required="required"></td>
						</tr>
						<tr>
							<td>Date Registered: <input class="datepicker" type="text" name="date" required="required"></td>
							<td>Marital Status: <input type="text" name="marital" required="required"></td>
						</tr>
				<tr><td colspan='2' id='title'>Next-Of-Kin Details</td></tr>		
						<tr>
							<td>Full Name: <input type="text" name="NOKname" required="required"></td>
							<td>Relationship: <input type="text" name="NOKrelationship" required="required"></td>
						</tr>
						<tr>
							<td>Address: <textarea rows="4" name="NOKaddress" required="required"></textarea></td>
							<td>Telephone No: <input type="text" name="NOKtelephone" required="required"></td>
						</tr>
							
						<tr>
							<td></td>
              <td><input type="submit" id="search-submit" value="Submit" /></td>
						</tr>
			
					</table>	
    <div style="clear: both;">&nbsp;</div>
    </div>
    <div style="clear: both;">&nbsp;</div>
  </div>
  </div>
  </div>
  <!-- end #page -->
</div>
<div id="footer">
  <p>Creado por: Rogelio Guzman, Miguel Gonzalez, Alfonso Reyes y Gerardo Garcia</p>
</div>
</body>
</html>

