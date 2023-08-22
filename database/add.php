<?php
session_start();
$table_name =$_SESSION['table'];
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$password =$_POST['password'];

$encrypted =password_hash($password, PASSWORD_DEFAULT);
try{$command = "INSERT INTO 
    $table_name(firstname, lastname, email, password, created_at, updated_at)
VALUES 
    ('".$firstname."', '".$lastname."', '".$email."','". $encrypted."', 'NOW()', 'NOW()')";

include('connection.php');

$conn->exec($command);
$response =[
    'success' => true,
    'message' => $firstname . ' ' . $lastname . ' successfully added to the system. '
];
}

catch(PDOException $e ){
 
    $response =[
        'success' => false,
        'message' => $e->getMessage()
    ];

}
$_SESSION['response'] = $response;
header('location: ../usersadd.php');




?>