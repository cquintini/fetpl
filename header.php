<?php
    $_GET['id'] = isset($_GET['id']) ? $_GET['id'] : 'home';
    $id = $_GET['id'];
?>
<?php require_once 'inc/config/all.php'; ?>
<!DOCTYPE html>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]-->
<!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<html>
<head> 
   	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo current_title() . ' | ' . BRAND; ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="description" content="Project description">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" href="favicon.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="dest/css/styles.css">
	<link rel="stylesheet" href="dest/css/bootstrap/bootstrap.css">
</head>
<body>
<!--[if lte IE 8]>
	<div id="browser-status">	
		Dear Web User, your browser is out of date! <a href="http://browsehappy.com/" target="_blank">
	  Please Upgrade Your Browser
	</a>
	</div>
<![endif]--> 
