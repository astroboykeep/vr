<?php
 
/** Данные для подключения к Базе Данных */

$db_host = "localhost"; 
  $db_user = "root"; // Логин БД
  $db_password = ""; // Пароль БД
  $db_base = 'video'; // Имя БД
  $db_table = "posts"; // Имя Таблицы БД
  
 
/** Подключаемся в Базе Данных */
$pdo = new PDO("mysql:host=localhost;dbname=video","root", "");
$statement = $pdo->prepare("SELECT * FROM posts ORDER BY id DESC ");
$statement->execute();
/** Получаем наш ID статьи из запроса */
$id = intval($_POST['id']);
$count = 0;
$message = '';
$error = true;
 
/** Если нам передали ID то обновляем */
if($id){
    /** Обновляем количество лайков в статье */
    
    $query = $pdo->prepare("UPDATE post SET like_count = like_count+1  WHERE id = :id");
    $query->execute(array(':id'=>$id));
    
    /** Выбираем количество лайков в статье */
    $query = $pdo->prepare("SELECT like_count FROM posts WHERE id = :id");
    $query->execute(array(':id'=>$id));
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $count = isset($result['like_count']) ? $result['like_count']  : 0;
    
    $error = false;
}else{
    /** Если ID пуст - возвращаем ошибку */
    
    $error = true;
    $message = 'Статья не найдена';
}
 
/** Возвращаем ответ скрипту */
 
// Формируем масив данных для отправки
$out = array(
    'error' => $error,
    'message' => $message,
    'count' => $count,
);
 
// Устанавливаем заголовок ответа в формате json
header('Content-Type: text/json; charset=utf-8');
 
// Кодируем данные в формат json и отправляем
echo json_encode($out);
?>