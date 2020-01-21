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
						<li class="nav-item active">
							<a href="index.php" class="nav-link">Главная</a>
						</li>
						<li class="nav-item">
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

		<!-- Карусель -->
		<div class="carousel slide" data-ride="carousel" id="slides">
		
			<!-- Полоска переключения между картинками -->
			<ul class="carousel-indicators">
				<li data-target="#slides" data-slide-to="0" class="active"></li>
				<li data-target="#slides" data-slide-to="1"></li>
				<li data-target="#slides" data-slide-to="2"></li>
			</ul>
			
			<!-- Картинки -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/home_1.jpg">
				</div>
				<div class="carousel-item">
					<img src="img/home_2.jpg">
				</div>
				<div class="carousel-item">
					<img src="img/home_3.jpg">
				</div>
			</div>
		</div>
		<br><br>
		<!-- Основной блок сайта -->
		<div class="container-fluid">
			<div class="row text-center alert">
				
				<!-- текст -->
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
					<h1 class="display-4">Психологическая помощь онлайн</h1> <hr>
					<p class="lead" style="font-size: 1.5em;">
					Сайт Psychological Help предоставляет услуги платных консультаций психологов Онлайн,
					которые вместе с вами разберут ваши проблемы и помогут найти пути и решения возникших ситуаций.
					Всё происходит онлайн, анонимно, в отдельных комнатах нашего чата в Discord и в
					удобное для вас время. 
					</p>
					<br><br>
					<p class="lead">Получите консультацию прямо сейчас:</p>
					<a href="https://discord.gg/2wG8n5c"><button class="btn btn-success btn-lg" type="button">Перейти в приёмную</button></a>
				</div>
				
				<!-- таблица с услугами -->
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 table-responsive">
				<br><br><br><br>
					<table class="table table-hover table-bordered">
						<thead>
							<tr style="background-color: #969696;">
								<th>Услуга</th>
								<th>Цена</th>
								<th>Психолог</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Почасовая практика</td>
								<td>
								<?php
									if(empty($_COOKIE['username'])) 
									{
								?>
									1000
								<?php
								}
								else
								{
								?> 
									750 
								<?php
								}
								?>
								</td>
								<td><a href="face_1.php">Ирина Корнилова</a></td>
							</tr>
							<tr>
								<td>Почасовая практика</td>
								<td>
								<?php
									if(empty($_COOKIE['username'])) 
									{
								?>
									1500
								<?php
								}
								else
								{
								?> 
									1125 
								<?php
								}
								?>
								</td>
								<td><a href="face_2.php">Ирина Шевцова</a></td>
							</tr>
							<tr>
								<td>Почасовая практика</td>
								<td>
								<?php
									if(empty($_COOKIE['username'])) 
									{
								?>
									900
								<?php
								}
								else
								{
								?> 
									675 
								<?php
								}
								?>
								</td>
								<td><a href="face_3.php">Наталья Цибулина</a></td>
							</tr>
							<tr>
								<td>Почасовая практика</td>
								<td>
								<?php
									if(empty($_COOKIE['username'])) 
									{
								?>
									1700
								<?php
								}
								else
								{
								?> 
									1275 
								<?php
								}
								?>
								</td>
								<td><a href="face_4.php">Игорь Ерошкин</a></td>
							</tr>
							<tr>
								<td>Почасовая практика</td>
								<td>
								<?php
									if(empty($_COOKIE['username'])) 
									{
								?>
									1200
								<?php
								}
								else
								{
								?> 
									900 
								<?php
								}
								?>
								</td>
								<td><a href="face_5.php">Ольга Тихонова</a></td>
							</tr>
							<tr>
								<td>Почасовая практика</td>
								<td>
								<?php
									if(empty($_COOKIE['username'])) 
									{
								?>
									1000
								<?php
								}
								else
								{
								?> 
									750 
								<?php
								}
								?>
								</td>
								<td><a href="face_6.php">Виктор Ляшенко</a></td>
							</tr>
						</tbody>
					</table>
					<?php
						if(empty($_COOKIE['username'])) 
						{
					?>
							<p> Уникальное предложение! <a href="reg.php">Зарегистрируйтесь</a> и получите скидку 25%</p>
					<?php
						}
					?>
				</div>
			</div>
		</div>
			
		<!-- Фиксированное изображение -->
		<figure>
			<div class="fixed-wrap">
				<div id="fixed">
				</div>
			</div>
		</figure>

		<!-- Футер -->
		<footer class="container-fluid">
			<div class="container-fluid">
				<div class="row padding text-center" id="cvet">
					<!-- </div> -->
					<div class="col-12 social padding">
						<!-- <img src="img/google.png"> -->
						<p class="lead" id="text">PsychologyHelp2@gmail.com | +78005553535</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>