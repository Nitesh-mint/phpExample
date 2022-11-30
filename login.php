<?php
  if(isset($_POST['log'])){
    // echo "iamhere";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user=="admin" && $pass=="admin123"){
        session_start();
        $_SESSION['username']=$user;
        echo "i am here";
        // location:()
        header('location:dashboard.php');
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="login" method="post" action="">
   <input type="text" name="username" />
   <input type="password" name="password">
   <input type="submit" value="Login" name="log"/>
</form>
</body>
</html>