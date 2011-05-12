
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
    <div id="content">
	
<?php
//Por medio de $_GET se obtiene el tipo de query seleccionado en la forma anterior.

//Por medio de if se hacen comparaciones para determinar el query a realizar
//Si el query seleccionado fue el 1, simplemente se muestra el contenido de la tabla employee.
$item_no = $_GET['item_no'];
if ($item_no != NULL){
	$item_query = "SELECT	* FROM Supplies WHERE	itemNumber =".$item_no;
	$query= "SELECT	* FROM Supplies WHERE	itemNumber =".$item_no;
} else {
	echo "<h2>No record found</h2>";
}
	echo "<ul id='inner_menu'>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all</a></li>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all </a></li>
				</ul>";
	
$item_result = mysql_query($item_query) or die(mysql_error());
$item_row = mysql_fetch_assoc($item_result);
$result = mysql_query($query) or die(mysql_error());

echo "<table id='single_info'>";
	echo "<tr><td colspan='6' id='title'><b>Wellmeadows Hospital</br> Item Information</b></td></tr>";
  echo "
        <tr>
			<td colspan='6'><b>Item Number:</b> ".$item_row['itemNumber']."</td> 
		</tr>
      	
				<tr>
					<td><b>Name</b></td>
					<td><b>Description</b></td>
					<td><b>Quantity in Stock</b></td>
					<td><b>Reorder Level</b></td>
					<td><b>Cost per unit</b></td>
				</tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>
					<td>".$row['itemName']."</td>
					<td>".$row['description']."</td>
					<td>".$row['qtyStock']."</td>
					<td>".$row['reorderLevel']."</td>
					<td>".$row['costPerUnit']."</td>
				</tr>
				
				";
			}
				
				
				
echo "</table>";
?>
	
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->
 
    <div id="sidebar">
      <ul>
	
        <li>
          <div id="search" >
						<h2>Buscar:</h2>

			       <form method="get" action="reporte_supplies.php">
		            <div id="form">
		              <p>
		              	<label>Item No: </label>
		              	<input type="text" name="item_no" id="search-text" value="" />
									</p>
		              <input type="submit" id="search-submit" value="Buscar" />
		            </div>
		          </form>
          </div>
          <div style="clear: both;">&nbsp;</div>
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
  <!-- end #footer -->
</body>
</html>
