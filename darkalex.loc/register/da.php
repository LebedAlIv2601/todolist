<?php 
session_start();
$pdo = new PDO('mysql:host=darkalex.loc;dbname=tododo', "mysql", "mysql");
if ($_SESSION['login'] === true) {
  $sql = "SELECT * FROM tasks"; 
  $result = $pdo->query($sql); 
  $result = $result->fetchALL();
}else {
  header('Location: http://darkalex.loc/register/auth.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="sait.css">
</head>
<body>
  <h1>Список ваших дел</h1>

<table class = 'table'>
    <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Задача</th>
      <th scope="col">Описание</th>
      <th scope="col">Приоритет</th>
      <th scope="col">Выполнение</th>
    </tr>
      </thead>
      <tbody>
    <?php 
foreach ($result as $task) {
echo "
    <tr>
      <th scope='row'>".$task['id']."</th>
      <td>".$task['title']."</td>
      <td>".$task['content']."</td>
      <td>".$task['preority']."</td>
      <th scope='col'><input id='checkBox' type='submit' value='Выполнено'></th>
    </tr>
";
}

     ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Хлеб</td>
      <td>Купить хлеб для голубей</td>
      <td>Важно</td>
      <th scope="col"><input id="checkBox" type="submit" value="Выполнено"></th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Мышь</td>
      <td>Убить мышь на потолке</td>
      <td>Второстепенно</td>
      <th scope="col"><input id="checkBox" type="submit" value="Выполнено"></th>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Велосипед</td>
      <td>Скинуть велосипед с крыши на плохо одетого прохожего</td>
      <td>Второстепенно</td>
      <th scope="col"><input id="checkBox" type="submit" value="Выполнено"></th>
    </tr> -->
  </tbody>

</table>
  <div class="sa">
  <a href="newTask.php" type="submit" value="Dqjnу" class="btn btn-primary">Создать новую задачу</a>
</div>
</body>
</html>