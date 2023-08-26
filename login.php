<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ./order.php');
    exit();
}

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once './database/connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM users WHERE email = :username AND password = :password';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user'] = $user;

        header('Location: ./order.php');
        exit();
    } else {
        $error_message = 'Please make sure that username and password are correct';
    }
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
        <form action="" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
        <?php if (!empty($error_message)): ?>
            <p><?php echo $error_message; ?></p>
        <?php endif; ?>
    </div>
    <div class="footer">
        <p>Copyright 2023 Dispensary Management System</p>
    </div>
</div>
<script src="js/dashboard.js"></script>
</body>
</html>
