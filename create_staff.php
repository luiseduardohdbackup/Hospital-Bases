
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


  $staff_no = "SELECT MAX(StaffNum) AS id FROM Staff";
  $result = mysql_query($staff_no) or die(mysql_error());
  $staff_no = mysql_fetch_assoc($result);

 	$p_query="INSERT INTO Staff values (".($staff_no['id']+1).",'".$_POST['f_name']."','".$_POST['l_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['dob']."','".$_POST['sex']."','".$_POST['medicare']."','".$_POST['position']."','".$_POST['salary']."','".$_POST['scale']."','".$_POST['permanent']."','".$_POST['hours']."')";
  
  $q = mysql_query($p_query);
  if($q){
    mysql_query('commit'); 
echo "<h1>Creado Correctamente</h1>";
  
  } else {
    mysql_query('rollback');
echo "<h1>Error al crear Staff</h1>";
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

