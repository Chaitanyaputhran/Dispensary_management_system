<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}

require_once './database/connection.php'; // Include your database connection

$user = $_SESSION['user'];

// Handle form submission to assign staff and update status
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $staff_id = isset($order['staff_id']) ? $order['staff_id'] : 'Not Assigned';

    $status = isset($order['status']) ? $order['status'] : 'Unknown';


    // Perform validation and sanitization of input fields here

    // Update data in order_supplier table
    $updateQuery = "UPDATE order_supplier SET staff_id = ?, status = ? WHERE id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->execute([$staff_id, $status, $order_id]);
}

// Fetch order details from the database
$query = "SELECT * FROM order_supplier";
$result = $conn->query($query);
$orders = $result->fetchAll(PDO::FETCH_ASSOC);

// Fetch staff details for dropdown selection
$staffQuery = "SELECT staff_id, staff_name FROM staff";
$staffResult = $conn->query($staffQuery);
$staffMembers = $staffResult->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="css/dasboard.css?v=< ? =time(); ? >">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    <style>
        /* Add this CSS to your dashboard.css file */

        /* ... Existing CSS ... */
    </style>
</head>
<body>
    <div class="dashboardMainContainer" id="dashboardMainContainer">
        <?php include('partials/appsidebar.php')?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/apptopnav.php')?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <h2>Order Details</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Staff</th>
                                <th>Medicine ID</th>
                                <th>Quantity Ordered</th>
                                <th>Quantity Remaining</th>
                                <th>Status</th>
                                <th>Assign Staff</th>
                                <th>Update Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($orders as $order) {
                                $order_id = $order['id'];

                                // Fetch quantity remaining from the stocks table for this order's medicine_id
                                $stockQuery = "SELECT quantity FROM stocks WHERE medicine_id = ?";
                                $stockStmt = $conn->prepare($stockQuery);
                                $stockStmt->execute([$order['medicine_id']]);
                                $stockResult = $stockStmt->fetch(PDO::FETCH_ASSOC);
                                $quantity_remaining = $stockResult ? $stockResult['quantity'] : 0;

                                // Display the order details along with the fetched quantity remaining
                                echo "<tr>
                                        <td>{$order['id']}</td>
                                        <td>{$order['staff_id']}</td>
                                        <td>{$order['medicine_id']}</td>
                                        <td>{$order['quantity_ordered']}</td>
                                        <td>{$quantity_remaining}</td>
                                        <td>{$order['status']}</td>
                                        <td>
                                            <form action='' method='post'>
                                                <input type='hidden' name='order_id' value='$order_id'>
                                                <select name='staff_id'>";
                                foreach ($staffMembers as $staff) {
                                    echo "<option value='{$staff['staff_id']}'>{$staff['staff_name']}</option>";
                                }
                                echo "              </select>
                                                <button type='submit'>Assign Staff</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action='' method='post'>
                                                <input type='hidden' name='order_id' value='$order_id'>
                                                <select name='status'>
                                                    <option value='Pending'>Pending</option>
                                                    <option value='Completed'>Completed</option>
                                                    <option value='Cancelled'>Cancelled</option>
                                                </select>
                                                <button type='submit'>Update Status</button>
                                            </form>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dashboard.js?v=<?= time(); ?>"></script>
</body>
</html>
