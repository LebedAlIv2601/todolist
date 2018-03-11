<?php
	session_start();
	$pdo = new PDO('mysql:host=darkalex.loc;dbname=tododo', "mysql", "mysql");
	
	if(isset($_POST['login'])) {

	$login = $_POST['login'];
	$password = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE login = '$login'"; 
	$result = $pdo->query($sql); 
	$result = $result->fetch();
	if($result['password'] == sha1($password)){
		$_SESSION['login'] = true;
		header('Location: http://darkalex.loc/register/da.php ');
	}else{
		echo "ФШИБКА!";
	}
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="center">
	<h1>Вход</h1>
	<form action="auth.php" method="post">
	<input type="text" name="login" placeholder="Логин" class="pole"><br> 
	<input type="password" name="pass" placeholder="Пароль" class="pole"><br> 
	<input type="submit" value="Войти" class="btn btn-success"> <br>
	<a href="index.php" type="submit" value="Регистрация" class="btn btn-primary">Регистрация</a>
</div>
</body>
</html>
