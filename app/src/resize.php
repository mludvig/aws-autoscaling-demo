<?php
// File and new size
$filename = $_GET["image"];
$width = $_GET["width"];

// Content type
header("Content-Type: image/jpeg");
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

// Get new sizes
list($orig_width, $orig_height) = getimagesize($filename);
$scale = $width / $orig_width;

$new_width = $orig_width * $scale;
$new_height = $orig_height * $scale;

// Load
$thumb = imagecreatetruecolor($new_width, $new_height);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $orig_width, $orig_height);

// Output
imagejpeg($thumb);
