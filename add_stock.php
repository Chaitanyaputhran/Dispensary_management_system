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
    // Assuming you have form fields named 'medicine_id', 'quantity', 'expiry'
    $medicine_id = $_POST['medicine_id'];
    $quantity = $_POST['quantity'];
    $expiry = $_POST['expiry'];

    // Perform validation and sanitization of input fields here

    // Insert data into stocks table
    $insertQuery = "INSERT INTO stocks (medicine_id, quantity, expiry) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->execute([$medicine_id, $quantity, $expiry]);

    // Redirect to the dashboard or a success page
    header('location: stocks.php');
    exit;
}

// Fetch medicine details for dropdown selection
$medicineQuery = "SELECT medicine_id, medicine_name FROM medicines";
$medicineResult = $conn->query($medicineQuery);
$medicines = $medicineResult->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dasboard.css?v=< ? =time(); ? >">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
</head>
<body>
    <style>
        form {
    margin-top: 50px;
    align-items: center;
    margin-left:160px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="number"],
input[type="text"],
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    margin-left:90px;
}
.content{
    margin-top:40px;
    margin-left:250px;
    width:600px;
    height:500px;
    border:2px black solid;
    border-radius:30px;
     line-height: 1.5;
  font-weight: 400;

  color-scheme: light dark;
  align-items: center;
  
    
}
input[type="number"],
input[type="text"],
select {
    width: 280px;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    font-size: 14px;
    color: #333;
    transition: border-color 0.3s, background-color 0.3s;
    background-color:pink;
}


select option:hover {
    background-color: #f0f0f0;
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
                <a href="./add_medicine.php" class="button">Add Medicines</a>

                    <div class="content">
                    <center><h2>Add Item to Stocks</h2></center>
                    <form action="" method="post">
                        <label for="medicine_id">Medicine:</label>
                        <select name="medicine_id" id="medicine_id">
                            <?php foreach ($medicines as $medicine) : ?>
                                <option value="<?= $medicine['medicine_id'] ?>"><?= $medicine['medicine_name'] ?></option>
                            <?php endforeach; ?>
                        </select><br>
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" required><br>
                        <label for="expiry">Expiry:</label>
                        <input type="text" name="expiry" id="expiry" required><br>
                        <br>
                        <br>

                      <button type="submit">Add to Stocks</button>
                    </form>
                            </div>
                   

                </div>
            </div>
        </div>
    </div>
    <script src="js/dashboard.js?v=<?= time(); ?>"></script>
</body>
</html>
