<?php
session_start();
require_once('connection.php'); // Corrected: Include the connection file at the beginning
$table_name = $_SESSION['table'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$encrypted = password_hash($password, PASSWORD_DEFAULT);
try {
    $command = "INSERT INTO $table_name (firstname, lastname, email, password)
                VALUES ('$firstname', '$lastname', '$email', '$encrypted')";
    
    $conn->exec($command);
    
    $response = [
        'success' => true,
        'message' => $firstname . ' ' . $lastname . ' successfully added to the system.'
    ];
} catch(PDOException $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

$_SESSION['response'] = $response;
header('Location: ../user_add.php'); // Corrected: 'Location' instead of 'location'

?>
