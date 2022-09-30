<?php
header("Content-Type: image/png");
$im = imagecreate(2000, 2000) or dir("Error, gachimaster is dead =:( ");

$red = imagecolorallocate($im, 255, 0, 0);
$green = imagecolorallocate($im, 0, 255, 0);
$blue = imagecolorallocate($im, 0, 0, 255);
$violet = imagecolorallocate($im, 255, 0, 255);
$white = imagecolorallocate($im, 255, 255, 255);

imagefill($im, 0, 0, $white);

try {
  $request_num = $_GET["num"];
} catch (Exception $e) {
  $request_num = 1; # Default
}

switch($request_num) {
case 1:
  imagefilledrectangle($im, 800, 800, 1200, 1200, $red);
  break;
 case 2:
   imagefilledellipse($im, 1000, 1000, 100, 100, $green);
   break;
 case 3:
   imagefilledrectangle($im, 900, 900, 1100, 1100, $blue);
   break;
 case 4:
   imagefilledellipse($im, 1000, 1000, 200, 200, $violet);
   break;
 default:
   imagefilledrectangle($im, 600, 600, 1400, 1400, $green);
}

imagepng($im);
?>

