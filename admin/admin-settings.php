<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sidebar.css">
    <link rel="stylesheet" href="./settings.css">
</head>
<body>
    <?php 
        //links
        $admin_sidebar_script = "./admin-sidebar-scripts.js";
        $settings_js = "./settings.js";
        $settings_tab = "./settings-tab.js";


    
    ?>
    <div class="settings">
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-icon">
                    <i class="fa-brands fa-apple fa-2xl"></i>
                </div>
                <h1>Username</h1>
            </div>

            <ul class="nav-menu">
                <li class="nav-item" id="Dashboard">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-bar"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item" id="Orders">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        Orders
                    </a>
                </li>
                <li class="nav-item" id="Products">
                    <a href="#" class="nav-link">
                        <i class="fas fa-box"></i>
                        Products
                    </a>
                </li>
                <!-- <li class="nav-item" id="Customers">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        Customers
                    </a>
                </li>
                <li class="nav-item" id="Reviews">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-comment"></i>
                        Reviews
                    </a>
                </li> -->
            </ul>

            <div class="sidebar-footer">
                <div class="user-profile">
                     <div class="profile-picture active-profile" id="profileSettings">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user-details">
                        <div class="user-name">Admin</div>
                        <div class="user-email">apple@gmail.com</div>
                    </div>
                    <a href="#" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
        </aside>
        <main class="main-content">
             <div class="tab-container">
                <div class="tab-header">
                    <button class="tab-button active" data-tab="general">General</button>
                    <button class="tab-button" data-tab="interface">Interface</button>
                    <button class="tab-button" data-tab="ecommerce">E-commerce</button>
                     <button class="tab-button" data-tab="access">Access</button>
                     <button class="tab-button" data-tab="security">Security</button>
                </div>
                <div class="tab-content">
                     <div class="tab-pane active" id="general">
                        <h2 class="settings-title">General Account Settings</h2>
                        <div class="settings-container">
                            <div class="setting-item profile-picture-item">
                                 <div class="profile-image-preview">
                                     <span>150<br>x<br>150</span>
                                 </div>
                                 <div class="profile-upload">
                                    <label for="profile-pic" class="choose-file-button">Choose File</label>
                                     <input type="file" id="profile-pic" style="display: none;">
                                     <span class="no-file-chosen">No file chosen</span>
                                 </div>
                            </div>
                             <div class="setting-item">
                                <label for="name">Full Name:</label>
                                <input type="text" id="name" value="Admin">
                            </div>
                            <div class="setting-item">
                                <label for="email">Email Address:</label>
                                <input type="email" id="email" value="apple@gmail.com">
                            </div>
                             <div class="setting-item">
                                  <label for="current-password">Change Password:</label>
                                    <input type="password" id="current-password">
                            </div>
                              <div class="setting-item">
                                    <h4>Two-Factor Authentication</h4>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="interface">
                         <h2 class="settings-title">Interface and Display Settings</h2>
                           <div class="settings-container">
                                <div class="setting-item">
                                        <label for="language">Language:</label>
                                        <select id="language">
                                            <option value="en">English</option>
                                            <option value="es">Spanish</option>
                                            <option value="fr">French</option>
                                         </select>
                                </div>
                                <div class="setting-item">
                                      <label for="timezone">Time Zone:</label>
                                        <select id="timezone">
                                            <option value="pst">PST</option>
                                            <option value="est">EST</option>
                                           <option value="utc">UTC</option>
                                       </select>
                                </div>
                                 <div class="setting-item">
                                      <h4>Dark Mode</h4>
                                        <label class="switch">
                                          <input type="checkbox" id="darkModeToggle">
                                           <span class="slider round"></span>
                                        </label>
                                </div>
                            </div>
                    </div>

                    <div class="tab-pane" id="ecommerce">
                        <h2 class="settings-title">E-commerce Specific Settings</h2>
                           <div class="settings-container">
                                <div class="setting-item">
                                        <label for="store">Default Store:</label>
                                        <select id="store">
                                            <option value="store1">Store 1</option>
                                            <option value="store2">Store 2</option>
                                            <option value="store3">Store 3</option>
                                        </select>
                                </div>
                                <div class="setting-item">
                                    <label for="currency">Currency:</label>
                                    <select id="currency">
                                        <option value="usd">USD ($)</option>
                                         <option value="eur">EUR</option>
                                       <option value="gbp">GBP</option>
                                    </select>
                                </div>
                                  <div class="setting-item">
                                          <label for="units">Measurement Units:</label>
                                             <select id="units">
                                                <option value="metric">Metric</option>
                                                <option value="imperial">Imperial</option>
                                           </select>
                                  </div>
                            </div>
                    </div>

                    <div class="tab-pane" id="access">
                         <h2 class="settings-title">Access and Permissions</h2>
                           <div class="settings-container">
                               <div class="setting-item">
                                    <h4>Role Management</h4>
                                      <label><input type="checkbox"> Manage Orders</label>
                                      <label><input type="checkbox"> Manage Products</label>
                                      <label><input type="checkbox"> Manage Users</label>
                               </div>
                                <div class="setting-item">
                                   <label for="api-key">API Keys</label>
                                  <input type="text" id="api-key" value="XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX">
                                   <button class="generate-key-btn">Generate New Key</button>
                              </div>
                            </div>
                    </div>

                     <div class="tab-pane" id="security">
                        <h2 class="settings-title">Security and Privacy</h2>
                          <div class="settings-container">
                                <div class="setting-item">
                                  <h4>Active Sessions</h4>
                                    <p>Current Session - Chrome on Windows</p>
                                    <button class="terminate-btn">Terminate</button>
                                </div>
                                <div class="setting-item">
                                    <h4>Privacy Settings</h4>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                      <span>Allow data collection for analytics</span>
                                </div>
                         </div>
                     </div>
                </div>
            </div>
        </main>
    </div>
 <script src="<?php echo $settings_js; ?>"></script>
 <script src="<?php echo $admin_sidebar_script; ?>"></script>
 <script src="<?php echo $settings_tab; ?>"></script>
 
</body>
</html>