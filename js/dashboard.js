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
//add event to ahow/hide function.
document.addEventListener('click', function(e){
    let clickedEl = e.target;

    if(clickedEl.classList.contains('limainmenu_link')){
        alert('main menu');
    }
    console.log(clickedEl);


});

console.log(document.querySelectorAll('.limainmenu_link'));
