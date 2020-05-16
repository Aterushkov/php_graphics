<?
header('Content-type:image/png');

$image_t = imagecreatefromjpeg('ekb.jpg');
$bg = imagecolorallocate($image_t,0,100,200);
$textColor = imagecolorallocate($image_t,255,255,255);
imagestring($image_t,10, 200, 50, "Hello. First img!", $textColor);



// imagepng($image_t, 'hello.png');
imagepng($image_t);
imagedestroy($image_t);