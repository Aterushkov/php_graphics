<!DOCTYPE html>
<html lang="ru">
<head>
  <?
  $id = 0;
  
  require_once "Db.php";
   $db = DataBase::getDB();
   if(isset($_GET['id'])){

    $ide = $db->escape($_GET['id']);
    if($ide>0){
      $query_article = "SELECT * FROM graph WHERE id='{$ide}'";
      $articles = $db->select($query_article);
      $article = $articles[0];
    }else{
      $article = [];
      $article['id'] = $ide;
      $article['name'] ='';
      $article['out_text'] =' ';
      $article['link'] =' ';
      $article['pic_link'] =' ';
    }

   }


   if(isset($_POST['save'])){
    if($_POST['id'] < 0){
      $name = $db->escape($_POST['name_']);
      $pic= $db->escape($_POST['pik_link']);
      $text = $db->escape($_POST['out_text']);
      $link = $db->escape($_POST['link']);
      $query_send = "INSERT INTO graph (name,pic_link,out_text,link) VALUES ('$name','$pic','$text','$link')";
      if($db->query($query_send)){
        echo "Запись добавлена";
        echo "<br/>";
        echo "Хотите <a href='/'>венуться</a> к списку?";
      }else{
        echo "Ошибка: ";
      }
     
    }else{
      $id = $db->escape($_POST['id']);
      $name = $db->escape($_POST['name_']);
      $pic= $db->escape($_POST['pik_link']);
      $text = $db->escape($_POST['out_text']);
      $link = $db->escape($_POST['link']);
      $query_send = "UPDATE graph SET name ='$name',pic_link ='$pic',out_text='$text',link='$link' WHERE id='{$id}'";
      if($db->query($query_send)){
        echo "Запись изменена";
        echo "<br/>";
        echo "Хотите <a href='/'>венуться</a> к списку?";
      }else{
        echo "Ошибкаz: ";
        
      }
      
    }
   }
   
    
  ?>
	<meta charset="UTF-8">
  <title>Делаем открытки </title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<header>
  <div class="container " id="about"> 
    <div class="shadow-sm">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
  <body class="first-color">
    <div class="main ">
      <div class="container " id="about"> 
        <div class="shadow-sm">
          <form name="edit_image" action="edit.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Имя записи</label>
              <input type="hidden" name="id" class="form-control"  aria-describedby="emailHelp" value="<?=$article['id']?>">
              <input type="text" name="name_" class="form-control"  aria-describedby="emailHelp" value="<?=$article['name']?>">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Текст</label>
              <input type="text" name="out_text" class="form-control"  aria-describedby="emailHelp" value="<?=$article['out_text']?>">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ссылка</label>
              <input type="text" name="link" class="form-control"  aria-describedby="emailHelp" value="<?=$article['link']?>">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <?
                $imagedirectory = array_diff( scandir($_SERVER['DOCUMENT_ROOT'] . '/img/' ), array('.','..'));
              ?>
              <label for="exampleFormControlSelect2">Example multiple select</label>
              <select multiple class="form-control" name="pik_link">
                  <?foreach ($imagedirectory as $img):?>
                    <?if($img == $article['pic_link']):?>
                    <option value="<?=$img?>" selected="selected"><?=$img?></option>  
                      <?else:?>
                    <option value="<?=$img?>"><?=$img?></option>  
                   <?endif;?>
                  <?endforeach;?>
              </select>
            </div>
            <button type="submit" name="save" class="btn btn-primary my-4">Submit</button>       
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

