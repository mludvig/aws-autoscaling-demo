<html>
<head>
	<title>AWS AutoScaling Demo</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h1><?php echo "AWS AutoScaling Demo"; ?></h1>
<p>
<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
</p>
<p><img src="resize.php?image=earth-elevation.jpg&width=3000" width="300" height="150" /></p>
</body>
</html>
