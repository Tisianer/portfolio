<?php
$connection = mysqli_connect('localhost', 'vh300276_psyhelp', 'Q!moonbe', 'vh300276_listyslyg') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit']))
{
	header('Location: face_5.php');
}
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
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
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
						<li class="nav-item" >
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
		
		<!-- психолог, форма и отзывы -->
		<div class="container">
		
			<!--  Описание психолога -->
			<div  class="row jumbotron justify-content-center">		
				<div class="container-fluid padding">
					<div class="row text-center padding">
						<div class="col-xs-12">
							<img class="fas avatar" src="img/face_5.jpg">
							<h3>Ольга Тихонова</h3>
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
					</div>
				</div>
			</div>
		
			<?php 
				if(!empty($_COOKIE['username'])) 
				{
			 ?>
			 
			<!-- Форма -->
					<div class="justify-content-center ">
						<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="form-group">
								<textarea name="text_comment" type="text_comment" class="form-control" placeholder="Здесь вы можете оставить отзыв. Все отзывы абсолютно анонимны." style="height: 127px;"></textarea>
							</div>
							<a src="face_5.php"><button name="submit" class="btn btn-success btn-lg" type="submit">Оставить отзыв</button></a>
							<br><br>
						</form>
					</div>
				
					<br><br><br>
				<?php
					
					mysqli_close($connection);
					
				}
				else 
				{
			?>
					<div  class="row justify-content-center">		
						<div class="container-fluid padding">
							<div class="text-center padding">
								<div class="col-xs-12">
									<h3>Вы должны быть <a href="reg.php">зарегистрированы</a>, что-бы просматривать и оставлять отзывы.</h3>
								</div>
							</div>
						</div>
					</div>
			<?php	
				}
			?>
			
		</div>
		
	</body>
</html>