<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit; // Ensure the script stops execution after redirection
}

require_once './database/connection.php'; // Include your database connection

$user = $_SESSION['user'];

// Fetch stock details including related medicine name
$query = "SELECT s.stock_id, s.quantity, s.medicine_id, s.expiry, m.medicine_name,s.image_path
          FROM stocks s
          INNER JOIN medicines m ON s.medicine_id = m.medicine_id";
$result = $conn->query($query);
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
                <div class="dashboard_content_main product-grid">
                    <?php foreach ($stocks as $stock) : ?>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="<?= $stock['image_path'] ?>" alt="Stock Image">
                            </div>
                            <div class="product-details">
                                <h2><?= $stock['medicine_name'] ?></h2>
                                <p>Stock ID: <?= $stock['stock_id'] ?></p>
                                <p>Quantity: <?= $stock['quantity'] ?></p>
                                <p>Expiry: <?= $stock['expiry'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dashboard.js?v=<?= time(); ?>"></script>
</body>
</html>

