<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'Bd\conect.php';

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
  <table class="table">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>password</th>
            <th>salt</th>
        </tr>

        <?php
            $mysql = new mysqli('127.0.0.1', 'mysql', 'mysql','spotify');
            if (!$mysql) {
                echo'eroor';
            }
            /*
             * Делаем выборку всех строк из таблицы "usars"
             */

            $usars = mysqli_query($mysql, "SELECT * FROM `users`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $usars = mysqli_fetch_all($usars);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($usars as $usar) {
                ?>
                    <tr>
                        <td scope="row"><?= $usar[0] ?></td>
                        <td scope="row"><?= $usar[1] ?></td>
                        <td scope="row"><?= $usar[3] ?></td>
                        <td scope="row"><?= $usar[2] ?>$</td>
                        <td scope="row"><a href="update.php?id=<?= $usar[0] ?>">Update</a></td>
                        <td scope="row"><a style="color: red;" href="vendor/delete.php?id=<?= $usar[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>