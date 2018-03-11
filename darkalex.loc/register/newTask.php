<?php 
//sha()
//
session_start();
$pdo = new PDO('mysql:host=darkalex.loc;dbname=tododo', "mysql", "mysql");
if(isset($_POST['title'])){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$preority = $_POST['preority'];
		$sql = "INSERT INTO tasks VALUES (NULL,'$title','$content','$preority')";
		$result = $pdo->query($sql);
		$_SESSION['login'] = true;
		header('Location: http://darkalex.loc/register/da.php ');
}


	//$pdo = new PDO('mysql:host=localhost;dbname=tododo', "mysql", "mysql");
	


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
</head>
<body>
		<div class="center">
	<h1>Новая задача</h1>
	<form action="newTask.php" method="post">
	<input type="text" name="title" placeholder="Название задачи" class="pole"><br> 
	<input type="text" name="content" placeholder="Описание задачи" class="pole1"><br> 
	<input type="text" name="preority" placeholder="Приоритет" class="pole"><br> 
	<input type="submit" value="Создать новую задачу" class="btn btn-success"> <br>
	<a href="da.php" type="submit" value="Войти" class="btn btn-primary">Назад</a>
		</div>
</body>
</html>