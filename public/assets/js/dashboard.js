
document.addEventListener('DOMContentLoaded', function() {
    // Toggle sidebar collapse
    const toggleArrow = document.querySelector('.menu-btn');
    const sidebar = document.querySelector('.sidebar');
    const brand = document.querySelector('.brand'); // Seleccionamos el header
    
    toggleArrow.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');

        // Si el header existe, también le agregamos la clase collapsed
        if (brand) {
            brand.classList.toggle('collapsed');
        }
    });
    
    // Toggle submenu for Categories
    const subMenuToggle = document.querySelector('.menu-item-dropdown .menu-link');
    const subMenu = document.querySelector('.sub-menu');
    
    subMenuToggle.addEventListener('click', function(e) {
        e.preventDefault();
        subMenu.classList.toggle('expanded');
        document.querySelector('.menu-item-dropdown').classList.toggle('active');
        
        // If sidebar is collapsed, expand it when submenu is toggled
        if (sidebar.classList.contains('collapsed')) {
            sidebar.classList.remove('collapsed');
            
            // También aseguramos que el header se muestre
            if (brand) {
                brand.classList.remove('collapsed');
            }
        }
    });
});

 
 
 
 
 
 const menuItemsDropDown = document.querySelectorAll('.menu-item-dropdown');
 const sidebar = document.getElementById('sidebar');
 const menuBtn = document.getElementById('menu-btn');

 menuBtn.addEventListener('click',()=>{
   sidebar.classList.toggle('minimize'); 
 });

 menuItemsDropDown.forEach((menuItem)=>{
    menuItem.addEventListener('click',()=>{
         const subMenu = menuItem.querySelector('.sub-menu');
         const isActive = menuItem.classList.toggle('sub-menu-toggle');
         if(subMenu){
             if(isActive){
                 subMenu.style.height =`${subMenu.scrollHeight +6}px`;
                subMenu.style.padding = '0.2rem 0';
            }else{
                    
                subMenu.style.height= '0';
                 subMenu.style.padding='0';
                
            }
         }
    });
 });
