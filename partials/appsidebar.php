
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
                    
                <a href="javascript:void(0);" class="showhidesubmenu" >
                        <i class="fa fa-truck showhidesubmenu" ></i>
                        <span class="menutext showhidesubmenu" > Stock</span>
                        <i class="fa fa-angle-down maimmenuarrowicon showhidesubmenu" ></i>
                    </a>
                    <ul class="submenus" >
                    <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;">
                            <a href="./stocks.php">
                                <i class="fa fa-circle-o" style="font-size:16px; width:16px;"></i>
                                <span class="menutext"> View Stock</span>
                            </a>
                        </li>
                        <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;">
                            <a href="">
                                <i class="fa fa-circle-o" style="font-size:16px;  width:16px;"></i>
                                <span class="menutext"> Add item</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="limainmenu">
                
                    <a href="javascript:void(0);" class="showhidesubmenu" >
                        <i class="fa fa-user-plus showhidesubmenu" ></i>
                        <span class="menutext showhidesubmenu" > Staff</span>
                        <i class="fa fa-angle-down maimmenuarrowicon showhidesubmenu" ></i>
                    </a>
                    <ul class="submenus" >
                    <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;">
                            <a href="">
                                <i class="fa fa-circle-o" style="font-size:16px; width:16px;"></i>
                                <span class="menutext"> View staff</span>
                            </a>
                        </li>
                        <li class="submenulink" style="
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    text-transform: none !important;">
                            <a href="">
                                <i class="fa fa-circle-o" style="font-size:16px;  width:16px;"></i>
                                <span class="menutext"> Add staff</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="limainmenu showhidesubmenu" >
                    <a href="./user_add.php" class="showhidesubmenu" >
                        <i class="fa fa-user-plus showhidesubmenu" ></i>
                        <span class="menutext showhidesubmenu" >Add user</span>
                        
                    </a>
                   
                </li>
            </ul>
        </div>
    </div>

  