<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{'/css/main.css'}}">

 <div class="back"><a href="{{ url('/') }}">Назад</a></div>

  <div class="back"><a href="{{ url('/3') }}">Назад</a></div>
  <div class="next"><a href="{{ url('/5') }}">Дальше</a></div>

 <div class="task">
 	<h1>4) Как вычислить остаток от деления 10/3?</h1>
 </div>

 <div class="answer">

 	<div class="code">
 		<figure>
 		<img src="/img/4.png">
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		</figure>
 	</div>


 	<figure>
 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
 	<div class="content"> 
 		<div> <? echo "Остаток от деления 10/3= " .(10 % 3)."\n" ; 
 		?> 
 	</div>
 	</figure>
 </div>