// Mobile Menu Toggle Functionality
// File: js/mobile-menu.js
// Park Community School

function toggleMobileMenu() {
    const menu = document.getElementById('main-navigation');
    const toggle = document.querySelector('.mobile-menu-toggle');
    
    if (menu.classList.contains('show')) {
        menu.classList.remove('show');
        toggle.classList.remove('active');
    } else {
        menu.classList.add('show');
        toggle.classList.add('active');
    }
}

// Set up event listeners when page loads
document.addEventListener('DOMContentLoaded', function() {
    
    // Add click event to mobile menu toggle
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', toggleMobileMenu);
    }
    
    // Close mobile menu when clicking on a navigation link
    const menuLinks = document.querySelectorAll('#main-navigation li a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            const menu = document.getElementById('main-navigation');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            // Only close if we're in mobile view
            if (window.innerWidth < 768) {
                menu.classList.remove('show');
                toggle.classList.remove('active');
            }
        });
    });
    
    // Handle dropdown behavior
    const dropdowns = document.querySelectorAll('.custom-dropdown');
    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('mouseenter', function() {
            this.classList.add('open');
        });
        
        dropdown.addEventListener('mouseleave', function() {
            this.classList.remove('open');
        });
    });
});

// Ensure menu is properly displayed when resizing from mobile to desktop
window.addEventListener('resize', function() {
    const menu = document.getElementById('main-navigation');
    const toggle = document.querySelector('.mobile-menu-toggle');
    
    if (window.innerWidth >= 768) {
        // Desktop view - ensure menu is visible and reset mobile classes
        menu.classList.remove('show');
        toggle.classList.remove('active');
    }
});