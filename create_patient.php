
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
if (true){
  mysql_query('begin');

  $patient_no = "SELECT MAX(PatientNumber) AS id FROM Patient";
  $result = mysql_query($patient_no) or die(mysql_error());
  $patient_no = mysql_fetch_assoc($result);

  $nok_no = "SELECT MAX(NOKid) AS id FROM NextOfKin";
  $result = mysql_query($nok_no) or die(mysql_error());
  $nok_no = mysql_fetch_assoc($result);

  $n_query="INSERT INTO NextOfKin values (".($nok_no['id']+1).",'".$_POST['NOKname']."','".$_POST['NOKaddress']."','".$_POST['NOKtelephone']."','".$_POST['NOKrelationship']."')";

  $q1 = mysql_query($n_query);

  $p_query="INSERT INTO Patient values (".($patient_no['id']+1).",'".$_POST['f_name']."','".$_POST['lname']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['dob']."','".$_POST['sex']."','".$_POST['marital']."','".$_POST['date']."',".($nok_no['id']+1).")";
  
  $q2 = mysql_query($p_query);

  if($q1 and $q2){
    mysql_query('commit');
  
  } else {
    mysql_query('rollback');
  }

} else {
	echo "<h2>No record found</h2>";
}
	echo "<ul id='inner_menu'>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all</a></li>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all </a></li>
				</ul>";
	
?>	

					</table>	
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <ul>
        <li>
          <div id="search" >
          <form method="get" action="">
            <div>
			  <label>Buscar</label>
              <input type="text" name="patient_no" id="search-text" value="" />
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
<?php  include_once('partials/footer.html' ); ?>
</body>
</html>

