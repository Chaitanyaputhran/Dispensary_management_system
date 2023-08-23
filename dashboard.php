<?php
//start the session
session_start();
if(!isset($_SESSION['user'])) header('location:login.php');


$user = ($_SESSION['user']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
    <link rel="stylesheet" href="css/dasboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div class="dashboardMainContainer" id="dashboardMainContainer">
        <?php include('partials/appsidebar.php')?>
       
        <div class = "dashboard_content_container" id="dashboard_content_container">
        <?php include('partials/apptopnav.php')?>
           
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    
                </div>
            </div>

        </div>
    </div>
    <script src="js/dashboard.js" >
    
</script>
    
</body>
</html>