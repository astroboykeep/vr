<?php

if (isset($_POST['btn_comm'])) {
  if(isset($_POST['title_comm']) && isset($_POST['content_comm']) && isset($_POST['id_auth'])){


  // Переменные с формы
  $name_comm = $_POST['title_coom'];
  $text_comm = $_POST['content_comm'];
  $id_auth = $_POST['id_auth'];
 
  // Параметры для подключения
  $db_host = "localhost"; 
  $db_user = "root"; // Логин БД
  $db_password = ""; // Пароль БД
  $db_base = 'video'; // Имя БД
  $db_table = "comm"; // Имя Таблицы БД
  
  // Подключение к базе данных
  $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

  // Если есть ошибка соединения, выводим её и убиваем подключение
  if ($mysqli->connect_error) {
      die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }
  
  $result = $mysqli->query("INSERT INTO ".$db_table." (name_comm,text_comm,id_auth) VALUES ('$name_comm','$text_comm','$id_auth')");

  header('Location: index.php');

  } 
    
}
?>