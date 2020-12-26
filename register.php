<?php
    
if (!empty($_COOKIE['sid'])) {
    // check session id in cookies
    session_id($_COOKIE['sid']);
}
session_start();
require_once './classes/Auth.class.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
    <meta charset="utf-8">
    <title></title>
    <style>* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
  background-color: #0069d9;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
  background-color: #0069d9;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
        
    }
} </style>
</head>


</div> <!-- /container -->

<script src="./vendor/jquery-2.0.3.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./js/ajax-form.js"></script>
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
   
   
    <div class="container">

<?php if (Auth\User::isAuthorized()): ?>

<h1>Your are already registered!</h1>

<form class="ajax" method="post" action="./ajax.php">
    <input type="hidden" name="act" value="logout">
    <div class="form-actions">
        <button class="btn btn-large btn-primary" type="submit">Logout</button>
    </div>
</form>

<?php else: ?>

<form class="form-signin ajax" method="post" action="./ajax.php">
  <div class="main-error alert alert-error hide"></div>

  <h2 class="form-signin-heading">Please sign up</h2>
  <input name="username" type="text" class="input-block-level" placeholder="Username" autofocus>
  <div class="">
        <select  name="country1">
          <option value="1">AdminUser</option>
          <option value="2">Company</option>
          <option value="3">AddSong</option>
        </select>
      </div>
      <br>
  <input name="password1" type="password" class="input-block-level" placeholder="Password">
  <input name="password2" type="password" class="input-block-level" placeholder="Confirm password">
  <input type="hidden" name="act" value="register">
 
  <button class="btn btn-large btn-primary" type="submit">Register</button>
  <div class="alert alert-info" style="margin-top:15px;">
      <p>Already have account? <a href="index1.php">Sign In.</a>
  </div>
</form>

<?php endif; ?>

   


<br>
    <div class="container">
  <form method="post" action="Bd/mediaAdd.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name song</label>
      </div>
      <div class="col-75">
        <input type="text" name="song" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">time</label>
      </div>
      <div class="col-75">
        <input type="time" id="timeSong" name="time" placeholder="time">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">author</label>
      </div>
      <div class="col-75">
        <input type="text" id="textsong" name="author" placeholder="author">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">style</label>
      </div>
      <div class="col-75">
        <input type="text" id="stylesong" name="style" placeholder="style">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</body>

</html>