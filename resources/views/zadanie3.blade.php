<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{'/css/main.css'}}">
<?php 
$a = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];
/*Помещаем указатель в начало и берем текущий элемент*/
reset($a);
$first = current($a);
 ?>

  <div class="back"><a href="{{ url('/2') }}">Назад</a></div>
  <div class="next"><a href="{{ url('/4') }}">Дальше</a></div>

 <div class="task">
 	<h1>3) ​Как получить первый элемент массива?</h1>
 	<p> ​[2, 3, 56, 65, 56, 44, 34, 45, 3, 5, 35, 345, 3, 5] ​</p>
 </div>

 <div class="answer">

 	<div class="code">
 		<figure>
 		<img src="/img/3.png">
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		</figure>
 	</div>


 	<figure>
 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
 	<div class="content"> 
 		<div>
 		<? echo $first; ?>
 	</div>
 	</figure>
 </div>