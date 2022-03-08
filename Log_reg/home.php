<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="Stile/home.css">
  </head>
  <body>
    <h1>Benvenuto, <?php  echo $_SESSION['name']; ?></h1> 
    <a class = "logout" href="logout.php">Logout</a>
  </body>
</html>

<?php
}else{
  header("Location: index.php");
  exit();
}
 ?>
