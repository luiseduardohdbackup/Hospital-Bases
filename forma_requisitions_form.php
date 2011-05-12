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

          <form method="get" action="reporte_requisitions_form.php">
            <div id="form">
              <p>
              	<label>Requisition No: </label>
              	<input type="text" name="requisition_no" id="search-text" value="" />
							</p>
              <input type="submit" id="search-submit" value="Buscar" />
            </div>
          </form>
    <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <ul>
        <li>
          <div id="search" >
          <form method="get" action="../reporte.php">
            <div>
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
  <?php  include_once('partials/footer.html' ); ?>
</body>
</html>

