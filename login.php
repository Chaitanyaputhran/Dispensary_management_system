<?php
//Start the session
session_start();
if(isset($_SESSION['user'])) header('location:dashboard.php');
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispensary Management System</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body >
    <?php
    if(!empty($error_message)){

    

?>
 
    <div class =error>
       <strong>Error:</strong>  <p><?= $error_message ?></p>
    </div>
    <?php } ?>
    <div class="container">
        <div class ="top">
            <h1>DMS</h1>
            <H2>DISPENSARY MANAGEMENT SYSTEM</H2>
        </div>
        <div class="body">
            <form action="login.php" method="POST">
                <div>
                    <label for ="">Username</label>
                    <input type="text" name="username" placeholder="username" />
                    </div>
                    <div>
                        <label for ="">Password</label>
                        <input type="password" name="password" placeholder="password" />

                    </div>
                    <div>
                        <button>login</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</body>
</html>