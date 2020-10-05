<?php
include("connexion.php");
if (isset($_POST['login-submit'])) {
  $user = $_POST['name'];
  $passwordhash = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
  $req = $connexion->prepare("INSERT INTO  users (name,user_pwd) VALUE (:name,:user_pwd)");
  $req->bindValue(':name', $user);
  $req->bindValue(':user_pwd', $passwordhash);
  $reqExec = $req->execute();
  if ($reqExec) {
    header('location:index.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <label for="name"><b>name</b></label>
    <input type="text" placeholder="Name" name="name" required>
    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter mot de passe" name="pwd" required>
    <button type="submit" name="login-submit">Login</button>
  </form>
</body>

</html>