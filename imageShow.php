<?

require_once "Db.php";
function setTextToImg($name,$pic,$font,$text){

  $image_t = imagecreatefromjpeg('img\\'.$pic);
  $textColor = imagecolorallocate($image_t,255,255,255);
  $font = __DIR__ ."\\fonts\\" .$font;
  imagettftext($image_t, 25, 0, 200, 150, $textColor, $font, $text);


  return $image_t;
}

if(isset($_GET['id'])){
  $db = DataBase::getDB();
  $ide = $db->escape($_GET['id']);
  $query_article = "SELECT * FROM graph WHERE id='{$ide}'";
  $articles = $db->select($query_article);
  $article = $articles[0];
  $img1 = setTextToImg($article['name'],$article['pic_link'],'Gora-Free.ttf',$article['out_text']);

  header('Content-Type: image/png');
  imagepng($img1);
  
  imagedestroy($image_t);
  

}
