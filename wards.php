
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
	$ward_query = "SELECT * FROM Ward";
	
$result = mysql_query($ward_query) or die(mysql_error());

echo "<table id='single_info'class= 'hovering' >";
echo "<tr>
				<th>Ward number</th>
				<th>Name</th>
				<th>Location</th>
        <th>Total number of beds </th>
				<th>Telephone extension</th>";
				
while($row = mysql_fetch_array($result)) {
  echo "<tr >";
  echo "<td id='id'><a href='single_ward.php?ward_no=".$row['wardNumber']."'>".$row['wardNumber']."</a></td>
				<td>".$row['name']."</td>
        <td>".$row['location']."</td>
        <td>".$row['totalNumberBeds']."</td>
        <td>".$row['telephoneExtension']."</td>
        </tr>";
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
