<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}

require_once './database/connection.php'; // Include your database connection

$user = $_SESSION['user'];

// Fetch staff details from the database
$staffQuery = "SELECT staff_id, staff_name, email, phone_number FROM staff";
$staffResult = $conn->query($staffQuery);
$staffMembers = $staffResult->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dasboard.css">
    <link rel="stylesheet" href="css/dasboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <style>
        /* styles.css */
/* Custom styles for the staff details table */
.styled-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #dddddd;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.styled-table th, .styled-table td {
    padding: 15px;
    text-align: left;
}

.styled-table th {
    background-color: #f5f5f5;
    color: #333333;
    font-weight: bold;
}

.styled-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.styled-table tbody tr:hover {
    background-color: #f9f9f9;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}



/* Add this CSS to your dashboard.css file */

/* Style for button */
.button {
    margin-left:1000px;
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #0056b3;
}

</style>
    <div class="dashboardMainContainer" id="dashboardMainContainer">
        <?php include('partials/appsidebar.php')?>
       
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/apptopnav.php')?>
           
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                <a href="./add_staff.php" class="button">Add Staff</a>
                    <h2>Staff Details</h2>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Staff ID</th>
                                <th>Staff Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($staffMembers as $staff) { ?>
                                <tr>
                                    <td><?= $staff['staff_id'] ?></td>
                                    <td><?= $staff['staff_name'] ?></td>
                                    <td><?= $staff['email'] ?></td>
                                    <td><?= $staff['phone_number'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dashboard.js"></script>
</body>
</html>
