<?php
// includes/nav.php
// Left vertical nav + top bar (shared across pages)
?>
<!-- Top bar -->
<header class="top-bar">
    <div class="top-left">
        <button class="hamburger" aria-label="Toggle nav">☰</button>
        <div class="app-name">BluePeak</div>
    </div>

    <div class="top-center">
        <input class="search-input" placeholder="Search by company or ticker" aria-label="Search">
    </div>

    <div class="top-right">
        <div class="user-meta">
            <span class="user-name">Lacie</span>
            <button class="logout">Logout</button>
        </div>
    </div>
</header>

<!-- App shell -->
<div class="app-shell">

    <!-- Left vertical nav -->
    <nav class="left-nav" aria-label="Primary navigation">
        <div class="nav-top">
            <div class="logo-wrap">
                <div class="logo-mark">BP</div>
                <div class="logo-text">BluePeak</div>
            </div>

            <div class="nav-divider" role="separator" aria-hidden="true"></div>
        </div>

        <ul class="nav-links" role="menu">
            <li role="none"><a role="menuitem" href="dashboard.php" class="nav-link" data-key="dashboard">Dashboard</a></li>
            <li role="none"><a role="menuitem" href="portfolio.php" class="nav-link" data-key="portfolio">Portfolio</a></li>
            <li role="none"><a role="menuitem" href="stock.php" class="nav-link" data-key="stock">Stock Detail</a></li>
            <li role="none"><a role="menuitem" href="alerts.php" class="nav-link" data-key="alerts">Alerts & Messages</a></li>
            <li role="none"><a role="menuitem" href="settings.php" class="nav-link" data-key="settings">Settings</a></li>
        </ul>

        <div class="nav-bottom">
            <div class="theme-toggle">
                <label class="toggle-label">Light</label>
                <button id="themeSwitch" class="theme-switch" aria-pressed="false" title="Toggle light/dark mode">
                    <span class="switch-knob"></span>
                </button>
                <label class="toggle-label">Dark</label>
            </div>
        </div>
    </nav>

    <!-- Main content container begins in the page file -->