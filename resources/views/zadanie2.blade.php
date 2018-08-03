<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{'/css/main.css'}}">
<?php 
$str = 'This server has 386 GB RAM and 5000 GB storage';
$matches = array_filter(explode(' ', $str), function($item) { return is_numeric($item); });
	foreach ($matches as $match) {
	};

 ?>
 <div class="back"><a href="{{ url('/1') }}">Назад</a></div>
 <div class="next"><a href="{{ url('/3') }}">Дальше</a></div>

 <div class="task">
 	<h1>2) Реализовать алгоритм извлечения числовых значений со строки:</h1>
 	<p>This server has 386 GB RAM and 5000 GB storage</p>
 </div>

 <div class="answer">

 	<div class="code">
 		<figure>
 		<img src="/img/2.png">
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		</figure>
 	</div>


 	<figure>
 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
 	<div class="content"> 
 		<div><? 
 		foreach ($matches as $match) {
 			echo $match. "<br>";
	};
 		
 		?> 
 	</div>
 	</figure>
 </div>