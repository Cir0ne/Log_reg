<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrazione</title>
    <link rel="stylesheet" href="../Stile/styles.css">
    <img src="../Immagini/PL_Logo.jpg" alt="ProjectLemon" class = "ribbon">
  </head>


  <body>
    <form class="" action="Signup-check.php" method="post">
      <h2>Registrati</h2>
      <?php if (isset($_GET['error'])){?>
          <p class = "error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

      <?php if (isset($_GET['success'])){?>
          <p class = "success"><?php echo $_GET['success']; ?></p>
      <?php } ?>


      <label>Nome</label>
      <?php if (isset($_GET['name'])){?>
          <input type="text"
                 name="name"
                 placeholder="Name"
                 value="<?php echo $_GET['name'];?>"><br>
      <?php }else{ ?>
        <input type="text"
               name="name"
               placeholder="Name">
      <?php } ?>



        <p></p>
        <label for="Uname">UserName</label>
        <input type="text" name="uname", placeholder="UserName">

        <p></p>
        <label for="Puser">Password</label>
        <input type="password" name="password" placeholder="Password">

        <p></p>
        <label for="Puser">Conferma Password</label>
        <input type="password" name="re_password" placeholder="Password">


        <p></p>
        <a href="../index.php">Hai già un acccount? Clicca qui!</a>
        <button type="submit" name="button">Registrati </button>

  </body>
</html>

<!-- <?php echo $_GET['name'];?> -->
