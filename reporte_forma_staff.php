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
	<script>$('#menu ul li.staff').addClass("current_page_item");</script>

  <div id="page">
  <div id="page-bgtop">
  <div id="page-bgbtm">
    <div id="content">
	
<?php
//Por medio de $_GET se obtiene el tipo de query seleccionado en la forma anterior.

//Por medio de if se hacen comparaciones para determinar el query a realizar
//Si el query seleccionado fue el 1, simplemente se muestra el contenido de la tabla employee.
$qualification = $_GET['qualification'];
$position = $_GET['position'];
if($qualification || $position){
	echo "<h1>Results filtered by qualification type and position</h1>";
	$query= "SELECT	s.staffNum, s.fname, s.lname, q.type, w.position FROM	Staff s, Qualifications q, WorkExperience w WHERE	s.StaffNum = q.StaffNum AND s.StaffNum = w.StaffNum AND (q.Type = '".$qualification."' OR w.Position = '".$position."')";
} else {
	echo "<h1>Showing all Results</h1>";
	$query= "SELECT	s.staffNum, s.fname, s.lname, q.type, w.position FROM	Staff s, Qualifications q, WorkExperience w WHERE	s.StaffNum = q.StaffNum AND s.StaffNum = w.StaffNum ";	
}
$result = mysql_query($query);

echo "<table >";
echo "<tr>
				<th>Staff Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Position</th>
				<th>Qualification Type</th>
			</tr>";
while($row = mysql_fetch_array($result)) {
  echo "<tr >";
  // Se imprimen los resultados en forma de tabla. Nótese que se concatenan los campos de cada fila
  // con etiquetas HTML de tabla, para que el resultado en pantalla sea el de celdas con información.
  echo "<td id='id'><a href='single_staff.php?staff_no=".$row['staffNum']."'>".$row['staffNum']."</a></td>
				<td>".$row['fname']."</td>
				<td>".$row['lname']."</td>
				<td>".$row['position']."</td>
				<td>".$row['type']."</td>";
  echo "</tr>";
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

			       <form method="get" action="reporte_forma_staff.php">
		            <div id="form">
		              <p>
		              	<label>Qualification: </label>
		              	<input type="text" name="qualification" id="search-text" value="" />
									</p>
									<p>
		              	<label>Position: </label>
		              	<input type="text" name="position" id="search-text" value="" />
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
