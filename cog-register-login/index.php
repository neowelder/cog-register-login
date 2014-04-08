<?php
include "core/bootstrap.inc";
session_start();
$user=null;
if(Session::getUId()!=""){
  $user = UserData::getById(Session::getUId());
}

?>
<html>
    <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<title>.: Proyecto COG :.</title>
    	<link rel='stylesheet' type='text/css' href='res/bootstrap/css/bootstrap.css'>
      <link rel='stylesheet' type='text/css' href='res/styles/main.css'>
      <script src='res/scripts/jquery.min.js'></script>
      <style>
      #map-canvas {
        height:80%;
      }
      </style>

    </head>
	<body>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="./" class="navbar-brand">Proyecto COG</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
      </ul>
<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if(Session::getUID()!=""){ echo "<em>".$user->name." ".$user->lastname."</em>"; }?> <i class='glyphicon glyphicon-user'></i> <b class="caret"></b></a>
        <ul class="dropdown-menu">
<?php if(Session::getUID()!=""):?>
          <li><a href="index.php?module=home">Inicio</a></li>
          <li><a href="logout.php">Salir</a></li>
<?php else:?>
          <li><a href="index.php?module=signin">Ingresar</a></li>
          <li><a href="index.php?module=register">Registrarse</a></li>
<?php endif; ?>
        </ul>
    </nav>
  </div>
</header>
<br><br><br>
            <div class='container'>
					<?php
		if(!isset($_GET['module'])){
			include "core/view/index/modules/index/widget-default.php";
		}else {
			$module = $_GET['module'];
			if($module!="index"&& $module!="signin"&& $module!="newdeck"&& $module!="configdeck"&& $module!="selcategory" && $module!="home" && $module!="register" && $module!="wellcome" && $module!="about" && $module!="populars"&& $module!="recent"&& $module!="deck"&& $module!="admindeck"&& $module!="editdeck"&& $module!="configuration"&& $module!="admin"&& $module!="about"&& $module!="support"&& $module!="buy"&& $module!="search"&& $module!="contact"){

			}else {
				include "core/view/index/modules/".$module."/widget-default.php";				
			}
		}
		?>
		</div>
<div style='background:#000;color:white;'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-6'>
      <center>
      <br>
        <div style='font-size:30px;'>Proyecto COG</div>
        <div style=''>&copy; 2014 Todos Los Derechos Reservados</div><br>
      </center>
      </div>
      <div class='col-md-3'>
      <h3>Redes Sociales</h3>
        <ul>
          <li><a style='color:white;text-decoration:none;' href='http://facebook.com/neowelder'>Facebook</a></li>
          <li><a style='color:white;text-decoration:none;' href='http://twitter.com/neowelder'>Twitter</a></li>
        </ul>
      </div>
      <div class='col-md-3'>
      <h3>Mas ...</h3>
        <ul>
          <li><a style='color:white;text-decoration:none;' href='http://neowelder.com/blog'>Blog</a></li>
        </ul>
      </div>
    </div>
  </div>
<br>
</div>
		<script src='res/bootstrap/js/bootstrap.min.js'></script>
	</body>
</html>