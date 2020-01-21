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
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- Регистрация -->
		<div class="container">
			<div  class="row jumbotron justify-content-center">
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group container" style="text-align: center; ">
						<label class="nav-link" for="username">Введите ваш логин:</label>
							<input class="form-control qwer" style="" type="text" name="username">
						<label class="nav-link" for="password">Введите ваш пароль:</label>
							<input class="form-control qwer" type="password" name="password1">
						<label class="nav-link" for="password">Введите пароль еще раз:</label>
							<input class="form-control qwer" type="password" name="password2">
						<label class="nav-link" for="email">Введите eMail:</label>
							<input class="form-control qwer" type="email" name="email">
							<br>
							<input type="checkbox" name="spam">
						<label for="spam">Получать новостную рассылку </label>
							<br>
						<button class="btn btn-success btn-lg" type="submit" name="submit">Вход</button>
						<br>
						<?php 
							if(isset($_POST['submit']) && $_POST['spam']){
								$username = mysqli_real_escape_string($connection, trim($_POST['username']));
								$password1 = mysqli_real_escape_string($connection, trim($_POST['password1']));
								$password2 = mysqli_real_escape_string($connection, trim($_POST['password2']));
								$email = mysqli_real_escape_string($connection, trim($_POST['email']));
								if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
									$query = "SELECT * FROM `signup` WHERE username = '$username'";
									$data = mysqli_query($connection, $query);
									if(mysqli_num_rows($data) == 0) {
										$query ="INSERT INTO `signup` (username, password, email) VALUES ('$username', SHA('$password2'), '$email')";
										mysqli_query($connection,$query);
										echo 'Вы успешно зарегестрировались!<br> Перейти на <a href="index.php">главную</a>';
										mysqli_close($connection);
									}
									else {
										echo 'Логин уже существует';
									}
								}
							}
						?>
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>