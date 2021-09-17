<?php
	header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Оформление заявки</title>
		<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div id="all">
			<div id="header">
				<div id="menu">
					<div id="adress">
						<p class="logo_text"><img class="logo_img" src="img/phone.png" alt="Телефон" width="24" height="24">(3519) 43-96-93</p>
						<p class="logo_text"><img class="logo_img" src="img/office.png" alt="Офис" width="24" height="24">Завенягина 1/2, 3 эт.</p>
						<p class="logo_text"><img class="logo_img" src="img/clock.png" alt="График работы" width="24" height="24">Пн-Пт: 9:00 - 18:00</p>
					</div>
					<div id="home" class="navigation">
						<a href="index.html"><img class="grow" src="img/home.png" alt="Домашняя страница" width="48" height="48"></a><br>
						<a href="index.html">Домашняя страница</a>
					</div>
					<div id="prod" class="navigation">
						<a href="receivers.html"><img class="grow" src="img/receivers.png" alt="Приставки" width="48" height="48"></a><br>
						<a href="receivers.html">ТВ-приставки</a>
					</div>
					<div id="help" class="navigation">
						<a href="help.html"><img class="grow" src="img/help.png" alt="Справочная информация" width="48" height="48"></a><br>
						<a href="help.html">Вопросы и ответы</a>
					</div>
					<div id="sent" class="navigation">
						<a href="request.html"><img class="grow" src="img/note.png" alt="Заявка" width="48" height="48"></a><br>
						<a href="request.html">Оставить заявку</a>
					</div>
					<div id="office" class="navigation">
						<a href="contact.html"><img class="grow" src="img/telephone.png" alt="Офис" width="48" height="48"></a><br>
						<a href="contact.html">Контакты</a>
					</div>
				</div>
			</div>
			<div id="main">
				<h1>Спасибо за заполнение формы</h1>
				<h2>Заявка принята</h2>
				<?php
					$io = $_POST['io'];
					$phone_number = $_POST['phone_number'];
					$adress = $_POST['adress'];
					$antenna = $_POST['antenna'];
					$model = $_POST['model'];
					$to = 'd-color74@yandex.ru';
					$subject = 'Новая заявка';
					$msg = "Имя и отчество: $io\nНомер телефона: $phone_number\nАдрес: $adress\nАнтенна: $antenna\nМодель приставки: $model";
					
					mail($to, $subject, $msg);
					
					echo 'Ваше имя и отчество: ' . $io . '<br>';
					echo 'Телефонный номер: ' . $phone_number . '<br>';
					echo 'Адрес: ' . $adress . '<br>';
					echo 'Антенна: ' . $antenna . '<br>';
					echo 'Модель приставки: ' . $model;
				?>
				<p>Мы свяжемся с вами в ближайшее время</p>
				<div id="footer">
					<p>
						Не является публичной офертой. Цифровой сигнал распространяется по всей территории РФ бесплатно, согласно Указу Президента РФ № 715 от
						24 июня 2009 года "Об общедоступных телеканалах и радиоканалах". Оплата производится только за эфирную тв-приставку, необходимую для приема
						этого сигнала. Далее пользователь получает возможность смотреть цифровое телевидение без циклической абонентской платы.
					</p>
				</div>
			</div>
		</div>
		