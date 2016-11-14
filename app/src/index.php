<?php
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
<h1><?php echo "AWS AutoScaling Demo"; ?></h1>
<p>
<?php if($_SERVER["SERVER_ADDR"]) {?><h3>My IP is <?php echo $_SERVER["SERVER_ADDR"]; ?></h3><?php } ?>
</p>
<p><a href="resize.php?image=earth-elevation.jpg&width=3000"/>Click to view a resized image</a><br/>
(intentionally puts heavy load on the server to trigger autoscaling)</p>
</body>
</html>
