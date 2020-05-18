<?
  require_once "Db.php";
   $db = DataBase::getDB();
      $name = $db->escape($_POST['name_']);
      $pic= $db->escape($_POST['pik_link']);
      $text = $db->escape($_POST['out_text']);
      $link = $db->escape($_POST['link']);
      $query_article = "SELECT * FROM graph";
      $article = $db->select($query_article);
  ?>

<!DOCTYPE html>
<html lang="ru">
<head>
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
          <form name="creat_image" action="edit.php" method="GET">
              <input type="hidden" name="id" value="-1">
            <button type="submit" class="btn btn-primary my-4">Submit</button>
          </form>
        <table class="table" border="1">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Низвание</th>
                <th scope="col">Текст</th>
                <th scope="col">Ссылка</th>
                <th scope="col">Фон</th>
                <th scope="col">*</th>
              </tr>
            </thead>
            <tbody>
              <?foreach($article as $for):?>
              <tr>
                <th scope="row"><?=$for['id']?></th>
                <td><?=$for['name']?></td>
                <td><?=$for['out_text']?></td>
                <td > <img style="max-height:200px; max-width: 300px;" src="img/<?=$for['pic_link']?>" alt=""></td>
                <td > <img style="max-height:200px; max-width: 300px;" src="img/<?=$for['link']?>" alt=""></td>
                <td><a href="edit.php?id=<?=$for['id']?>">Ред</a><a href="del.php?id=<?=$for['id']?>"> Удалить</a></td>
              </tr>
              <?endforeach?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>