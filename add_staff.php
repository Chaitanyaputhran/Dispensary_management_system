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
    $staff_name = $_POST['staff_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    // Perform validation and sanitization of input fields here

    // Insert data into staff table
    $insertQuery = "INSERT INTO staff (staff_name, email, phone_number) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->execute([$staff_name, $email, $phone_number]);
    
    $message = 'New staff added successfully!';

    // Redirect to the dashboard or a success page
    header('location: order.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff</title>
    <link rel="stylesheet" href="css/dasboard.css?v=<?= time(); ?>">
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

        .content {
            margin-top: 40px;
            margin-left: 250px;
            width: 500px;
            height: 500px;
            border: 2px black solid;
            border-radius: 30px;
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
                        <center> <h2>Add New Staff</h2></center>
                        <form action="" method="post">
                            <label for="staff_name">Staff Name:</label>
                            <input type="text" name="staff_name" id="staff_name" required><br>
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" required><br>
                            <label for="phone_number">Phone Number:</label>
                            <input type="text" name="phone_number" id="phone_number" required><br>
                            <br>
                            <button type="submit">Add Staff</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dashboard.js?v=<?= time(); ?>"></script>
</body>
</html>
