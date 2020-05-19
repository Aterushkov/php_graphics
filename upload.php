<!DOCTYPE html>
<html lang="ru">
<head>
  <?
 if(isset($_FILES['bgimg'])){
    if($_FILES['bgimg']['type'] != 'image/jpeg'){
      echo "Для фона загрузите jpeg";
    }else{
      $bgimg = $_FILES['bgimg']['name'];
      move_uploaded_file($_FILES['bgimg']['tmp_name'], 'img/'.$bgimg);
      echo "файл загружен";
      echo "<br/>";
      echo "Хотите <a href='/'>венуться</a> к списку?";

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
          <form name="upload_file"  method="POST" enctype="multipart/form-data">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="bgimg">
              <label class="custom-file-label" for="inputGroupFile04">Выберите файл</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Загрузить</button>
                </div>
             </div>   
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?
exit;
?>