<?php
if($_POST){
    var_dump('$_POST');
    $username=$_POST['username'];
    $password=$_POST['password'];

    include('database/connection.php');
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
<body>
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