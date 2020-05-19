<?
  require_once "Db.php";
      $db = DataBase::getDB();
      $ids = $db->escape($_GET['id']);
     
     
      if(isset($_POST['DelOk'])){
        $ids = $db->escape($_POST['rec_id']);
        $query_send = "DELETE FROM graph WHERE id = '{$ids}'";
        $db->query($query_send);
        echo "Вы успешно удалили файл";
        echo "<br/>";
        echo "Хотите <a href='/'>венуться</a> к списку?";
        
      }
      if(isset($_POST['cancel'])){
        header('Location: /');
      }
      
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
          <form name="edit_image" action="del.php" method="POST">
            <input type="hidden" name="rec_id" value="<?=$ids?>">
            <button type="submit" name="DelOk" class="btn btn-primary my-4">Удалить</button>
            <button type="submit" name="cancel"  class="btn btn-primary my-4">Отмена</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?
$user_id = mysqli_fetch_assoc($_GET['user']);
print_r($user_id );
print_r($user);
?>