<?


function setTextToImg($pic,$text){
  
  $image_t = imagecreatefromjpeg('img\\'.$pic);

  $textColor = imagecolorallocate($image_t,255,255,255);
  $font = "fonts/arials.ttf";
  imagettftext($image_t,10,0,200,50,$textColor,$font,$text);
  
  return $image_t;
}

$img1 = setTextToImg('ekb.jpg','Привет');

header('Content-Type: image/png');
imagepng($img1);



// imagepng($image_t, 'hello.png');

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