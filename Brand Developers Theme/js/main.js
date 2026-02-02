document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll('header .bdmenu li.menu-item-has-children > a');

    menuItems.forEach(function(menuItem) {
        menuItem.addEventListener('click', function(event) {
            event.preventDefault();
            var parentLi = this.parentElement;

            // Toggle the open class on the clicked menu item
            parentLi.classList.toggle('open');

            // Close other open submenus
            menuItems.forEach(function(item) {
                if (item !== menuItem && item.parentElement.classList.contains('open')) {
                    item.parentElement.classList.remove('open');
                }
            });
        });
    });
});

document.querySelectorAll('.menu-item-has-children > a').forEach(item => {
    item.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        const parent = this.parentElement;

        // Toggle the active state
        parent.classList.toggle('active');

        // Optionally close other open submenus
        document.querySelectorAll('.menu-item-has-children.active').forEach(activeItem => {
            if (activeItem !== parent) {
                activeItem.classList.remove('active');
            }
        });
    });
});
