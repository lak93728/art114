<nav class="sidebar">

  <div class="top-nav">
    <div class="logo-area">
      <img src="/art114/project1/images/bluepeak-logo-1.png" alt="BluePeak Logo" class="logo">
    </div>

    <ul class="nav-links">
      <li><a href="/art114/project1/dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">Dashboard</a></li>
      <li><a href="/art114/project1/portfolio.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>">Portfolio</a></li>
      <li><a href="/art114/project1/stocks.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'stocks.php' ? 'active' : ''; ?>">Stock Detail</a></li>
      <li><a href="/art114/project1/alerts.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'alerts.php' ? 'active' : ''; ?>">Alerts & Messages</a></li>
      <li><a href="/art114/project1/settings.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : ''; ?>">Settings</a></li>
    </ul>
  </div>

  <div class="theme-toggle">
    <span class="theme-label">Light</span>

    <label class="switch">
      <input type="checkbox" id="theme-switch">
      <span class="slider"></span>
    </label>

    <span class="theme-label">Dark</span>
  </div>

  <script src="/art114/project1/script.js"></script>

</nav>