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
	<script>$('#menu ul li.supplies').addClass("current_page_item");</script>

  <div id="page">
  <div id="page-bgtop">
  <div id="page-bgbtm">
    <div id="full_width">
	
<?php
//Por medio de $_GET se obtiene el tipo de query seleccionado en la forma anterior.

//Por medio de if se hacen comparaciones para determinar el query a realizar
//Si el query seleccionado fue el 1, simplemente se muestra el contenido de la tabla employee.
	$ward_query = "SELECT * FROM Supplies";
	
$result = mysql_query($ward_query) or die(mysql_error());

echo "<div id='search_bar'><a href='forma_patient.php'>Create supply</a>
  </div>";
echo "<table id='single_info'class= 'hovering' >";
echo "<tr>
				<th>Item number</th>
				<th>Name</th>
				<th>Description </th>
				<th>Quantity stock</th>
        <th>Reorder level </th>
        <th>Cost per unit</th>
        <th>Supplier number  </th>";
				
while($row = mysql_fetch_array($result)) {
  echo "<tr >";
  echo "<td id='id'><a href='reporte_supplies.php?item_no=".$row['itemNumber']."'>".$row['itemNumber']."</a></td>
        <td>".$row['itemName']."</td>
        <td>".$row['description']."</td>
        <td>".$row['qtyStock']."</td>
        <td>".$row['reorderLevel']."</td>
        <td>".$row['costPerUnit']."</td>
        <td>".$row['supplierNumber']."</td>
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
