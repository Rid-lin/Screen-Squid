<?php
#build 20200227
?>

<!doctype html public "-//W3C//DTD HTML 3.2 Final//EN">
<?php 
	// Check to see if the configuration file exists, if not, explain
	if (file_exists('config.php')) {

		include("config.php"); 
	}
	else {
		echo 'Configuration error: Copy config.php.default to config.php and edit appropriately.';
		exit;
	}


?>
<html>
<head>
<meta http-Equiv="Cache-Control" Content="no-cache">
<meta http-Equiv="Pragma" Content="no-cache">
<meta http-Equiv="Expires" Content="0">
<title>Screen Squid <?php echo $vers; ?></title>
</head>
<frameset cols="400,*" >
    <frame name="left" src="mainmenu.php" frameborder="0" scrolling="no" />
<frame name="right" src="right.php" frameborder="0" />
<noframes>
<body>
<p>This page uses frames, but your browser doesn't support them.</p>
</body>
</noframes>
</frameset>
</html>
