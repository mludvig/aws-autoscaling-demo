<?php
# Disable caching to demonstrate that we've got multiple instances
# with simlple webpage reload.
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<html>
<head>
	<title>AWS AutoScaling Demo</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<img src="enterpriseIT-logo.png" alt="enterpriseIT logo"/>
<h1><?php
# This is a PHP code to test if PHP works :)
echo "AWS AutoScaling Demo";
?></h1>
<p>
<?php if($_SERVER["SERVER_ADDR"]) {?><h3>Instance IP is <?php echo $_SERVER["SERVER_ADDR"]; ?></h3><?php } ?>
</p>
<p><a href="resize.php?image=earth-elevation.jpg&width=3000"/>Click to view a resized image</a><br/>
(intentionally puts heavy load on the server to trigger autoscaling)</p>
</body>
</html>
