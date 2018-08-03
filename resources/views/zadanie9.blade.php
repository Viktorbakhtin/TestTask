
<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{'/css/main.css'}}">
<div class="back"><a href="{{ url('/8') }}">Назад</a></div>
<div class="next"><a href="{{ url('/') }}">На главную</a></div>
<div class="task">
 	<h1>9) Что выведет следующий код на JavaScript и почему:</h1>
	<p> for( var i =0; i < 10; i++){setTimeout(function () {console.log(i);}, 100);}</p>
 </div>
 <div class="answer">
 	<figure>
 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
 	<div class="content"> 
 		<div>
 			<p>Данный код выведет просто число  10

Цикл for закончит свою работу до того, как будет вызвана функция console.log, в i будет под конец содержаться 10</p>
 	</div>
 	</figure>
 </div>




