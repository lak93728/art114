<?php
// includes/footer.php
?>
    <!-- close app-shell from nav include -->
</div> <!-- .app-shell -->

<footer class="site-footer">
    <div class="footer-left">BluePeak Trading</div>
    <div class="footer-right">Mock app • For class project</div>
</footer>

<script>
/* Theme toggle + active link handling */
(function () {
    const body = document.documentElement;
    const switchBtn = document.getElementById('themeSwitch');
    const stored = localStorage.getItem('bp-theme');
    if (stored === 'light') body.classList.remove('theme-dark');
    else body.classList.add('theme-dark');

    function updateSwitchState() {
        const isDark = body.classList.contains('theme-dark');
        if (switchBtn) {
            switchBtn.setAttribute('aria-pressed', isDark ? 'true' : 'false');
            switchBtn.classList.toggle('on', isDark);
        }
    }
    updateSwitchState();

    if (switchBtn) {
        switchBtn.addEventListener('click', function () {
            body.classList.toggle('theme-dark');
            const isDark = body.classList.contains('theme-dark');
            localStorage.setItem('bp-theme', isDark ? 'dark' : 'light');
            updateSwitchState();
        });
    }

    // Mark active nav link based on current filename
    const links = document.querySelectorAll('.nav-link');
    const current = window.location.pathname.split('/').pop() || 'dashboard.php';
    links.forEach(a => {
        const href = a.getAttribute('href') || '';
        if (href === current || (href === 'dashboard.php' && current === 'index.php')) {
            a.classList.add('active');
        }
    });

    // Optional: hamburger toggles collapsed nav (for testing)
    const hamburger = document.querySelector('.hamburger');
    const leftNav = document.querySelector('.left-nav');
    if (hamburger && leftNav) {
        hamburger.addEventListener('click', () => leftNav.classList.toggle('collapsed'));
    }
})();
</script>

</body>
</html>