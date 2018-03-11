<?php 
//sha()
//
session_start();
$pdo = new PDO('mysql:host=darkalex.loc;dbname=tododo', "mysql", "mysql");
if(isset($_POST['login'])){
	$login = $_POST['login'];
	$password = $_POST['pass'];
	$rePassword = $_POST['repass'];
	$email = $_POST['email'];
	$password = sha1($password);
	$rePassword = sha1($rePassword);
	if($password === $rePassword){
		$sql = "INSERT INTO users VALUES (NULL,'$login','$password','$email')";
		$result = $pdo->query($sql);
		$_SESSION['login'] = true;
		header('Location: http://darkalex.loc/register/da.php ');
	}else{
		
	}
}


	//$pdo = new PDO('mysql:host=localhost;dbname=tododo', "mysql", "mysql");
	


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="center">
	<h1>Регистрация</h1>
	<form action="index.php" method="post">
	<input type="text" name="login" placeholder="Логин" class="pole"><br> 
	<input type="password" name="pass" placeholder="Пароль" class="pole"><br> 
	<input type="password" name="repass" placeholder="Повторите пароль" class="pole"><br> 
	<input type="email" name="email" placeholder="email" class="pole"><br> 
	<input type="submit" value="Регистрация" class="btn btn-success"> <br>
	<a href="auth.php" type="submit" value="Войти" class="btn btn-primary">Войти</a>
		</div>
</body>
</html>