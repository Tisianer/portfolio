<?php
$connection = mysqli_connect('localhost', 'vh300276_psyhelp', 'Q!moonbe', 'vh300276_listyslyg') OR DIE('Ошибка подключения к базе данных');
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Психологическая помощь</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	
			<!-- Шапка сайта -->
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
			<div class="container-fluid">
				<a href="index.php" class="navbar-brand"><img src="img/logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="index.php" class="nav-link">Главная</a>
						</li>
						<li class="nav-item active" >
							<a href="comanda.php" class="nav-link">Психологи</a>
						</li>
					<?php
						if(empty($_COOKIE['username'])) 
						{
					?>
							<li class="nav-item">
								<a href="vhod.php" class="nav-link">Вход</a>
							</li>
							<li class="nav-item">
								<a href="reg.php" class="nav-link">Регистрация</a>
							</li>
					<?php
						}
						else 
						{
					?>
							<li class="nav-item">
								<a href="exit.php" class="nav-link">Выйти(<?php echo $_COOKIE['username']; ?>)</a>
							</li>
					<?php	
						}
					?>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- Предисловие -->
		<div class="container-fluid">
			<div class="row text-center alert">
				<div class="col-12">
					<h1 class="display-4">Психологи</h1>
				</div>
				<hr>
				<div class="col-12">
					<p class="lead">
					На сегодняшний день у нас работает 6 профессиональных Психологов с опытом в
					различных направлениях (Семейный психолог, Психотерапевт, Гештальт - Практик и т.д.).
					У каждого из них за плечами годы практики и большое желание помочь лично вам.
					</p>
				</div>
			</div>
		</div>
		
		<!-- Команда -->
		<div class="container-fluid padding">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="fas avatar" src="img/face_1.jpg">
					<a class="link" href="face_1.php"><h3>Ирина Корнилова</h3></a>
					<span>Психолог. Стаж 25 лет.</span>
					<p style="color: #969696;">Здравствуйте! Я сертифицированный психолог и медиатор 
					(профессиональный посредник    в урегулировании конфликтов). 
					Я помогу Вам разобраться в ситуациях, которые вызывают депрессию и 
					чувство одиночества, преодолеть личные и профессиональные кризисы, побороть привычки,
					которые мешают вам жить, разрешить конфликты в отношениях и на работе,
					наладить взаимопонимание с окружающими вас людьми – детьми, родителями,
					супругами, друзьями и коллегами.
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="avatar" src="img/face_2.jpg">
					<a class="link" href="face_2.php"><h3>Ирина Шевцова</h3></a>
					<span>Психолог. Стаж 4 года.</span>
					<p style="color: #969696;">Я Гештальт - Практик, Бизнес - Тренер, Бизнес - Консультант.
					Буду рада ответить на Ваши вопросы, проконсультировать и помочь Вам.
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="avatar" src="img/face_3.jpg">
					<a class="link" href="face_3.php"><h3>Наталья Цибулина</h3></a>
					<span>Клинический, семейный психолог. Стаж 16 лет.</span>
					<p style="color: #969696;">Клинический психолог, Психолог, Психотерапевт. 
					Больше всего интересны для меня вопросы семейного консультирования и семейной психотерапии. 
					Имею успешный многолетний опыт в консультировании семейных пар, одного из супругов, 
					помогаю в решении Детско - Родительских проблем. Помогу разобраться со взаимоотношениями
					в семье и гармонизировать семейную жизнь. Владею знаниями и навыками Когнитивно - Поведенческой 
					терапии, методами ДПДГ и Арт - Терапии. Помогу справиться с непроработанными травмами, 
					с внутриличностными конфликтами, с самооценкой, которые мешают понимать и принимать себя, 
					с тревожностью, которая не позволяет радоваться жизни и выстраивать планы на будущее.
					Буду рада помочь!</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="avatar" src="img/face_4.jpg">
					<a class="link" href="face_4.php"><h3>Игорь Ерошкин</h3></a>
					<span>Психолог. Стаж 9 лет.</span>
					<p style="color: #969696;">Стаж с 2011. Психосоматика. Личностный рост. 
					Детско - Родительские отношения. Межличностные отношения. Буду рад Вам помочь!
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="avatar" src="img/face_5.jpg">
					<a class="link" href="face_5.php"><h3>Ольга Тихонова</h3></a>
					<span>Психолог. Стаж 15 лет.</span>
					<p style="color: #969696;">Помощь в решении проблем в Детско - Родительских и Семейных отношениях,
					зависимостях и девиациях (суицидальные наклонности, склонность к приему психоактивных веществ,
					криминальное поведение), поддержка семей с детьми с особенностями развития,
					решение проблем профориентации в юношеском возрасте и поиске жизненного пути,
					поддержка при потере близкого человека. Я работаю в направлении Когнитивно - поведенческой 
					и позитивной терапии. Это тип краткосрочной психологической помощи, проходит 
					в форме активного диалога клиента и психолога. Цель - поиск и решение проблем, 
					опираясь на логическое мышление и изменение привычных реакций и установок,
					а так же научит клиента в будущем решать проблемы самостоятельно.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="avatar" src="img/face_6.jpg">
					<a class="link" href="face_6.php"><h3>Виктор Ляшенко</h3></a>
					<span>Психолог-психотерапевт. Стаж 12 лет.</span>
					<p style="color: #969696;">Здравствуйте! Я консультирую и оказываю психотерапевтическую 
					помощь при: Депрессии, Тревожно - Фобических состояниях, 
					Панических атаках; Трудностях в отношениях; 
					Неуверенности в себе, Неприятии себя; Сексуальных проблемах; 
					Переживании потери, Одиночества, Стыда, Вины, Обиды, Трудностях выбора, 
					Потере смысла жизни, Неудовлетворенности жизнью и пр.</p>
				</div>
			</div>
		</div>
		
		<br><br><br><br><br><br>

	</body>
</html>