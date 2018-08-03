<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{'/css/main.css'}}">
<?php 
$a = [1,2,3,4,5];
$b = 'Hello World';

list($b, $a) = array($a, $b);
 ?>
 <div class="back"><a href="{{ url('/4') }}">Назад</a></div>
 <div class="next"><a href="{{ url('/6') }}">Дальше</a></div>

 <div class="task">
 	<h1>5) Нужно поменять 2 переменные местами без использования третьей:</h1>
 	<p>$а = [1,2,3,4,5]; $b = ‘Hello world’;</p>
 </div>

 <div class="answer">

 	<div class="code">
 		<figure>
 		<img src="/img/5.png">
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		</figure>
 	</div>


 	<figure>
 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
 	<div class="content"> 
 		<div><? echo "переменная a: $a <br/>";
				echo "<br/>";
				echo "переменная b: <br/>";
				print_r($b) ?> 
 	</div>
 	</figure>
 </div>