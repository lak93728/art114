<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/nav.php'; ?>

<main class="main-content">
  <h1 class="dashboard-title">Alerts & Messages</h1>
  
  <div class="alerts-container">
    <!-- Price Alerts Box -->
    <div class="alerts-box">
      <h2>PRICE ALERTS</h2>
      <div class="settings-divider"></div>
      
      <!-- Alert Item 1 -->
      <div class="alert-item">
        <span class="alert-dot"></span>
        <span class="alert-symbol">AAPL</span>
        <span class="alert-message">Apple's price moved above your custom alert threshold.</span>
        <span class="alert-detail">AAPL crossed above $250.00</span>
        <span class="alert-time">10 minutes ago</span>
        <span class="alert-close">×</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- Alert Item 2 -->
      <div class="alert-item">
        <span class="alert-dot"></span>
        <span class="alert-symbol">TSLA</span>
        <span class="alert-message">Tesla stock reached your target price.</span>
        <span class="alert-detail">TSLA crossed above $300.00</span>
        <span class="alert-time">25 minutes ago</span>
        <span class="alert-close">×</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- Alert Item 3 -->
      <div class="alert-item">
        <span class="alert-dot"></span>
        <span class="alert-symbol">MSFT</span>
        <span class="alert-message">Microsoft price alert triggered.</span>
        <span class="alert-detail">MSFT crossed above $400.00</span>
        <span class="alert-time">1 hour ago</span>
        <span class="alert-close">×</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- Alert Item 4 - READ (gray dot) -->
      <div class="alert-item">
        <span class="alert-dot-read"></span>
        <span class="alert-symbol">GOOGL</span>
        <span class="alert-message">Google reached your price target.</span>
        <span class="alert-detail">GOOGL crossed above $150.00</span>
        <span class="alert-time">2 hours ago</span>
        <span class="alert-close">×</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- Alert Item 5 - READ (gray dot) -->
      <div class="alert-item">
        <span class="alert-dot-read"></span>
        <span class="alert-symbol">AMZN</span>
        <span class="alert-message">Amazon price alert triggered.</span>
        <span class="alert-detail">AMZN crossed above $180.00</span>
        <span class="alert-time">3 hours ago</span>
        <span class="alert-close">×</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- Alert Item 6 - READ (gray dot) -->
      <div class="alert-item">
        <span class="alert-dot-read"></span>
        <span class="alert-symbol">NVDA</span>
        <span class="alert-message">NVIDIA reached your custom threshold.</span>
        <span class="alert-detail">NVDA crossed above $500.00</span>
        <span class="alert-time">4 hours ago</span>
        <span class="alert-close">×</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- Alert Item 7 - READ (gray dot) -->
      <div class="alert-item">
        <span class="alert-dot-read"></span>
        <span class="alert-symbol">META</span>
        <span class="alert-message">Meta price alert triggered.</span>
        <span class="alert-detail">META crossed above $350.00</span>
        <span class="alert-time">5 hours ago</span>
        <span class="alert-close">×</span>
      </div>
      
      <div class="settings-divider"></div>
      
    </div>
    
    <!-- System Messages Box -->
    <div class="alerts-box">
      <h2>SYSTEM MESSAGES</h2>
      <div class="settings-divider"></div>
      
      <!-- System Message 1 -->
      <div class="system-message-item">
        <span class="system-icon">!</span>
        <span class="system-message-text">Your account statement for January is now available</span>
        <span class="system-time">10 minutes ago</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- System Message 2 -->
      <div class="system-message-item">
        <span class="system-icon">✓</span>
        <span class="system-message-text">Your password was successfully updated</span>
        <span class="system-time">1 hour ago</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- System Message 3 -->
      <div class="system-message-item">
        <span class="system-icon">!</span>
        <span class="system-message-text">Scheduled maintenance on February 20th from 2-4 AM EST</span>
        <span class="system-time">2 hours ago</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- System Message 4 -->
      <div class="system-message-item">
        <span class="system-icon">✓</span>
        <span class="system-message-text">Two-factor authentication has been enabled for your account</span>
        <span class="system-time">3 hours ago</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- System Message 5 -->
      <div class="system-message-item">
        <span class="system-icon">!</span>
        <span class="system-message-text">New security features are now available in Settings</span>
        <span class="system-time">5 hours ago</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- System Message 6 -->
      <div class="system-message-item">
        <span class="system-icon">✓</span>
        <span class="system-message-text">Your trade order for 50 shares of AAPL has been executed</span>
        <span class="system-time">1 day ago</span>
      </div>
      
      <div class="settings-divider"></div>
      
      <!-- System Message 7 -->
      <div class="system-message-item">
        <span class="system-icon">!</span>
        <span class="system-message-text">Market will be closed on February 17th for Presidents' Day</span>
        <span class="system-time">2 days ago</span>
      </div>
      
      <div class="settings-divider"></div>
      
    </div>
  </div>
  
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/footer.php'; ?>