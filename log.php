<?php
session_start();
require_once './classes/Auth.class.php';
?>
<!DOCTYPE html>
<html lang="uk" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Особистий кабінет — Spotify 2.0</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-image: url('naushniki_knigi_obrazovanie_121501_1920x1080.jpg')">

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Spotify 2.0</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="about.php">Про нас</a>
        <a class="p-2 text-dark" href="index.php">Основна сторінка</a>
        <a class="p-2 text-dark" href="#">Каталог композицій</a>
        <a class="p-2 text-dark" href="log.php">Особистий кабінет</a>
        <a class="p-2 text-dark" href="register.php">Реєстрація</a>
    </nav>
</div>

<div class="container mt-4">

<?php if (Auth\User::isAuthorized()): ?>

    <h2>Вітаємо, <?= htmlspecialchars($_SESSION['name'] ?? 'користувач', ENT_QUOTES, 'UTF-8') ?>!</h2>
    <form class="ajax mt-3" method="post" action="./ajax.php">
        <input type="hidden" name="act" value="logout">
        <button class="btn btn-danger" type="submit">Вийти</button>
    </form>

<?php else: ?>

    <form class="form-signin ajax" method="post" action="./ajax.php" style="max-width:400px;">
        <div class="main-error alert alert-danger hide"></div>
        <h2 class="mb-3">Вхід</h2>
        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Ім'я користувача" autofocus required>
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Пароль" required>
        </div>
        <div class="form-check mb-3">
            <input name="remember-me" type="checkbox" class="form-check-input" id="rememberMe" value="remember-me" checked>
            <label class="form-check-label" for="rememberMe">Запам'ятати мене</label>
        </div>
        <input type="hidden" name="act" value="login">
        <button class="btn btn-primary btn-block" type="submit">Увійти</button>
        <div class="mt-3">
            <a href="register.php">Немає акаунту? Зареєструватись</a>
        </div>
    </form>

<?php endif; ?>

</div>

<script src="./vendor/jquery-2.0.3.min.js"></script>
<script src="./js/ajax-form.js"></script>
</body>
</html>
