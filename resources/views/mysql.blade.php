<?php 
function selectName(){
	$uuu = DB::table('bids')->select('name')->get();
			foreach ($uuu as $u1) {
				echo "<div class='coll'>".$u1->name."</div>";
			};}
function select_idEvent(){
	$uuu = DB::table('bids')->select('id_event')->get();
			foreach ($uuu as $u1) {
				echo "<div class='coll'>".$u1->id_event."</div>";
			};}
function selectEmail(){
	$uuu = DB::table('bids')->select('email')->get();
			foreach ($uuu as $u1) {
				echo "<div class='coll'>".$u1->email."</div>";
			};}
function selectPrice(){
	$uuu = DB::table('bids')->select('price')->get();
			foreach ($uuu as $u1) {
				echo "<div class='coll'>".$u1->price."</div>";
			};}

function selectEventID(){
	$uuu = DB::table('events')->select('id')->get();
			foreach ($uuu as $u1) {
				echo "<div class='coll'>".$u1->id."</div>";
			};}
function selectCaption(){
	$uuu = DB::table('events')->select('caption')->get();
			foreach ($uuu as $u1) {
				echo "<div class='coll'>".$u1->caption."</div>";
			};}


function orderByPrice() { 	///////////Клиент, который заплатил больше всех
	$priced = DB::table('bids')->select('id_event','name','email', 'price')
							->orderBy('price', 'desc')
							->first();
                foreach ($priced as $priceor) {
				echo $priceor. " ";}
			}

function NoEvent () {                     ////////////Мероприятие без заявок + вывод всех заявок
	$indexes = DB::table('events')->select('id')->count();
	for ($index=1; $index<=$indexes; $index++) {

              	$event_count = DB::table('bids')->select('id_event')->where('id_event', '=', $index)->count();

				if ($event_count==0) {
              	$noevents = DB::table('events')->select('id', 'caption')->where('id', '=', $index)->get();
              	foreach ($noevents as $event_cap) {
              		echo "<div>"."По мероприятию ".$event_cap->caption. " заявок нет"."</div>"."<br>";}
              }

            	if ($event_count>0) {
            	$eventis = DB::table('events')->select('id', 'caption')->where('id', '=', $index)->get();
              	foreach ($eventis as $event_capp) {
              		echo "По мероприятию ".$event_capp->caption." ".$event_count. " заявок"."<br>";}
             }}}

function MoreThree() {     /////////////////////Больше 3 заявок
	$indexes = DB::table('events')->select('id')->count();
	for ($index=0; $index<=$indexes; $index++) {

            $event_count = DB::table('bids')->select('id_event')->where('id_event', '=', $index)->count();

            if ($event_count>3) {
            	$eventis = DB::table('events')->select('id', 'caption')->where('id', '=', $index)->get();

            foreach ($eventis as $event_capp) {
              	echo "Больше 3 заявок у мероприятия ".$event_capp->caption." ".$event_count. " "."<br>";}

             }}
	}

function MoreAll() {$results = DB::select('SELECT l.id_event, count(*) as cnt 
    FROM bids l GROUP BY l.id_event ORDER BY cnt DESC LIMIT 1');
		print_r ($results['0']);
					};
?>

<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{'/css/main.css'}}">
<div class="back"><a href="{{ url('/') }}">Назад</a></div>
<div class="next"><a href="{{ url('/1') }}">Дальше</a></div>

<div>
	<!-- Задание 1 -->
	<div class="task">
 	<h1>1. Сделать скрипты для подготовки базы данных(миграции)</h1></div>

 	<div class="answer">
	 		<figure>
	 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
	 		<img class="img-code" src="/img/DBseed1.png">
	 		</figure>
	 		<figure>
	 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
	 		<img class="img-code"src="/img/DBseed2.png">
	 		</figure>
	 		<figure>
	 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
	 		<img class="img-code"src="/img/DBseed3.png">
	 		</figure>
 	</div>
 	<!-- Вывод строк из базы данных -->
 	<h1 align="center">Вывод строк из базы данных</h1>
 	<div class="tables">
		<div class="table">
			<table>
				<th>Номер <br> события</th>
				<th>Имя</th>
				<th>E-mail</th>
				<th>Цена</th>
					<tr>
						<td><? select_idEvent(); ?></td>
						<td><? selectName(); ?></td>
						<td><? selectEmail(); ?></td>
						<td><? selectPrice(); ?></td>
			</table>
		</div>
		<div class="table">
				<table>
					<th>Номер <br> события</th>
					<th>Событие</th>
						<tr>
							<td><? selectEventID(); ?></td>
							<td><? selectCaption(); ?></td>
						</tr>
				</table>
		</div>
	</div>

	<!-- Задание 2 -->
 	<div class="task">
 		<h1>2. Напишите запрос, который выберет имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)</h1>
 	</div>
 	<div class="answer">
 		<figure>
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		<img class="img-code" src="/img/2zadanie.png">
 		</figure>
	 	<figure>
		 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
		 	<div class="content">
		 		<? orderByPrice(); ?>
		 	</div>
	 	</figure>
 	</div>
 	<!-- Задание 3 -->
 	<div class="task">
 	<h1>3. Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок</h1>
 	</div>
 	<div class="answer">
 		<figure>
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		<img class="img-code" src="/img/3zadanie.png">
 		</figure>
	 	<figure>
	 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
	 	<div class="content"> 
	 		 <? NoEvent (); ?> <div>
	 	</div>
	 	</figure>
 </div>
 	<!-- Задание 4 -->
 	<div class="task">
 	<h1>4. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше трех заявок</h1>
 	</div>
 	<div class="answer">
 		<figure>
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		<img class="img-code" src="/img/4zadanie.png">
 		</figure>
	 	<figure>
	 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
	 	<div class="content">
	 		<? MoreThree(); ?><div>
	 	</div>
	 	</figure>
 	</div>
 	<!-- Задание 5 -->
 	<div class="task">
 	<h1>5. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше всего заявок</h1>
 	</div>
 	<div class="answer">
 		<figure>
 		<figcaption id="code"><strong>Пример кода</strong></figcaption>
 		<img class="img-code" src="/img/5zadanie.png">
 		</figure>
	 	<figure>
	 	<figcaption id="result"><strong>Результат выполнения</strong></figcaption>
	 	<div class="content"> 
	 		<? MoreAll(); ?> <div>
	 	</div>
	 	</figure>
 	</div>
</div>

