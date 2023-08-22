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
                <form action="database/user_add.php" method="POST" class="appForm">
                        <div>
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" required/>
                        </div>
                        <div>
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" required/>
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required/>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required/>
                        </div>
                        <!---<div>
                            <label for="created_at">Created At</label>
                            <input type="text" id="created_at" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly/>
                        </div>
                        <div>
                            <label for="updated_at">Updated At</label>
                            <input type="text" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly/>
                        </div>
                        <div>--->
                            <button type="submit"><i class="fa fa-send"></i>Add User</button>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dashboard.js" >
   
</script>
    
</body>
</html>