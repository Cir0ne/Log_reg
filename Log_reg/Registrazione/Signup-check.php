
<?php
session_start();
include "../DB_Connection.php";

if (isset($_POST['uname']) && isset($_POST['password'])
  && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
  $name = validate($_POST['name']);
	$re_pass = validate($_POST['re_password']);

  $user_data = 'uname='. $uname. '$name='. $name;




	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	   exit();
	}else if(empty($pass)){
      header("Location: signup.php?error=Password is required&$user_data");
	    exit();
  }else if(empty($re_pass)){
      header("Location: signup.php?error=Re Password is required&$user_data");
  	  exit();
  }else if(empty($name)){
      header("Location: signup.php?error=Name is required&$user_data");
    	 exit();
  }else if($pass !== $re_pass){
      header("Location: signup.php?error=Re Password non è uguale alla password&$user_data");
      exit();


  }else{

    //trasforma in hascii la password
    $pass = md5($pass);

    $sql = "SELECT * FROM users WHERE user_name='$uname'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location: signup.php?error=Il nome untente è già esistente&$user_data");
      exit();
    }else{
      $insert = "INSERT INTO users (user_name, password, name) VALUES ('$uname', '$pass', '$name')";
      $Reg = mysqli_query($conn, $insert);


      if ($Reg) {
        header("Location: signup.php?success=Il tuo account è stato creato!&$user_data");
        exit();
      }else{
        header("Location: signup.php?error=errore sconosciuto&$user_data");
        exit();
      }
    }
  }
}else{
	header("Location: signup.php");
	exit();
}
=======
<?php
session_start();
include "../DB_Connection.php";

if (isset($_POST['uname']) && isset($_POST['password'])
  && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
     $data = trim($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

  $name = validate($_POST['name']);
	$re_pass = validate($_POST['re_password']);

  $user_data = 'uname='. $uname. '$name='. $name;




	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	   exit();
	}else if(empty($pass)){
      header("Location: signup.php?error=Password is required&$user_data");
	    exit();
  }else if(empty($re_pass)){
      header("Location: signup.php?error=Re Password is required&$user_data");
  	  exit();
  }else if(empty($name)){
      header("Location: signup.php?error=Name is required&$user_data");
    	 exit();
  }else if($pass !== $re_pass){
      header("Location: signup.php?error=Re Password non è uguale alla password&$user_data");
      exit();


  }else{

    //trasforma in hascii la password
    $pass = md5($pass);

    $sql = "SELECT * FROM users WHERE user_name='$uname'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location: signup.php?error=Il nome untente è già esistente&$user_data");
      exit();
    }else{
      $insert = "INSERT INTO users (user_name, password, name) VALUES ('$uname', '$pass', '$name')";
      $Reg = mysqli_query($conn, $insert);


      if ($Reg) {
        header("Location: signup.php?success=Il tuo account è stato creato!&$user_data");
        exit();
      }else{
        header("Location: signup.php?error=errore sconosciuto&$user_data");
        exit();
      }
    }
  }
}else{
	header("Location: signup.php");
	exit();
}
>>>>>>> before discard
