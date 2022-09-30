<html lang="en">
<head>
<title>Drawer</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
$im = @imagecreatetruecolor(120, 120)
  or die('Cannot initialize GD image');
imagepng($im);
imagedestroy($im);
?>
</body>
</html>
