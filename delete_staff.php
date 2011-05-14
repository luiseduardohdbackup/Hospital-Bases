

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
$staff_no = $_GET['staff_no'];
if ($staff_no){
  mysql_query('begin');

 	$s_string = "DELETE FROM Staff WHERE StaffNum=".$staff_no;
 	$q_string = "DELETE FROM Qualifications WHERE StaffNum=".$staff_no;
 	$w_string = "DELETE FROM WorkExperience WHERE StaffNum=".$staff_no;
  $ws_string = "DELETE FROM WardStaff WHERE staffNo=".$staff_no;

  $s = mysql_query($s_string);
  $q = mysql_query($q_string);
  $w = mysql_query($w_string);
  $ws = mysql_query($ws_string);

  if(!mysql_error()){
    mysql_query('commit'); 
echo "<h1>Borrado Correctamente</h1>";
  
  } else {
    mysql_query('rollback');
echo "<h1>Error al borrar Staff</h1>";
  }

} 
?>	

					</table>	
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->

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


