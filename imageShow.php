<?

require_once "Db.php";
function setTextToImg($name,$pic,$font,$text){
  $db = DataBase::getDB();
  $image_t = imagecreatefromjpeg('img\\'.$pic);

  $textColor = imagecolorallocate($image_t,255,255,255);
  $font = __DIR__ ."\\fonts\\" .$font;
  imagettftext($image_t, 25, 0, 200, 150, $textColor, $font, $text);
  // $query_send = "INSERT INTO graph (name,pic_link,out_text,link) VALUES ('$name','$pic','$text','$pic')";
  // $db->query($query_send); 

  return $image_t;
}

$img1 = setTextToImg('Привет, ЕКБ','ekb.jpg','Gora-Free.ttf','Привет,ЕКБ');

header('Content-Type: image/png');

imagepng($img1);

imagedestroy($image_t);



// imagepng($image_t, 'hello.png');

// 


// db
// UPDATE
// $query_send_tmp_unig = "UPDATE `articles` SET tmp_unig = '{$tmp_unig}' WHERE tmp_unig is NULL limIT" .PER_BLOCK;
// $db->query($query_send_tmp_unig);
