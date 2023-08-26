<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}

require_once './database/connection.php'; // Include your database connection

$user = $_SESSION['user'];

// Handle staff assignment and status update form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];

    if (isset($_POST['staff_id']) && !empty($_POST['staff_id'])) {
        $staff_id = $_POST['staff_id'];

        // Update staff assignment in order_supplier table
        $updateStaffQuery = "UPDATE order_supplier SET staff_id = ? WHERE id = ?";
        $stmt = $conn->prepare($updateStaffQuery);
        $stmt->execute([$staff_id, $order_id]);

        // Fetch updated staff details for dropdown selection
        $staffQuery = "SELECT staff_id, staff_name FROM staff";
        $staffResult = $conn->query($staffQuery);
        $staffMembers = $staffResult->fetchAll(PDO::FETCH_ASSOC);

        // Find the selected staff's name
        $selectedStaffName = "";
        foreach ($staffMembers as $staff) {
            if ($staff['staff_id'] === $staff_id) {
                $selectedStaffName = $staff['staff_name'];
                break;
            }
        }
    }

    if (isset($_POST['status'])) {
        $status = $_POST['status'];

        // Update status in order_supplier table
        $updateStatusQuery = "UPDATE order_supplier SET status = ? WHERE id = ?";
        $stmt = $conn->prepare($updateStatusQuery);
        $stmt->execute([$status, $order_id]);
    }
}

// Fetch order details from the database
$query = "SELECT os.*, m.medicine_name FROM order_supplier os JOIN medicines m ON os.medicine_id = m.medicine_id";
$result = $conn->query($query);
$orders = $result->fetchAll(PDO::FETCH_ASSOC);

// Fetch staff details for dropdown selection
$staffQuery = "SELECT staff_id, staff_name FROM staff";
$staffResult = $conn->query($staffQuery);
$staffMembers = $staffResult->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['status'])) {
    $status = $_POST['status'];

    // Update status in order_supplier table
    $updateStatusQuery = "UPDATE order_supplier SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($updateStatusQuery);
    $stmt->execute([$status, $order_id]);

    if ($status === 'Completed') {
        // Fetch the ordered quantity from the order_supplier table
        $orderedQuantityQuery = "SELECT quantity_ordered, medicine_id FROM order_supplier WHERE id = ?";
        $orderedQuantityStmt = $conn->prepare($orderedQuantityQuery);
        $orderedQuantityStmt->execute([$order_id]);
        $orderDetails = $orderedQuantityStmt->fetch(PDO::FETCH_ASSOC);

        if ($orderDetails) {
            $orderedQuantity = $orderDetails['quantity_ordered'];

            // Fetch the current quantity from the stocks table
            $currentQuantityQuery = "SELECT quantity FROM stocks WHERE medicine_id = ?";
            $currentQuantityStmt = $conn->prepare($currentQuantityQuery);
            $currentQuantityStmt->execute([$orderDetails['medicine_id']]);
            $currentQuantity = $currentQuantityStmt->fetchColumn();

            // Calculate the updated quantity
            $updatedQuantity = $currentQuantity - $orderedQuantity;

            // Update the stock quantity in the stocks table
            $updateStockQuantityQuery = "UPDATE stocks SET quantity = ? WHERE medicine_id = ?";
            $updateStockQuantityStmt = $conn->prepare($updateStockQuantityQuery);
            $updateStockQuantityStmt->execute([$updatedQuantity, $orderDetails['medicine_id']]);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dasboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
<style>
        /* Add table styles here */
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd; /* Add this line for column borders */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
        </style>

    <div class="dashboardMainContainer" id="dashboardMainContainer">
    <?php include('partials/appsidebar.php')?>
    <div class = "dashboard_content_container" id="dashboard_content_container">
        <?php include('partials/apptopnav.php')?>
           
            <div class="dashboard_content">
        
            <div class="dashboard_content_main">
                <h2>Order Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Medicine name</th>
                            <th>Quantity Ordered</th>
                            <th>Quantity Remaining</th>
                            <th>Status</th>
                            <th>Assigned Staff</th>
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

                            // Fetch staff name for the assigned staff
                            $assignedStaffName = "";
                            foreach ($staffMembers as $staff) {
                                if ($staff['staff_id'] === $order['staff_id']) {
                                    $assignedStaffName = $staff['staff_name'];
                                    break;
                                }
                            }

                            echo "<tr>
                                    <td>{$order['id']}</td>
                                    <td>{$order['medicine_name']}</td>
                                    <td>{$order['quantity_ordered']}</td>
                                    <td>{$quantity_remaining}</td>
                                    <td>{$order['status']}</td>
                                    <td>{$assignedStaffName}</td>
                                    <td>
                                        <form action='' method='post'>
                                            <input type='hidden' name='order_id' value='$order_id'>
                                            <select name='staff_id'>
                                                <option value=''>Not Assigned</option>";
                            foreach ($staffMembers as $staff) {
                                $selected = ($staff['staff_id'] === $order['staff_id']) ? 'selected' : '';
                                echo "<option value='{$staff['staff_id']}' $selected>{$staff['staff_name']}</option>";
                            }
                            echo "          </select>
                                            <button type='submit'>Assign Staff</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action='' method='post'>
                                            <input type='hidden' name='order_id' value='$order_id'>
                                            <select name='status'>
                                                <option value='Pending' " . ($order['status'] == 'Pending' ? 'selected' : '') . ">Pending</option>
                                                <option value='Completed' " . ($order['status'] == 'Completed' ? 'selected' : '') . ">Completed</option>
                                                <option value='Cancelled' " . ($order['status'] == 'Cancelled' ? 'selected' : '') . ">Cancelled</option>
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
    <script src="js/dashboard.js?v=<?= time(); ?>"></script>
</body>
</html>
