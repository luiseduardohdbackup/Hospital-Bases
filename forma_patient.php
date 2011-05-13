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
		<table id='single_info'>
			<tr><td colspan='2' id='id'>Patient Form</td></tr>
			<tr><td colspan='2' id='title'>Personal Details</td></tr>
		        <tr>
					<td>First Name: <input type="text" name="f_name"></td>					
					<td>Last Name: <input type="text" name="lname"></td>					
		        </tr>			
						<tr>
						<tr>
							<td>Address: <textarea rows="4" name="address"></textarea></td>
							<td>Sex: <input type="text" name="sex"></td>
						</tr>
						<tr>
							<td>DOB: <input class="datepicker" type="text" name="dob"></td>
							<td>Telephone No: <input type="text" name="telephone"></td>
						</tr>
						<tr>
							<td>Date Registered: <input class="datepicker" type="text" name="date"></td>
							<td>Marital Status: <input type="text" name="marital"></td>
						</tr>
				<tr><td colspan='2' id='title'>Next-Of-Kin Details</td></tr>		
						<tr>
							<td>Full Name: <input type="text" name="NOKname"></td>
							<td>Relationship: <input type="text" name="NOKrelationship"></td>
						</tr>
						<tr>
							<td>Address: <textarea rows="4" name="NOKaddress"></textarea></td>
							<td>Telephone No: <input type="text" name="NOKtelephone"></td>
						</tr>
							
						<tr>
							<td></td>
              <td><input type="submit" id="search-submit" value="Submit" /></td>
						</tr>
			
					</table>	
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <ul>
        <li>
          <div id="search" >
          <form method="get" action="../reporte.php">
            <div>
			  <label>Mickey</label>
              <input type="text" name="fname" id="search-text" value="" />
              <input type="submit" id="search-submit" value="GO" />
            </div>
          </form>
          </div>
          <div style="clear: both;">&nbsp;</div>
        </li>
        <li>
          <h2>Aliquam tempus</h2>
          <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
        </li>
        <li>
          <h2>Categories</h2>
          <ul>
            <li><a href="#">Aliquam libero</a></li>
            <li><a href="#">Consectetuer adipiscing elit</a></li>
            <li><a href="#">Metus aliquam pellentesque</a></li>
          </ul>
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
</body>
</html>

