<?php
$arrContextOptions=array(
   "ssl"=>array(
   "verify_peer"=>false,
   "verify_peer_name"=>false,
   ),
   );
function Weather($p1, $p2, $p3){
    $num1 = strpos($p1, $p2);
    if($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, stripos($num2, $p3)));
}


$homepage = file_get_contents('https://world-weather.ru/pogoda/russia/krasnodar/',false, stream_context_create($arrContextOptions));
$now = Weather($homepage, '<div id="weather-now-number">', '<span>°</span>');
$night = Weather($homepage, "<td class='weather-day'>Ночь</td><td class='weather-temperature'>", '</span>');
$night = substr($night, 8);
$morning = Weather($homepage, "</td></tr><tr class='morning'><td class='weather-day'>Утро</td><td class='weather-temperature'>", '</span>');
$morning = substr($morning, 8);
$day = Weather($homepage, "</td></tr><tr class='day'><td class='weather-day'>День</td><td class='weather-temperature'>", '</span>');
$day = substr($day, 8);
$even = Weather($homepage, "</td></tr><tr class='evening'><td class='weather-day'>Вечер</td><td class='weather-temperature'>", '</span>');
$even = substr($even, 10);
$homepage1 = file_get_contents('https://sinoptik.com.ru/погода-краснодар',false, stream_context_create($arrContextOptions));
$pogoda = Weather($homepage1, '<div class="weather__article_description-text">', '</div>');



$fish = [];
$ball = [];
$fishes = array("окунь"=>19, 
                "судак"=>15,
                "плотва"=>12,
                "лещ"=>19,
                "карась"=>24,
                "карп"=>25,
                "сом"=>24,
                "щука"=>17,
                "форель"=>11,
                "налим"=>6,
                "елец"=>15,
                "линь"=>20
               );


foreach($fishes as $f => $v){
    if(($v >= $now - 1) and ($v <= $now + 1) || ($v == $now)){
       array_unshift($ball, "Хороший");
       array_unshift($fish, $f);
    }
    if((($v > $now - 10) and ($v < $now)) || (($v > $now) and ($v < $now + 5)))  {
        array_unshift($ball, "Средний");
        array_unshift($fish, $f);
     }
     if((($v > $now - 11) and ($v < $now - 10)) || (($v > $now + 4) and ($v < $now + 7)))  {
        array_unshift($ball, "Плохой");
        array_unshift($fish, $f);
     }
}




?>