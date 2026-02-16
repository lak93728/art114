<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/nav.php'; ?>

<main class="main-content">
  <h1 class="dashboard-title">Settings</h1>
  
  <div class="settings-container">
    <!-- left column: notifications -->
    <div class="settings-notifications">
      <h2>NOTIFICATIONS</h2>
      <div class="settings-divider"></div>
      
      <!-- price alerts -->
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

      <!-- divider -->
      <div class="notification-divider"></div>

      <!-- order confirmations -->
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

      <!-- another divider -->
      <div class="notification-divider"></div>

      <!-- market news -->
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

      <!-- another divider -->
      <div class="notification-divider"></div>

      <!-- portfolio updates -->
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

      <!-- divider -->
      <div class="notification-divider"></div>

      <!-- notification method -->
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
    
<!-- right column: account -->
<div class="settings-account">
  <h2>ACCOUNT</h2>
  <div class="settings-divider"></div>
  
  <!-- email -->
  <div class="account-section">
    <div class="notification-title" style="margin-bottom: 8px;">Email</div>
    <input type="text" class="account-input" placeholder="abc123@gmail.com" readonly>
  </div>

  <!-- username -->
  <div class="account-section">
    <div class="notification-title" style="margin-bottom: 8px;">Username</div>
    <input type="text" class="account-input" placeholder="johndoe" readonly>
  </div>

  <!-- phone number -->
  <div class="account-section">
    <div class="notification-title" style="margin-bottom: 8px;">Phone Number</div>
    <input type="text" class="account-input" placeholder="123-456-7890" readonly>
  </div>

  <!-- buttons -->
  <div class="account-buttons">
    <button class="btn-save">Save Changes</button>
    <button class="btn-cancel">Cancel</button>
  </div>
  
</div>