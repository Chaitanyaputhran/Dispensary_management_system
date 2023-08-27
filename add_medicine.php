<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit;
}

require_once './database/connection.php'; // Include your database connection

$user = $_SESSION['user'];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $medicine_name = $_POST['medicine_name'];
    $image_path = $_POST['image_path'];

    // Perform validation and sanitization of input fields here

    // Insert data into medicines table
    $insertQuery = "INSERT INTO medicines (medicine_name, image_path) VALUES (?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->execute([$medicine_name, $image_path]);
    
    $message = 'New medicine added successfully!';

    // Redirect to the dashboard or a success page
    header('location: stocks.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
    <link rel="stylesheet" href="css/dasboard.css?v=< ? =time(); ? >">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    <style>
        /* Add this CSS to your dashboard.css file */
        
        /* Style for form */
        form {
            margin-top: 50px;
            align-items: center;
            margin-left: 100px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .content{
    margin-top:40px;
    margin-left:250px;
    width:500px;
    height:400px;
    border:2px black solid;
    border-radius:30px;
     line-height: 1.5;
  font-weight: 400;

  color-scheme: light dark;
  align-items: center;
  
    
}

        input[type="text"] {
            width: 280px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 14px;
            color: #333;
            transition: border-color 0.3s, background-color 0.3s;
            background-color: pink;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            margin-left: 90px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="dashboardMainContainer" id="dashboardMainContainer">
        <?php include('partials/appsidebar.php')?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/apptopnav.php')?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <div class="content">
                   <center> <h2>Add New Medicine</h2></center>
                    <form action="" method="post">
                        <label for="medicine_name">Medicine Name:</label>
                        <input type="text" name="medicine_name" id="medicine_name" required><br>
                        <label for="image_path">Image Path:</label>
                        <input type="text" name="image_path" id="image_path" required><br>
                        <br>
                      
                        <button type="submit">Add Medicine</button>
                    </form>
    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dashboard.js?v=<?= time(); ?>"></script>
</body>
</html>
