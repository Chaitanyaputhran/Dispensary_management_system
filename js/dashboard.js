


    var sideBarIsOpen = true;
    var togglebutton = document.getElementById('togglebutton');
    togglebutton.addEventListener('click', (event) => {
        event.preventDefault();
        var dashboard_sidebar = document.getElementById('dashboard_sidebar');
        var dashboard_content_container = document.getElementById('dashboard_content_container');
        var dashboard_logo = document.getElementById('dashboard_logo');
        var userimage = document.getElementById('userimage');
        var menuicons = document.getElementsByClassName('menutext');

        if (sideBarIsOpen) {
            dashboard_sidebar.style.width = '10%';
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userimage.style.width = '60px';

            for (let i = 0; i < menuicons.length; i++) {
                menuicons[i].style.display = 'none';
            }

            document.querySelector('.dashboard_menu_lists').style.textAlign = 'center';
            sideBarIsOpen = false;
        } else {
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userimage.style.width = '80px';

            for (let i = 0; i < menuicons.length; i++) {
                menuicons[i].style.display = 'inline-block';
            }

            document.querySelector('.dashboard_menu_lists').style.textAlign = 'left';
            sideBarIsOpen = true;
        }
    });
    
    document.addEventListener('click', function(e) {
        let clickedEl = e.target;

        if (clickedEl.classList.contains('showhidesubmenu')) {

            let submenu = clickedEl.closest('li').querySelector('.submenus');
            let mainmenuicon = clickedEl.closest('li').querySelector('.maimmenuarrowicon');
            //close all submenus.


            let submenus = document.querySelectorAll('.submenus');
            submenus.forEach((sub) => {
                if(submenu !== sub) sub.style.display='none';
            });


            

            if (submenu != null) {
                
               
                if(submenu.style.display === 'block') 
                {
                    submenu.style.display = 'none';
                    mainmenuicon.classList.remove('fa-angle-up');
                    mainmenuicon.classList.add('fa-angle-down');
            } else {
                submenu.style.display = 'block';
                mainmenuicon.classList.remove('fa-angle-down');
                mainmenuicon.classList.add('fa-angle-up');
        }
               
            }
        }
    });

    //Add /hide active class to menu

    //get current page
    //use selecter to get the current or submenu
    //add the active class
    let pathArray = window.location.pathname.split('/');
    let curFile = pathArray[pathArray.length-1];

    let curNav = document.querySelector('a[href="./' + curFile +'"]');

    let mainnav = curNav.closest('li.limainmenu');

    mainnav.style.background= '#f685a1';

    
    console.log(mainnav);
