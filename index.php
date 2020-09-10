<?php
	include'forecast.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Помощник рыболова в Краснодарском крае</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://api-maps.yandex.ru/2.1/?apikey=7f56b137-7251-4056-a73d-19dce90ddc46&lang=ru_RU" type="text/javascript">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
	<link rel="icon" href="./images/ico.ico" type="image/x-icon">
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
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="z-index: 100;">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Врыбалке.ru</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Совет рыбакам</a></li>
						<li class="nav-item"><a href="about.html" class="nav-link">Способы ловли</a></li>
	          <li class="nav-item"><a href="classes.html" class="nav-link">Приманки и прикормки</a></li>
	          <li class="nav-item"><a href="trainers.html" class="nav-link">Снасти</a></li>
			  <li class="nav-item"><a href="pricing.php" class="nav-link">Видео</a></li>
			  
	          
	         
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->


    <section class="hero-wrap js-fullheight">
      <div class="overlay" style="background-image: url(images/riba1.jpg);" data-stellar-background-ratio="0.5"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
        	<h3 class="v">
        		<a href="pricing.php" style="color: red;">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="icon-play"></span>
        			</div>
        			 <br>Смотреть ваши видео</a>
        	</h3>
          <div class="col-md-12 text-center ftco-animate">
            <h1 class="mt-5" style="background-image: url(images/riba.jpg);" data-stellar-background-ratio="0.5">Помощник<br>рыболова</h1>
            <h2><span style="margin-left: 5px; color: black; font-weight: 900; font-size:15px;">В Краснодарском крае</span></h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-3">Совет рыбакам</h2>
             </div>
        </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 img img-2 order-md-last" style='background-image: url(images/bg_21.jpg);'>
    				
    			</div>
    			<div class="col-md-6 py-5">
    				<div class="program d-flex ftco-animate">
							<div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
								<span>1</span>
							</div>
							<div class="text ml-5 mr-lg-4 text-lg-right">
								<h3>Парфюмерия</h3>
								<p>Не стоит перед выездом к водоему пользоваться парфюмерией, чтобы запах не впитался в наживку и приманку. Рыбы чувствительны ко многим запахам, и ваш аромат ей может не понравиться. Так же она не терпит запах табака, поэтому курильщикам стоит вымыть руки прежде чем насаживать приманку. </p>
							</div>
  					</div>
  					<div class="program d-flex ftco-animate">
							<div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
								<span>2</span>
							</div>
							<div class="text ml-5 mr-lg-4 text-lg-right">
								<h3>Маскировка</h3>
								<p>Каким бы способом вы не рыбачили, на открытой воде необходима маскировка. Яркие расцветки одежды, которые рыба способна заметить издалека, могут отпугнуть ее. Поэтому камуфляж будет вполне уместен. </p>
							</div>
  					</div>
  					<div class="program d-flex ftco-animate">
							<div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
								<span>3</span>
							</div>
							<div class="text ml-5 mr-lg-4 text-lg-right">
								<h3>Инструменты</h3>
								<p>Не оставляйте в машине или на берегу инструменты (багор, подсак), которые помогут вытащить крупную рыбину из воды. Иногда все решают минуты, ища нужный предмет, можно потерять драгоценное время и улов будет потерян. Все необходимые вещи должны быть под рукой. </p>
							</div>
  					</div>
  					<div class="program d-flex ftco-animate">
							<div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
								<span>4</span>
							</div>
							<div class="text ml-5 mr-lg-4 text-lg-right">
								<h3>Тишина</h3>
								<p>Во время лова вести себя нужно тихо. Тишина на воде даст возможность поймать рыбу, на которую вы даже не рассчитывали.</p>
							</div>
  					</div>
  					<div class="program d-flex ftco-animate">
							<div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
								<span>5</span>
							</div>
							<div class="text ml-5 mr-lg-4 text-lg-right">
								<h3>Приманка</h3>
								<p>Чтобы приманка не слетала при забросе, на крючок можно одеть пружинку от зажигалки или шариковой ручки.</p>
							</div>
  					</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-3">Лучшие места для рыбной ловли</h2>
            </div>
        </div>
    		<div class="row no-gutters">
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img" style="background-image: url(images/kuban.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Рыбалка на реке Кубань</span>
	    					<p>Лучший клев на реке Кубань в низовьях реки. Здесь водятся хищные рыбы - это сазаны, щуки, кефаль, окуни, толстолобики, карпы, плотва и кефаль. Если поехать на донные перекаты, то можно выловить жереха или голавли.</p>
	    					
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img" style="background-image: url(images/liman-bash.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Лиман Баштовый</span>
	    					<p>Рыбалка в лимане Баштовом славится большими уловами, о чём хорошо осведомлены рыболовы, проживающие в самых дальних регионах страны. Привлекает их и обилие разнообразных представителей ихтиофауны, как хищных, так и мирных, в числе: белого амура, карпа, карася, сазана, сома, судака, толстолобика, леща, достигающих довольно внушительных размеров.</p>
							
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img order-xl-last" style="background-image: url(images/eliza.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Рыбалка в Елизаветке</span>
	    					<p>Щука, окунь, линь, лещ, карп, карась… Опытный рыбак уйдет домой с полным ведром добычи. В этом месте можно использовать разные виды ловли: на донку, на воблер, на блесну, жерлицы и болонский (поплавочная снасть), поэтому даже новички с минимальным снаряжением сумеют выловить больше, чем одного карасика.</p>	    					
	    					
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img order-xl-last" style="background-image: url(images/iman-ahta.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Лиман Ахтанизовский</span>
	    					<p>А вот лиман Ахтанизовский, вполне можно назвать легендой в разделе под общим названием «рыбалка в Темрюкском районе». Без преувеличения, это благодатное место для любителей активного отдыха, подобного рода, главным образом потому, что в местном водоёме, как ни в одном другом в пределах Краснодарского края, водится множество самых разнообразных видов рыбы.</p>
							
						</div>
	    			</div>
    			</div>
    		</div>
    	</div>
    </section>
	
    <section class="ftco-section testimony-section">
	<h2>ПОГОДА В КРАСНОДАРСКОМ КРАЕ</h2>
		<div class="pogoda">
			<div class="temp">
				<p>Сейчас:</br>
				<? echo date( "H:i" );?></p>							
			</div>
			<div class="night">
				<p style="margin-bottom: 0;">Ночь</p>
				<p style="margin-bottom: 0;"><?php echo $night1; ?></p>
			</div>
			<div class="morning">
				<p style="margin-bottom: 0;">Утро</p>
			</div>
			<div class="day">
				<p style="margin-bottom: 0;">День</p>
			</div>
			<div class="even">
				<p style="margin-bottom: 0;">Вечер</p>
			</div>
			<div class="nday" >
				<p style="margin-bottom: 0;"><? echo $night; ?>C</p>			
			</div>
			<div class="mday">
				<p style="margin-bottom: 0;"><? echo $morning; ?>C</p>			
			</div>
			<div class="dday">
				<p style="margin-bottom: 0;"><? echo $day; ?>C</p>			
			</div>
			<div class="eday">
				<p style="margin-bottom: 0;"><? echo $even; ?>C</p>			
			</div>
			<div class="temp_seg ">
				<p><? echo $now; ?>°C</p>					
			</div>

			<div class="des">
				<h5>Подробнее</h5>
					<p><?php echo Weather($homepage, '<em class="defSet-close" data-block-num="2"></em><span class="dw-into">', '<span id="open-desc-weather">'); ?>
					<?php echo Weather($homepage, '</span><br class="wwbr">', ' <span id="close-desc-weather">'); echo " ". $pogoda; ?>				
					</p>			
			</div>
			
		</div>
		<h2>ПРОГНОЗ КЛЁВА</h2>
		<div class="forecast" style='height:80px'>
			<div class="ylov">
				
				<table>
					<tr>
					<?php foreach($ball as $w){?>
					<td style="background:<?if($w == "Плохой"){echo "#ff0000";}
					else if($w == "Хороший"){echo "#008000";}
					else if($w == "Средний"){echo "#ff8c00";}?>;" class="td-ball"><?	echo $w?></td><?}?>
					</tr>
					<tr>
					<?php foreach($fish as $e){?>
					<td class="td-fish"><? echo $e?></td><?}?>	
					</tr>				
				</table>
			</div>
		</div>
		 
		<div id="mapp" style="width: 100%; height: 500px; z-index: 1;"></div>
      
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
        
            <h2 class="mb-3">Снаряжение и техника</h2>
            <p>Независимо от того, что имеет большее значение — процесс рыбной ловли или ее результат, отправляющимся на реку необходимо прежде всего подобрать снаряжение. </p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch mb-0">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/ruk.jpg');">
              </a>
              <div class="text d-flex">
              	<div class="meta text-center">
              		<span class="day">01</span>
              	
              	</div>
              	<div class="desc">
	                <h3 class="heading mt-2"><a href="#">Рюкзак</a></h3>
	                <p>Можно приобрести специальный рюкзак или обычный, туристический. Главное, чтобы он был прочным, вместительным, с качественной фурнитурой и водоотталкивающими свойствами.</p>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch mb-0">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/odejda.jpg');">
              </a>
              <div class="text  d-flex">
              	<div class="meta text-center">
              		<span class="day">02</span>
              		
              	</div>
              	<div class="desc">
	                <h3 class="heading mt-2"><a href="#">Одежда и обувь</a></h3>
	                <p>Для рыбной ловли летом рекомендуется приобрести непромокаемые сапоги, поскольку при выуживании рыбы нередко приходиться контактировать с водой. А для зимы необходима обувь, которая не будет сыреть, а останется теплой и сухой. </p>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch mb-0">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/sumka.jpg');">
              </a>
              <div class="text  d-flex">
              	<div class="meta text-center">
              		<span class="day">03</span>
              		
              	</div>
              	<div class="desc">
	                <h3 class="heading mt-2"><a href="#">Рыболовная сумка</a></h3>
	                <p>Ткань должна быть прочной и непромокаемой.
						Фурнитуру желательно выбирать пластиковую, поскольку металлические молнии и застежки ржавеют от контакта с водой.
						Наличие карманов и крепежей для рыболовного инвентаря.</p>
	              </div>
              </div>
            </div>
		  </div>
		  <div class="col-lg-4 d-flex ftco-animate">
			<div class="blog-entry align-self-stretch mb-0">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/stul.jpg');">
			</a>
			<div class="text  d-flex">
				<div class="meta text-center">
					<span class="day">04</span>
					
				</div>
				<div class="desc">
				  <h3 class="heading mt-2"><a href="#">Складной стул</a></h3>
				  <p>Складные стулья или кресла обычно изготавливаются из непромокаемого материала, который легко чистить. Они выдерживают нагрузку от 80 кг и выше. Ножки снабжаются опорами, а высоту их можно регулировать. Лучше выбирать кресла с высокими спинками — они дают возможность расслабить мышцы спины.</p>
				</div>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 d-flex ftco-animate">
			<div class="blog-entry align-self-stretch mb-0">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/stolik.jpg');">
			</a>
			<div class="text  d-flex">
				<div class="meta text-center">
					<span class="day">05</span>
					
				</div>
				<div class="desc">
				  <h3 class="heading mt-2"><a href="#">Столик</a></h3>
				  <p>Без складного стола невозможно создать нормальные условия не только для приема пищи, но и для приготовления оснасток. Он может быть туристическим, но профессионалы рекомендуют приобретать специализированный. Его достоинства заключаются в наличии механизма регулировки ножек по высоте и специальном бортике вдоль кромки, предотвращающем сдувание ветром мелких предметов.</p>
				</div>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 d-flex ftco-animate">
			<div class="blog-entry align-self-stretch mb-0">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/gaz.jpg');">
			</a>
			<div class="text d-flex">
				<div class="meta text-center">
					<span class="day">06</span>
					
				</div>
				<div class="desc">
				  <h3 class="heading mt-2"><a href="#">Газовая горелка</a></h3>
				  <p>Оптимальным вариантом являются горелки, соединяемые шлангом с баллоном. Они удобны в использовании и не слишком габаритны. Еще одним достоинством выступает экран для защиты от ветра, а также наличие пьезоподжига, позволяющего обходиться без спичек.</p>
				</div>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 d-flex ftco-animate">
			<div class="blog-entry align-self-stretch mb-0">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/fonarik.jpg');">
			</a>
			<div class="text d-flex">
				<div class="meta text-center">
					<span class="day">07</span>
					
				</div>
				<div class="desc">
				  <h3 class="heading mt-2"><a href="#">Фонарик</a></h3>
				  <p>Поскольку ловля рыбы может продолжаться и в темное время, без фонарика обойтись сложно. Удобнее всего использовать налобный вариант.</p>
				</div>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 d-flex ftco-animate">
			<div class="blog-entry align-self-stretch mb-0">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/udochka.jpg');">
			</a>
			<div class="text d-flex">
				<div class="meta text-center">
					<span class="day">08</span>
					
				</div>
				<div class="desc">
				  <h3 class="heading mt-2"><a href="#">Удочка</a></h3>
				  <p>Поплавочная удочка - предназначена для ловли рыбы в открытом водоеме. <br>				  
				  Донная удочка - предназначена для ловли рыбы на течении. <br>
				  Спиннинг - необходим при ловле хищных рыб, она позволяет осуществлять заброс на большие расстояния. <br>
				  Нахлыстовая удочка - Используется для выуживания рыбы на дальних расстояниях. </p>
				</div>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 d-flex ftco-animate text-size">
			<div class="blog-entry align-self-stretch mb-0">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/sadok.jpg');">
			</a>
			<div class="text d-flex">
				<div class="meta text-center">
					<span class="day">09</span>
					
				</div>
				<div class="desc">
				  <h3 class="heading mt-2"><a href="#">Садок</a></h3>
				  <p>Пойманную рыбу нужно где-то хранить, особенно, если рыбалка длится несколько дней. Для этого и предназначен садок.</p>
				</div>
			</div>
		  </div>
		</div>

	</section>	
		<footer>
			
			<div class="row">
			  <div class="col-md-12 text-center">
	
				<p>
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">SergeyShvetsov</a>
	  </p>
			  </div>
			</div>
		  </div>
		</footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>
	var myMap;

	ymaps.ready(init);

	function init () {
		myMap = new ymaps.Map('mapp', {
			// Краснодар
			center: [45.03547, 38.975313],
			zoom: 10
		}, {
			searchControlProvider: 'yandex#search'
		});

		myMap.behaviors
			// Отключаем часть включенных по умолчанию поведений:
			//  - drag - перемещение карты при нажатой левой кнопки мыши;
			//  - magnifier.rightButton - увеличение области, выделенной правой кнопкой мыши.        
			// Включаем линейку.
			.enable('ruler');

			// Изменяем свойство поведения с помощью опции:
			// изменение масштаба колесом прокрутки будет происходить медленно,
			// на 1/2 уровня масштабирования в секунду.
			myMap.options.set('scrollZoomSpeed', 0.5);
	}
	</script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8vbDn50bUTBwrUMcfagWkAHRxR4xVRc4&callback=initMap"
async defer></script>
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
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>