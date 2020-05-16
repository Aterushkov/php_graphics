<?

$image_t = imagecreate(150,30);
$bg = imagecolorallocate($image_t,0,100,200);
$textColor = imagecolorallocate($image_t,120,0,160);
imagestring($image_t,10, 20, 10, "Hello, IMG", $textColor);

header('Content-type:image/png');

imagepng($image_t);

imagedestroy($image_t);