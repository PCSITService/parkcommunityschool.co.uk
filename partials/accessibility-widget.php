<!-- Accessibility Widget -->
<div id="accessibility-widget">
    <button id="accessibility-toggle" aria-label="Accessibility options" title="Accessibility options">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9H15V22H13V16H11V22H9V9H3V7H21V9Z"/>
        </svg>
    </button>
    
    <div id="accessibility-panel" class="accessibility-panel" role="dialog" aria-label="Accessibility settings">
        <div class="accessibility-header">
            <h3>Accessibility</h3>
            <button id="accessibility-close" aria-label="Close accessibility panel">&times;</button>
        </div>
        
        <div class="accessibility-options">
            <!-- Text Size -->
            <div class="accessibility-option">
                <span class="option-label">Text Size</span>
                <div class="option-controls">
                    <button id="text-decrease" aria-label="Decrease text size">A-</button>
                    <button id="text-reset" aria-label="Reset text size">A</button>
                    <button id="text-increase" aria-label="Increase text size">A+</button>
                </div>
            </div>
            
            <!-- High Contrast -->
            <div class="accessibility-option">
                <span class="option-label">High Contrast</span>
                <div class="option-controls">
                    <button id="contrast-toggle" aria-pressed="false">Off</button>
                </div>
            </div>
            
            <!-- Dyslexia Font -->
            <div class="accessibility-option">
                <span class="option-label">Dyslexia Friendly</span>
                <div class="option-controls">
                    <button id="dyslexia-toggle" aria-pressed="false">Off</button>
                </div>
            </div>
            
            <!-- Link Highlighting -->
            <div class="accessibility-option">
                <span class="option-label">Highlight Links</span>
                <div class="option-controls">
                    <button id="links-toggle" aria-pressed="false">Off</button>
                </div>
            </div>
            
            <!-- Reset All -->
            <div class="accessibility-option reset-option">
                <button id="accessibility-reset" class="reset-btn">Reset All Settings</button>
            </div>
        </div>
    </div>
</div>

<style>
/* Accessibility Widget Styles */
#accessibility-widget {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 9999;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
}

#accessibility-toggle {
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
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    transition: all 0.3s ease;
}

#accessibility-toggle:hover {
    background: #a3cd42;
    transform: scale(1.1);
}

#accessibility-toggle:focus-visible {
    outline: 3px solid #a3cd42;
    outline-offset: 3px;
}

#accessibility-toggle svg {
    width: 24px;
    height: 24px;
}

.accessibility-panel {
    position: absolute;
    bottom: 60px;
    left: 0;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    width: 280px;
    display: none;
    overflow: hidden;
}

.accessibility-panel.active {
    display: block;
    animation: slideUp 0.3s ease;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.accessibility-header {
    background: #333;
    color: #fff;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.accessibility-header h3 {
    margin: 0;
    font-size: 1.1rem;
    font-weight: 600;
    color: #fff;
}

#accessibility-close {
    background: none;
    border: none;
    color: #fff;
    font-size: 1.5rem;
    cursor: pointer;
    padding: 0;
    line-height: 1;
    opacity: 0.8;
}

#accessibility-close:hover {
    opacity: 1;
}

.accessibility-options {
    padding: 15px 20px;
}

.accessibility-option {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}

.accessibility-option:last-child {
    border-bottom: none;
}

.option-label {
    font-size: 0.95rem;
    color: #333;
    font-weight: 500;
}

.option-controls {
    display: flex;
    gap: 5px;
}

.option-controls button {
    padding: 8px 12px;
    border: 1px solid #ddd;
    background: #f8f9fa;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.2s ease;
    color: #333;
}

.option-controls button:hover {
    background: #e9ecef;
    border-color: #ccc;
}

.option-controls button:focus-visible {
    outline: 2px solid #a3cd42;
    outline-offset: 2px;
}

.option-controls button.active {
    background: #a3cd42;
    color: #fff;
    border-color: #a3cd42;
}

.reset-option {
    justify-content: center;
    padding-top: 15px;
}

.reset-btn {
    width: 100%;
    padding: 10px 20px !important;
    background: #dc3545 !important;
    color: #fff !important;
    border: none !important;
    border-radius: 6px;
    font-weight: 600;
}

.reset-btn:hover {
    background: #c82333 !important;
}

/* High Contrast Mode */
body.high-contrast {
    background: #000 !important;
    color: #fff !important;
}

body.high-contrast * {
    background-color: #000 !important;
    color: #fff !important;
    border-color: #fff !important;
}

body.high-contrast a {
    color: #ffff00 !important;
}

body.high-contrast img {
    filter: grayscale(100%) contrast(120%);
}

body.high-contrast #accessibility-widget,
body.high-contrast #accessibility-toggle,
body.high-contrast .accessibility-panel,
body.high-contrast .accessibility-panel * {
    background-color: revert !important;
    color: revert !important;
    border-color: revert !important;
}

/* Dyslexia Friendly Font */
body.dyslexia-font,
body.dyslexia-font * {
    font-family: 'OpenDyslexic', 'Comic Sans MS', sans-serif !important;
    letter-spacing: 0.05em;
    word-spacing: 0.1em;
    line-height: 1.8 !important;
}

/* Highlight Links */
body.highlight-links a {
    background: #ffff00 !important;
    color: #000 !important;
    padding: 2px 4px;
    text-decoration: underline !important;
}

/* Text Size Classes */
body.text-size-1 { font-size: 90%; }
body.text-size-2 { font-size: 100%; }
body.text-size-3 { font-size: 110%; }
body.text-size-4 { font-size: 120%; }
body.text-size-5 { font-size: 130%; }

/* Mobile adjustments */
@media (max-width: 768px) {
    #accessibility-widget {
        bottom: 15px;
        left: 15px;
    }
    
    #accessibility-toggle {
        width: 45px;
        height: 45px;
    }
    
    .accessibility-panel {
        width: 260px;
        left: 0;
        right: auto;
    }
}

/* Reduced motion */
@media (prefers-reduced-motion: reduce) {
    .accessibility-panel.active {
        animation: none;
    }
    
    #accessibility-toggle {
        transition: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('accessibility-toggle');
    const panel = document.getElementById('accessibility-panel');
    const closeBtn = document.getElementById('accessibility-close');
    
    // Load saved preferences
    loadPreferences();
    
    // Toggle panel
    toggle.addEventListener('click', function() {
        panel.classList.toggle('active');
    });
    
    // Close panel
    closeBtn.addEventListener('click', function() {
        panel.classList.remove('active');
    });
    
    // Close on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && panel.classList.contains('active')) {
            panel.classList.remove('active');
            toggle.focus();
        }
    });
    
    // Close when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('#accessibility-widget')) {
            panel.classList.remove('active');
        }
    });
    
    // Text Size Controls
    let textSize = parseInt(localStorage.getItem('a11y-text-size')) || 2;
    
    document.getElementById('text-decrease').addEventListener('click', function() {
        if (textSize > 1) {
            textSize--;
            updateTextSize();
        }
    });
    
    document.getElementById('text-increase').addEventListener('click', function() {
        if (textSize < 5) {
            textSize++;
            updateTextSize();
        }
    });
    
    document.getElementById('text-reset').addEventListener('click', function() {
        textSize = 2;
        updateTextSize();
    });
    
    function updateTextSize() {
        document.body.classList.remove('text-size-1', 'text-size-2', 'text-size-3', 'text-size-4', 'text-size-5');
        document.body.classList.add('text-size-' + textSize);
        localStorage.setItem('a11y-text-size', textSize);
    }
    
    // High Contrast Toggle
    const contrastBtn = document.getElementById('contrast-toggle');
    contrastBtn.addEventListener('click', function() {
        document.body.classList.toggle('high-contrast');
        const isActive = document.body.classList.contains('high-contrast');
        this.textContent = isActive ? 'On' : 'Off';
        this.classList.toggle('active', isActive);
        this.setAttribute('aria-pressed', isActive);
        localStorage.setItem('a11y-high-contrast', isActive);
    });
    
    // Dyslexia Font Toggle
    const dyslexiaBtn = document.getElementById('dyslexia-toggle');
    dyslexiaBtn.addEventListener('click', function() {
        document.body.classList.toggle('dyslexia-font');
        const isActive = document.body.classList.contains('dyslexia-font');
        this.textContent = isActive ? 'On' : 'Off';
        this.classList.toggle('active', isActive);
        this.setAttribute('aria-pressed', isActive);
        localStorage.setItem('a11y-dyslexia', isActive);
    });
    
    // Highlight Links Toggle
    const linksBtn = document.getElementById('links-toggle');
    linksBtn.addEventListener('click', function() {
        document.body.classList.toggle('highlight-links');
        const isActive = document.body.classList.contains('highlight-links');
        this.textContent = isActive ? 'On' : 'Off';
        this.classList.toggle('active', isActive);
        this.setAttribute('aria-pressed', isActive);
        localStorage.setItem('a11y-highlight-links', isActive);
    });
    
    // Reset All
    document.getElementById('accessibility-reset').addEventListener('click', function() {
        // Remove all classes
        document.body.classList.remove('high-contrast', 'dyslexia-font', 'highlight-links');
        document.body.classList.remove('text-size-1', 'text-size-2', 'text-size-3', 'text-size-4', 'text-size-5');
        
        // Reset text size
        textSize = 2;
        document.body.classList.add('text-size-2');
        
        // Reset buttons
        contrastBtn.textContent = 'Off';
        contrastBtn.classList.remove('active');
        contrastBtn.setAttribute('aria-pressed', 'false');
        
        dyslexiaBtn.textContent = 'Off';
        dyslexiaBtn.classList.remove('active');
        dyslexiaBtn.setAttribute('aria-pressed', 'false');
        
        linksBtn.textContent = 'Off';
        linksBtn.classList.remove('active');
        linksBtn.setAttribute('aria-pressed', 'false');
        
        // Clear storage
        localStorage.removeItem('a11y-text-size');
        localStorage.removeItem('a11y-high-contrast');
        localStorage.removeItem('a11y-dyslexia');
        localStorage.removeItem('a11y-highlight-links');
    });
    
    // Load saved preferences
    function loadPreferences() {
        // Text size
        const savedSize = localStorage.getItem('a11y-text-size');
        if (savedSize) {
            textSize = parseInt(savedSize);
            document.body.classList.add('text-size-' + textSize);
        }
        
        // High contrast
        if (localStorage.getItem('a11y-high-contrast') === 'true') {
            document.body.classList.add('high-contrast');
            contrastBtn.textContent = 'On';
            contrastBtn.classList.add('active');
            contrastBtn.setAttribute('aria-pressed', 'true');
        }
        
        // Dyslexia font
        if (localStorage.getItem('a11y-dyslexia') === 'true') {
            document.body.classList.add('dyslexia-font');
            dyslexiaBtn.textContent = 'On';
            dyslexiaBtn.classList.add('active');
            dyslexiaBtn.setAttribute('aria-pressed', 'true');
        }
        
        // Highlight links
        if (localStorage.getItem('a11y-highlight-links') === 'true') {
            document.body.classList.add('highlight-links');
            linksBtn.textContent = 'On';
            linksBtn.classList.add('active');
            linksBtn.setAttribute('aria-pressed', 'true');
        }
    }
});
</script>
