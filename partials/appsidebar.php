
    <div class="dashboard_sidebar" id="dashboard_sidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">DMS</h3>
        <div class="dashboard_sidebar_user">
            <img src="./images/user/dms.jpg" alt="user image" id="userimage" />
            <span><?=$user['firstname'] .' '.$user['lastname'] ?></span>
        </div>
        <div class="dashboard_sidebar_menus">
            <ul class="dashboard_menu_lists">
                <li class="limainmenu">
                    <a href="./dashboard.php">
                        <i class="fa fa-dashboard "></i>
                        <span class="menutext">Dashboard</span>
                    </a>
                </li>
                <li class="limainmenu">
                    <a href="#">
                        <i class="fa fa-dashboard "></i>
                        <span class="menutext">Stock</span>
                    </a>
                </li>
                <li class="limainmenu">
                    <a href="#">
                        <i class="fa fa-dashboard "></i>
                        <span class="menutext">Staff</span>
                    </a>
                </li>
                <li class="limainmenu showhidesubmenu" data-submenu="user">
                    <a href="javascript:void(0);" class="showhidesubmenu" data-submenu="user">
                        <i class="fa fa-user-plus showhidesubmenu" data-submenu="user"></i>
                        <span class="menutext showhidesubmenu" data-submenu="user"> user</span>
                        <i class="fa fa-angle-down maimmenuarrowicon showhidesubmenu" data-submenu="user"></i>
                    </a>
                    <ul class="submenus" id="user">
                    <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;">
                            <a href="">
                                <i class="fa fa-circle-o" style="font-size:16px; width:16px;"></i>
                                <span class="menutext"> View user</span>
                            </a>
                        </li>
                        <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;">
                            <a href="">
                                <i class="fa fa-circle-o" style="font-size:16px;  width:16px;"></i>
                                <span class="menutext"> Add user</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

  