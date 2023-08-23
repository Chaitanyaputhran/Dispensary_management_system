<div class="dashboard_sidebar" id ="dashboard_sidebar">
            <h3 class = "dashboard_logo" id="dashboard_logo">DMS</h3>
            <div class ="dashboard_sidebar_user">
                <img src="./images/user/dms.jpg" alt="user image" id="userimage"/>
                <span ><?=$user['firstname'] .' '.$user['lastname'] ?></span>

            </div>
            <div class ="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists" >
                    <!----class="menuactive"---->
                    <li class="limainmenu" >
                        <a href="./dashboard.php" ><i class="fa fa-dashboard "></i><span class="menutext">Dashboard</span></a>
                    </li>
                    <li class="limainmenu">
                        <a href="#"><i class="fa fa-dashboard "></i><span class="menutext">Stock</span></a>
                    </li>
                    <li class="limainmenu">
                        <a href="#"><i class="fa fa-dashboard "></i><span class="menutext">Staff</span></a>
                    </li>
                    <li class="limainmenu">
                        <a href="./user_add.php">
                            <i class="fa fa-user-plus "></i>
                            <span class="menutext"> user</span>
                            <i class="fa fa-angle-up "></i>
                    </a>
                        <ul class ="submenus">
                            <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;"><a href=""><i class="fa fa-circle-o " style="font-size:16px; width:16px;"></i><span class="menutext"> View user</span></a></li>
                            <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;"> <a href=""><i class="fa fa-circle-o " style="font-size:16px;  width:16px;"></i><span class="menutext"> Add user</span></a></li>
          

                    </li>
                   

                </ul>

            </div>
        </div>