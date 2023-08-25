// Improved code for sidebar toggle and submenu behavior

var sideBarIsOpen = true;
var toggleButton = document.getElementById('togglebutton');

toggleButton.addEventListener('click', function(event) {
    event.preventDefault();
    var dashboardSidebar = document.getElementById('dashboard_sidebar');
    var dashboardContentContainer = document.getElementById('dashboard_content_container');
    var dashboardLogo = document.getElementById('dashboard_logo');
    var userImage = document.getElementById('userimage');
    var menuIcons = document.getElementsByClassName('menutext');

    if (sideBarIsOpen) {
        dashboardSidebar.style.width = '10%';
        dashboardContentContainer.style.width = '90%';
        dashboardLogo.style.fontSize = '60px';
        userImage.style.width = '60px';

        for (let i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = 'none';
        }

        document.querySelector('.dashboard_menu_lists').style.textAlign = 'center';
        sideBarIsOpen = false;
    } else {
        dashboardSidebar.style.width = '20%';
        dashboardContentContainer.style.width = '80%';
        dashboardLogo.style.fontSize = '80px';
        userImage.style.width = '80px';

        for (let i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = 'inline-block';
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
        let submenus = document.querySelectorAll('.submenus');

        submenus.forEach(function(sub) {
            if (submenu !== sub) {
                sub.style.display = 'none';
                let otherMenuIcon = sub.closest('li').querySelector('.maimmenuarrowicon');
                otherMenuIcon.classList.remove('fa-angle-up');
                otherMenuIcon.classList.add('fa-angle-down');
            }
        });

        if (submenu != null) {
            if (submenu.style.display === 'block') {
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




function setActiveMenu() {
    let pathArray = window.location.pathname.split('/');
    let curFile = pathArray[pathArray.length - 1];

    let curNav = document.querySelector('a[href="./' + curFile + '"]');
    let mainnav = curNav.closest('li.limainmenu');

    mainnav.style.background = '#f685a1';
}

// Call the setActiveMenu function when the page loads
document.addEventListener('DOMContentLoaded', setActiveMenu);
