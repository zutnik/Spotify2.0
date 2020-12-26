<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body style="background-image: url('naushniki_knigi_obrazovanie_121501_1920x1080.jpg')">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Spotify 2.0</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="about.php">Про нас</a>
            <a class="p-2 text-dark" href="index.php">Основна сторінка</a>
            <a class="p-2 text-dark" href="">Каталог композицій</a>
            <a class="p-2 text-dark" href="#">Служба підтримки</a>
            <a class="p-2 text-dark" href="Log.php">Особистий кабінет</a>
            <a class="p-2 text-dark" href="register.php">Регестрація</a>
        </nav>
    </div>
    <center>
    <div class="mt-3">
     <img  width="400" height="311" src="spotify-logo.jpg" alt="">
    </div>
  </center>
    <div>
      <form method="post" action="Bd/conect.php">
          <i class="fas fa-h2    ">Email</i>
          <input class="form-control" type="email" name="email">
          <i class="fas fa-h2    ">name</i>
          <input class="form-control" type="text" name="name">
          <i class="fas fa-h2    ">Password</i>
          <input class="form-control" type="password" name="pass">
          <i class="fas fa-h2    ">Country</i>
          <input class="form-control" type="country" name="country">
            <button type="submit" class="btn btn-primary"></button>
           
          
      </form>

    </div>

</body>

</html>