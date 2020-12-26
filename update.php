<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    $mysql = new mysqli('127.0.0.1', 'mysql', 'mysql','spotify');
    if (!$mysql) {
        echo'eroor';
    }

    /*
     * Получаем ID продукта из адресной строки - /usar.php?id=1
     */

    $usar_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $usar = mysqli_query($mysql, "SELECT * FROM `users` WHERE `id` = '$usar_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $usar = mysqli_fetch_assoc($usar);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h3>Update info</h3>
    <form action="vendor/update.php" method="post">
        <input class="form-control" type="text" name="id" value="<?= $usar['id'] ?>">
        <h4> Username</h4>
        <input class="form-control" type="text" name="title" value="<?= $usar['username'] ?>">
        <h4>password<h4>
        <input class="form-control" type="text" name="title" value="<?= $usar['password'] ?>">
        <h4>salt<h4>
        <input class="form-control" type="text" name="title" value="<?= $usar['salt'] ?>">
        
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

