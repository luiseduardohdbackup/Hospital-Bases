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

    <form method="post" action="create_staff.php">
		<table id='form_info'>
      <tr><td  id='id'colspan = '2'colspan>Staff Form
        <div id='table_links'>
        <a href='reporte_forma_staff.php'>See all</a>
      </td></tr>
			<tr><td colspan = '2'  id='title'>Personal Details</td></tr>
		        <tr>
					<td>First Name: <input type="text" name="f_name"></td>					
					<td>Last Name: <input type="text" name="l_name"></td>					
		        </tr>			
						<tr>
						<tr>
							<td>Address: <textarea rows="4" name="address"></textarea></td>
							<td>Sex: <input type="text" name="sex"></td>
						</tr>
						<tr>
							<td>Salary Scale: <input type="text" name="scale"></td>
							<td>DOB: <input class="datepicker" type="text" name="dob"></td>
						</tr>
						<tr>
							<td>Telephone No: <input type="text" name="telephone"></td>
							<td>Medicare: <input type="text" name="medicare"></td>
						</tr>
						<tr>
							<td>Position: <input type="text" name="position"></td>
							<td>Allocated to Ward: <input type="text" name="ward"></td>
						</tr>
						<tr>
							<td>Current Salary: <input type="text" name="salary"></td>
							<td>Hours per Week: <input type="text" name="hours"></td>
						</tr>
						<tr>
							<td>Paid Weekly or Monthly (W or M): <input type="text" name="paid"></td>
							<td>Permanent or Temporary (P or T): <input type="text" name="permanent"></td>
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

