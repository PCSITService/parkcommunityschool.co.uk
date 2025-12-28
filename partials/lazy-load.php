<!-- Lazy Loading for Images -->
<script>
document.querySelectorAll('img').forEach(function(img) {
    if (!img.hasAttribute('loading')) {
        img.setAttribute('loading', 'lazy');
    }
});
</script>
