<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{'/css/main.css'}}">

<?php 

$student =28;
$per =75;
$sport = $student/100*$per;
$student = $sport/$per*100;

?>

 <div class="back"><a href="{{ url('/') }}">На главную</a></div>
 <div class="next"><a href="{{ url('/2') }}">Дальше</a></div>

 <div class="task">
 	<h1>1) Написать алгоритм решения задачи:</h1>
 	<p>В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе
занимаются спортом и сколько всего учеников в классе?</p>
 </div>

 <div class="answer">

 	<div class="code">
 		<figure>
 		<img src="/img/1.png">
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		</figure>
 	</div>


 	<figure>
 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
 	<div class="content"> 
 		<? echo (28/100*75)." Ученик занимается спортом";?> <br>
 		<? echo (21/75*100)." Учеников в классе"; ?></div>
 	</figure>
 	
	<div class="code">
 		<figure>
 		<img src="/img/1(2).png">
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		</figure>
 	</div>

 	<figure>
 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
 	<div class="content"><? echo $sport." Ученик занимается спортом"; ?><br> 
 		<? echo $student." Учеников в классе"; ?></div>
 	</figure>
 </div>