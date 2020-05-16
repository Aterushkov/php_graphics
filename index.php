<?
header('Content-type:image/png');


function setTextToImg($pic,$text){

  $image_t = imagecreatefromjpeg('img\\'.$pic);
  // $bg = imagecolorallocate($image_t,0,100,200);
  $textColor = imagecolorallocate($image_t,255,255,255);
  imagestring($image_t,10, 200, 50, $text, $textColor);
  
  return $image_t;
}


$img1 = setTextToImg('ekb.jpg','Welcome');


// imagepng($image_t, 'hello.png');
imagepng($img1);
// imagedestroy($image_t);


// db
// UPDATE
// $query_send_tmp_unig = "UPDATE `articles` SET tmp_unig = '{$tmp_unig}' WHERE tmp_unig is NULL limIT" .PER_BLOCK;
// $db->query($query_send_tmp_unig);
// SELECT
// $query_article = "SELECT url FROM articles WHERE tmp_unig = '{$tmp_unig}'";
// $article = $db->select($query_article);
// INSERT
// $query_send = "INSERT INTO `articles`(`url`) VALUES ('$articles_url')";
//  $db->query($query_send);