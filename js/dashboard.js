


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
            let targetMenu = clickedEl.dataset.submenu;

            if (targetMenu != undefined) {
                let submenu = document.getElementById(targetMenu);
                if (submenu) {
                    submenu.style.height = '100%';
                }
            }
        }
    });