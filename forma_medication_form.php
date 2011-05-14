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
  <div id="page">
  <div id="page-bgtop">
  <div id="page-bgbtm">
    <div id="content">

          <form method="get" action="reporte_medication_form.php">
            <div id="form">
              <p>
              	<label>Patient No: </label>
              	<input type="text" name="patient_no" id="search-text" value="" />
							</p>
              <input type="submit" id="search-submit" value="Buscar" />
            </div>
          </form>
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->
    <div style="clear: both;">&nbsp;</div>
  </div>
  </div>
  </div>
  <!-- end #page -->
</div>
  <?php  include_once('partials/footer.html' ); ?>
</body>
</html>

