<?php
//Start the session
session_start();
if(isset($_SESSION['user'])) header('location:order.php');
 $error_message='';
if($_POST){

    include('database/connection.php');
   
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query ='SELECT * FROM users WHERE users.email="'. $username .'" AND users.password ="'. $password .'" ';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user=$stmt->fetchAll()[0];
        $_SESSION['user']=$user;

        header('Location: dashboard.php');


    }else $error_message='Please make sure that username and password are correct';

    
   

   
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Dispensary Management System</title>
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Dispensary Management System</h1>
    </div>
    <div class="main">
      <form action="/login" method="post">
        <div>
          <label for="username">Username</label>
          <input type="text" name="username" id="username">
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
        </div>
        <div>
          <center><input type="submit" value="Login"></center>
        </div>
      </form>
    </div>
    <div class="footer">
      <p>Copyright 2023 Dispensary Management System</p>
    </div>
  </div>
</body>
</html>