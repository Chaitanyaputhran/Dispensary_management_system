<div class="dashboard_sidebar" id ="dashboard_sidebar">
            <h3 class = "dashboard_logo" id="dashboard_logo">DMS</h3>
            <div class ="dashboard_sidebar_user">
                <img src="./images/user/dms.jpg" alt="user image" id="userimage"/>
                <span ><?=$user['firstname'] .' '.$user['lastname'] ?></span>

            </div>
            <div class ="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists" >
                    <!----class="menuactive"---->
                    <li >
                        <a href="./dashboard.php" ><i class="fa fa-dashboard "></i><span class="menutext">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="./user_add.php"><i class="fa fa-user-plus "></i><span class="menutext">Add user</span></a>
                    </li>
                    <li>
                        <a href="./user_add.php"><i class="fa fa-user-plus "></i><span class="menutext">Add user</span></a>
                    </li>

                </ul>

            </div>
        </div>