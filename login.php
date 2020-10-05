<?php
include("connexion.php");
session_start();


if (isset($_POST['login-submit'])) {
  $query = $connexion->prepare("SELECT * FROM users WHERE name='" . $_POST['name'] . "' ");
  $query->execute();
  $fetch = $query->fetch();
  if ($fetch) {
    $_SESSION['login'] = $fetch['name'];
    $_SESSION['password'] = $fetch['user_pwd'];
    if (password_verify($_POST['pwd'], $fetch['user_pwd'])) {
      header('location:admin.php');
    }
  }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>login</title>
</head>

<body>
  <div>
    <div class="form-login">

      <form action="" class="login-form" method="post">
        <h2>Login</h2>
        <div class="imgcontainer">
          <img src="images/walidwalid.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <?php if (isset($_POST['login-submit'])) {
            if (!isset($_SESSION['login']) or !isset($_SESSION['pwd'])) {
          ?>
              <p class="alert alert-danger">login ou mdp invalid</p>
          <?php }
          } ?>
          <label for="name"><b>name</b></label>
          <input type="text" placeholder="Name" name="name" required>
          <label for="pwd"><b>Password</b></label>
          <input type="password" placeholder="Enter mot de passe" name="pwd" required>
          <button type="submit" name="login-submit">Login</button>
        </div>
      </form>

    </div>
  </div>
</body>

</html>