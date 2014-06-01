<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Floworking - Help Prevent Water Waste in Your Community</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script> 
	<script type="text/javascript" charset="utf-8" src="js/jquery.ui.map.full.min.js"></script>-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="http://js.arcgis.com/3.9/js/dojo/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="http://js.arcgis.com/3.9/js/esri/css/esri.css">


    <script src="http://js.arcgis.com/3.9/"></script>
  </head>

  <body>
  	<div id="fb-root"></div>
	<div class="container">
    	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Report LA Water Waste</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="remover" id="netNav"><a href="/">Report an Issue</a></li>
          	<li class="remover" id="orgNav"><a href="/map.php">View Map</a></li>
            <li class="remover" id="orgNav"><a href="/water.php">LA Water Usage Data</a></li>
            <li class="remover" id="orgNav"><a href="/rewards.php">Rewards</a></li>
          </ul>
          <!--<ul class="nav navbar-nav navbar-right">
          	<li id="profile">
            	<a onClick="facebookLogin()" href="#">Sign In with Facebook</a>
            </li>    
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </div>
    	
      <div class="alert" style="display:none;" id="alerted"></div>
        
        
        
	  <!--End Header -->