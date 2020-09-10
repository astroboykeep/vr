<?php

$dat = date('d.m.y - H:i');

if (isset($_POST['btn'])) {
  if(isset($_POST['title']) && isset($_POST['content'])  && ($_FILES['file']['name'] !== '')){

  move_uploaded_file($_FILES['tmp_name'], "uploads/" . $filename);

  // Переменные с формы
  $name = $_POST['title'];
  $text = $_POST['content'];
  $vname = $_FILES['file']['name'];
  $vtmp = $_FILES['file']['tmp_name'];
  $filename = $vname;
  move_uploaded_file($vtmp, "video/" . $vname);
  // Параметры для подключения
  $db_host = "localhost"; 
  $db_user = "root"; // Логин БД
  $db_password = ""; // Пароль БД
  $db_base = 'video'; // Имя БД
  $db_table = "posts"; // Имя Таблицы БД
  
  // Подключение к базе данных
  $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

  // Если есть ошибка соединения, выводим её и убиваем подключение
  if ($mysqli->connect_error) {
      die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }
  
  $result = $mysqli->query("INSERT INTO ".$db_table." (title,content,video) VALUES ('$name','$text','$filename')");

  header('Location: pricing.php');

  } else
  echo "<h2 class='errorr'>Выберете файл</h2>";
    
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Помощник рыболова в Краснодарском крае</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section class="add">
    <div class="add-video">
      <h2>Добавление видео</h2>
    <form class="form" action="add_video.php" method="POST" enctype="multipart/form-data">
        <p>Название:</p><br>
        <input class="input1" type="text" name="title" required><br>
        <p>Описание видео:</p><br>
        <textarea class="input2" name="content" required></textarea>
        <input class="video" type="file" name="file" style="border-radius: 15px;">
        <input class="btn" type="submit" name="btn" value="ДОБАВИТЬ ВИДЕО" style="border-radius: 15px;" required>
        <a class="btn btn-a" href="pricing.php">НАЗАД</a>
      </form>    
    </div>     
    </section>
    
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>