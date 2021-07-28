<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="StyleSheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">




	<title>First site</title>
</head>

<body>
	<div class="wrapper1">


		<header id="header" class="header lock-padding">
			<div class="container">
				<img class="logo animated fadeInDown" src="img/logo.png" alt="logo">
				<div class="wrapper">
					<div id="top" class="offer animated fadeInLeft">
						<h1 class="title">Отправься вместе<br> с нами в путешествие <br><span>мечты!</span></h1>
						<p class="intro">
							Незабываемы места и локации, лучшие гиды и интересные программы = лучший отпуск в твоей жизни. Присоединяйся к нам. Нас не остановить!
						</p>
						<a id="btn" class="dream" href="#ticket">
							Двигаться к мечте!
						</a>
					</div>
					<img class="picture animated fadeInRight" src="img/picture.png" alt="">
				</div>
			</div>
		</header>
		<section id="future" class="future">
			<div class="container">
				<h2 class="section-title animated">Выбирай подходящий тариф</h2>
				<div class="moments">
					<div class="life ">
						<img src="img/free-time.png" alt="">
						<h3 class="life-title">Эконом</h3>
						<p class="life-text">Отель на второй линии от берега</p>
						<p class="life-text">Питание 2 раза в день, шведский стол, десерты для детей</p>
						<p class="life-text">Любые экскурсии</p>
						<p class="life-text cost">От 40.000₽</p>
					</div>
					<div class="life travels animated">
						<img src="img/travel.png" alt="">
						<h3 class="life-title">Стандарт</h3>
						<p class="life-text">Отель на первой линии от берега</p>
						<p class="life-text">Питание 3 раза в день, шведский стол, бесплатные напитки на всей территории отеля</p>
						<p class="life-text">Любые экскурсии</p>
						<p class="life-text cost">От 80.000₽</p>
					</div>
					<div class="life worthit">
						<img src="img/worth.png" alt="">
						<h3 class="life-title">Все включено</h3>
						<p class="life-text">Отель на первой линии от берега</p>
						<p class="life-text">Питание 3 раза в день, шведский стол, бесплатные напитки и десерты на всей территории отеля</p>
						<p class="life-text">Личный гид</p>
						<p class="life-text cost">От 110.000₽</p>
					</div>
				</div>
			</div>
		</section>
		<section id="ticket" class="ticket">
			<div class="container">
				<h2 class="section-title">Хотите путешествовать с нами?</h2>
				<p class="subtitle">Заполните форму и мы подберем для вас подходящий тариф!</p>

				<form id = 'form' action="php/func.php" class="form" method="post">
					<input class="input" id="name" type="text" name="name" placeholder="Имя" required>
					<input class="input" id="email" type="email" name="email" placeholder="E-mail" rrequired>
					<input class="input" pattern="+7-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" id="phone" type="phone" name="phone" placeholder="Телефон" required>
					<input class="input" id="place" type="text" name="place" placeholder="Куда я полечу в ближайшее время?" required>
					<button type="submit" class=" dream dreamto popup-link" id="modal" >
						В отпуск!
					</button>
				</form>
			</div>
		</section>

		<footer id="footer" class="footer">
			<div class="container">
				<p class="credits">
					© TogoUp with us
				</p>
			</div>
		</footer>

	</div>


	<div id="popup" class="popup">
		<div class="popup-body">
			<div class="popup-content">
				<div class="popup-text">Ваши данные успешно отправлены!</div>
				<button href="#header" class="popup-close close-popup"><a href="" class="popup-button">Закрыть</a></button>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>





