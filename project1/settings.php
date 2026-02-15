<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/nav.php'; ?>

<main class="main-content">
  <h1 class="dashboard-title">Settings</h1>
  
  <div class="settings-container">
    <!-- Left Column: Notifications -->
    <div class="settings-notifications">
      <h2>NOTIFICATIONS</h2>
      <div class="settings-divider"></div>
      
      <!-- Price Alerts -->
      <div class="notification-item">
        <label class="checkbox-container">
          <input type="checkbox" class="settings-checkbox">
          <span class="checkmark"></span>
        </label>
        <div class="notification-text">
          <div class="notification-title">Price Alerts</div>
          <div class="notification-description">Get notified when stocks reach target prices</div>
        </div>
      </div>

      <!-- Divider -->
      <div class="notification-divider"></div>

      <!-- Order Confirmations -->
      <div class="notification-item">
        <label class="checkbox-container">
          <input type="checkbox" class="settings-checkbox">
          <span class="checkmark"></span>
        </label>
        <div class="notification-text">
          <div class="notification-title">Order Confirmations</div>
          <div class="notification-description">Get notified when your order has been confirmed</div>
        </div>
      </div>

      <!-- Divider -->
      <div class="notification-divider"></div>

      <!-- Market News -->
      <div class="notification-item">
        <label class="checkbox-container">
          <input type="checkbox" class="settings-checkbox">
          <span class="checkmark"></span>
        </label>
        <div class="notification-text">
          <div class="notification-title">Market News</div>
          <div class="notification-description">Breaking news and market updates</div>
        </div>
      </div>

      <!-- Divider -->
      <div class="notification-divider"></div>

      <!-- Portfolio Updates -->
      <div class="notification-item">
        <label class="checkbox-container">
          <input type="checkbox" class="settings-checkbox">
          <span class="checkmark"></span>
        </label>
        <div class="notification-text">
          <div class="notification-title">Portfolio Updates</div>
          <div class="notification-description">Daily portfolio performance summaries</div>
        </div>
      </div>

      <!-- Divider -->
      <div class="notification-divider"></div>

      <!-- Notification Method -->
      <div class="notification-method">
        <div class="notification-description" style="margin-bottom: 10px;">Notification Method</div>
        
        <label class="radio-container">
          <input type="radio" name="notification-method" class="settings-radio">
          <span class="radio-dot"></span>
          <span class="notification-description">In-App Only</span>
        </label>
        
        <label class="radio-container">
          <input type="radio" name="notification-method" class="settings-radio">
          <span class="radio-dot"></span>
          <span class="notification-description">Email</span>
        </label>
        
        <label class="radio-container">
          <input type="radio" name="notification-method" class="settings-radio">
          <span class="radio-dot"></span>
          <span class="notification-description">Both</span>
        </label>
      </div>
      
    </div>
    
<!-- Right Column: Account -->
<div class="settings-account">
  <h2>ACCOUNT</h2>
  <div class="settings-divider"></div>
  
  <!-- Email -->
  <div class="account-section">
    <div class="notification-title" style="margin-bottom: 8px;">Email</div>
    <input type="text" class="account-input" placeholder="abc123@gmail.com" readonly>
  </div>

  <!-- Username -->
  <div class="account-section">
    <div class="notification-title" style="margin-bottom: 8px;">Username</div>
    <input type="text" class="account-input" placeholder="johndoe" readonly>
  </div>

  <!-- Phone Number -->
  <div class="account-section">
    <div class="notification-title" style="margin-bottom: 8px;">Phone Number</div>
    <input type="text" class="account-input" placeholder="123-456-7890" readonly>
  </div>

  <!-- Buttons -->
  <div class="account-buttons">
    <button class="btn-save">Save Changes</button>
    <button class="btn-cancel">Cancel</button>
  </div>
  
</div>