document.addEventListener('DOMContentLoaded', function() {
    // Toggle sidebar
    const toggleBtn = document.querySelector('.toggle-btn');
    const sidebar = document.querySelector('.sidebar');

    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
    });

    // Toggle mobile menu
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');

    mobileMenuBtn.addEventListener('click', function() {
        sidebar.classList.toggle('mobile-open');
    });

    // Toggle submenu
    const navLinks = document.querySelectorAll('.nav-link[data-submenu]');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Get the submenu ID
            const submenuId = this.getAttribute('data-submenu');
            const submenu = document.getElementById(submenuId);

            // Toggle active class for the link
            this.classList.toggle('active');

            // Toggle open class for the submenu
            submenu.classList.toggle('open');
        });
    });

    // Add dark mode button to topbar
    const themeSwitch = document.createElement('div');
    themeSwitch.className = 'theme-switch';
    themeSwitch.innerHTML = '<i class="fas fa-moon"></i>';
    document.querySelector('.topbar').appendChild(themeSwitch);

    // Asegúrate de que el botón de modo oscuro funcione correctamente
    themeSwitch.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');

        // Cambia el ícono entre sol y luna
        const icon = this.querySelector('i');
        if (document.body.classList.contains('dark-mode')) {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        } else {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
        }

        // Guarda la preferencia en localStorage
        localStorage.setItem('dark-mode', document.body.classList.contains('dark-mode'));
    });

    // Verifica el estado inicial del modo oscuro
    if (localStorage.getItem('dark-mode') === 'true') {
        document.body.classList.add('dark-mode');
        const icon = themeSwitch.querySelector('i');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    }
});