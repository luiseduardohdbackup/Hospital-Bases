
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
$ward_no = $_GET['ward_no'];
if ($ward_no != NULL){
	$ward_query = "SELECT	* FROM	Requisitions r, Ward w WHERE	r.WardNo = w.wardNumber AND r.WardNo =".$ward_no;
	$query= "SELECT	* FROM	Requisitions r, Supplies ss WHERE ss.itemNumber = r.ItemNo AND r.WardNo =".$ward_no;
} else {
	echo "<h2>No record found</h2>";
}
	echo "<ul id='inner_menu'>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all</a></li>
					<li><a href='reporte_forma_staff.php' class='big_link'>Show all </a></li>
				</ul>";
	
$ward_result = mysql_query($ward_query) or die(mysql_error());
$ward_row = mysql_fetch_assoc($ward_result);
$result = mysql_query($query) or die(mysql_error());

echo "<table id='single_info'>";
	echo "<tr><td colspan='6' id='title'><b>Wellmeadows Hospital</br> Requisition Form</b></td></tr>";
  echo "
        <tr>
			<td colspan='6'><b>Ward Number:</b> ".$ward_row['WardNo']."</td> 
		</tr>
      	
				<tr><td colspan='6' id='title'>Supplies</td></tr
				<tr>
					<td><b>Order Date</b></td>
					<td><b>Item No</b></td>
					<td><b>Name</b></td>
					<td><b>Description</b></td>
					<td><b>Cost per Unit</b></td>
					<td><b>Quantity</b></td>
				</tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>
					<td>".$row['OrderDate']."</td>
					<td id='id'><a href='reporte_supplies.php?item_no=".$row['itemNumber']."'>".$row['itemNumber']."</a></td>
					<td>".$row['itemName']."</td>
					<td>".$row['description']."</td>
					<td>".$row['CostPerUnit']."</td>
					<td>".$row['QtyRequired']."</td>
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

			       <form method="get" action="reporte_requisition_ward.php">
		            <div id="form">
		              <p>
		              	<label>Ward No: </label>
		              	<input type="text" name="ward_no" id="search-text" value="" />
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
