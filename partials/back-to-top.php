<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" aria-label="Back to top" title="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<style>
.back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #333;
    color: #fff;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    z-index: 9998;
}

.back-to-top.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.back-to-top:hover {
    background: #a3cd42;
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(163, 205, 66, 0.4);
}

.back-to-top:focus-visible {
    outline: 3px solid #a3cd42;
    outline-offset: 3px;
}

/* Mobile adjustment */
@media (max-width: 768px) {
    .back-to-top {
        bottom: 15px;
        right: 15px;
        width: 45px;
        height: 45px;
    }
}

/* Reduced motion */
@media (prefers-reduced-motion: reduce) {
    .back-to-top {
        transition: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const backToTop = document.getElementById('backToTop');
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });
    
    // Smooth scroll to top
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Keyboard support
    backToTop.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            this.click();
        }
    });
});
</script>
