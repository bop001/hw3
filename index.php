<?php
	$file = fopen('src.csv', 'r');
	$file_str = fgets($file);
  	$file_array = explode(',', $file_str);
	
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>HW3</title>
</head>
<body>
	<div class="row">
		<div class="col s6">
			<a href="#">Logo</a>
		</div>
		<div class="registration col s6">
			<a class="waves-effect waves-light btn modal-trigger" href="#modal-registration">Регистрация</a>
			<a class="waves-effect waves-light btn modal-trigger" href="#modal-enter">Войти</a>
		</div>
	</div>
	
	<div id="modal-registration" class="modal">
    <div class="modal-content">
      <h4>Регистрация</h4>
      <form action="addUser.php" class="registration-form" method="POST">
      		<input type="text" name="username" id="name">
      		<label for="name">Введите ваш логин</label>
      		<input type="email" name="email" id="email">
      		<label for="email">Введите вашу почту</label>
      		<input type="password" name="password1" id="pass1">
      		<label for="pass1">Введите ваш пароль</label>
      		<input type="password" name="password2" id="pass2">
      		<label for="pass2">Подтвердите ваш пароль</label>
      		<input type="submit" class="btn waves-effect waves-light submit">
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Закрыть</a>
    </div>
  </div>
  <div id="modal-enter" class="modal">
    <div class="modal-content">
      <h4>Вход</h4>
      <p></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Закрыть</a>
    </div>
  </div>
	<script src="js/jquery.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>