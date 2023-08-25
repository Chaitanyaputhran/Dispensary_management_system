<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
    exit; // Ensure the script stops execution after redirection
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    die();
}

$user = $_SESSION['user'];

// Fetch stock details including related medicine name
$query = "SELECT s.stock_id, s.quantity, s.medicine_id, s.expiry, m.medicine_name
          FROM stock s
          INNER JOIN medicine m ON s.medicine_id = m.medicine_id";
$result = $pdo->query($query);
$stocks = $result->fetchAll(PDO::FETCH_ASSOC);
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
    <div class="dashboardMainContainer" id="dashboardMainContainer">
        <?php include('partials/appsidebar.php')?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/apptopnav.php')?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <table>
                        <thead>
                            <tr>
                                <th>Stock ID</th>
                                <th>Medicine Name</th>
                                <th>Quantity</th>
                                <th>Expiry</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($stocks as $stock) : ?>
                                <tr>
                                    <td><?= $stock['stock_id'] ?></td>
                                    <td><?= $stock['medicine_name'] ?></td>
                                    <td><?= $stock['quantity'] ?></td>
                                    <td><?= $stock['expiry'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
