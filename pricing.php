<?php
// $pdo = new PDO("mysql:host=localhost;dbname=video","root", "");
// $statement = $pdo->prepare("SELECT * FROM posts ORDER BY id DESC ");
// $statement->execute();
// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
// $pdoc = new PDO("mysql:host=localhost;dbname=comm","root", "");
// $statementc = $pdoc->prepare("SELECT * FROM comm ORDER BY id DESC ");
// $statementc->execute();
// $comm = $statementc->fetchAll(PDO::FETCH_ASSOC);


// if (isset($_POST['btn_comm'])) {
//   if(isset($_POST['title_comm']) && isset($_POST['content_comm']) && isset($_POST['id_auth'])){


//   // Переменные с формы
//   $name_comm = $_POST['title_coom'];
//   $text_comm = $_POST['content_comm'];
//   $id_auth = $_POST['id_auth'];
 
//   // Параметры для подключения
//   $db_host = "localhost"; 
//   $db_user = "root"; // Логин БД
//   $db_password = ""; // Пароль БД
//   $db_base = 'comm'; // Имя БД
//   $db_table = "comm"; // Имя Таблицы БД
  
//   // Подключение к базе данных
//   $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

//   // Если есть ошибка соединения, выводим её и убиваем подключение
//   if ($mysqli->connect_error) {
//       die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
//   }
  
//   $result = $mysqli->query("INSERT INTO ".$db_table." (name_comm,text_comm,id_auth) VALUES ('$name_comm','$text_comm','$id_auth')");

//   header('Location: pricing.php');

//   } 
    
// }


// $file = @file("count.txt");
// $count = @implode("", $file);
// $count++;
// $myfile = fopen("count.txt","w");
// fputs($myfile,$count);
// fclose($myfile);

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
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Врыбалке.ru</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Совет рыбакам</a></li>
						<li class="nav-item"><a href="about.html" class="nav-link">Способы ловли</a></li>
	          <li class="nav-item"><a href="classes.html" class="nav-link">Приманки и прикормки</a></li>
	          <li class="nav-item"><a href="trainers.html" class="nav-link">Снасти</a></li>
	          <li class="nav-item active"><a href="pricing.php" class="nav-link">Видео</a></li>
	          
	         
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->


    <section class="hero-wrap js-fullheight">
      <div class="overlay" style="background-image: url(images/bg-video.jpg);" data-stellar-background-ratio="0.5"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
          <div class="col-md-12 text-center ftco-animate">
            <h1 class="mb-3 bread" style="background-image: url(images/white.jpg);" data-stellar-background-ratio="0.5">Ваши видео</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Совет рыбакам.</a></span> <span>Ваши видео</span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
        
            <h2 class="mb-3">Здесь публикуются ваши видео</h2>
              <a style="background-color: #dc3545; width: 500px; margin: 0 auto; padding: 10px;
            border-radius: 50px; color: #fff; text-transform:uppercase;" href="add_video.php">Добавить видео</a>
           
          </div>
        </div>
          <div class="video_items">
              <?php
                foreach($posts as $post){
                if($post['video'] !== ""){ ?>
              
              
              <div class="video_item">
                <div class="pricing-wrap ftco-animate img " style="height: 300px; width: 330px; margin: 0 auto;
                   border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                  <video width="330" height="300" controls="controls">
                  <source src="video/<?php echo $post['video'];?>">
                  </video>
                  </div>
                
              </div>

              <div class="video_desc">
                <h5 style="text-align:center; color:#000;"><?php echo $post['title'];?></h5>
                <p style="margin-left:10px; color:#000;" ><?php echo $post['content'];?></p>
                <hr>
                <i class="fa fa-eye fa-2x" aria-hidden="true" id="<?php echo $post['id'];?>"><?= $count;?></i>
              

                </div>
                <?
                  }
                  }
                  ?>
                    
          </div>         
    	</div>
    </section>
   
    <footer>
      <div class="row" style="margin: 0 ;">
        <div class="col-md-12 text-center">

          <p style="padding: 7em 0;">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">SergeyShvetsov</a>
        </p>
        </div>
      </div>
    </div>
  </footer>
 

  

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