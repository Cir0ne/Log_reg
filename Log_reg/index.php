<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="Stile/styles.css">
    <img src="Immagini/PL_Logo.jpg" alt="ProjectLemon" class = "ribbon">
  </head>


  <body>
    <form class="" action="Login.php" method="post">
      <h2>LOGIN</h2>
      <?php if (isset($_GET['error'])){?>
          <p class = "error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

        <label for="Uname">UserName</label>
        <input type="text" name="uname", placeholder="UserName">

        <p></p>
        <label for="Puser">Password</label>
        <input type="password" name="password" placeholder="Password">


        <p></p>
        <a href="Registrazione/signup.php">Non hai un account? Registrati!</a>
        <button type="submit" name="button">Accedi </button>

  </body>
</html>
