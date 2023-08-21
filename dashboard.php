<?php
//start the session
session_start();
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
        <div class="dashboard_sidebar" id ="dashboard_sidebar">
            <h3 class = "dashboard_logo" id="dashboard_logo">DMS</h3>
            <div class ="dashboard_sidebar_user">
                <img src="./images/user/dms.jpg" alt="user image" id="userimage"/>
                <span ><?=$user['firstname'] .' '.$user['lastname'] ?></span>

            </div>
            <div class ="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists" >
                    <li class="menuactive">
                        <a href="" ><i class="fa fa-dashboard "></i><span class="menutext">Dashboard</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dashboard "></i><span class="menutext">Dashboard</span></a>
                    </li>

                </ul>

            </div>
        </div>
        <div class = "dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_content_topNav">
                
                <a href="" id="togglebutton"><i class="fa fa-navicon"></i></a>
                <a href="/database/logout.php" id="logoutButton"><i class="fa fa-power-off"></i>Log-out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    
                </div>
            </div>

        </div>
    </div>
    <script >
    var sideBarIsOpen='true';
togglebutton.addEventListener('click',(event) =>{
    event.preventDefault();
    if(sideBarIsOpen){
    dashboard_sidebar.style.width='10%';
    dashboard_sidebar.style.transition='0.3s all';
    dashboard_content_container.style.width='90%';
    dashboard_logo.style.fontsize= '60px';
    userimage.style.width='60px';
    menuicons=document.getElementsByClassName('menutext');
    for(var i=0;i<menuicons.length;i++){
    menuicons[i].style.display='none';
    }
    document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign='center';
    sideBarIsOpen=false;}else{
        dashboard_sidebar.style.width='20%';
    dashboard_content_container.style.width='80%';
    dashboard_logo.style.fontsize= '80px';
    userimage.style.width='80px';
    menuicons=document.getElementsByClassName('menutext');
    for(var i=0;i<menuicons.length;i++){
    menuicons[i].style.display='inline-block';
    }
    document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign='left';
    sideBarIsOpen=true;
    }
    
});
</script>
    
</body>
</html>