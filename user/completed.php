<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders | Completed</title>

    <link rel="stylesheet" href="../admin/style.css"> 
    <link rel="stylesheet" href="./order-navbars.css">
    <link rel="stylesheet" href="./order-product.css">
    <link rel="icon" href="../assets/apple.png">
</head>
<body>
    <?php 
        //links
        $order_navbar = "./order-navbar.js";

        session_start(); 

        if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
            $username = $_SESSION['username'];
            $email = $_SESSION['email'];

            $firstname = $_SESSION['first_name'];
            $lastname = $_SESSION['last_name'];
            $phonenum = $_SESSION['phone_num'];

        } else {
            $username = "Guest";
            $email = "Not logged in";
        }
    
    ?>
    <div class="orders">
        <aside class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="home-btn">
                    <img src="../assets/apple.png" alt="apple logo" width="30" height="30">
                    <h1>Home</h1>
                </a>
            </div>
            <ul class="side-nav-menu">
                <li class="side-nav-item" id="Orders">
                    <a href="# " class="side-nav-link active"> 
                        <img src="../assets/box.png" alt="box logo">
                        Orders
                    </a>
                </li>
                <li class="side-nav-item" id="Cart">
                    <a href="#" class="side-nav-link ">
                        <img src="../assets/bag.png" alt="bag logo">
                        Cart
                    </a>
                </li>
                <li class="side-nav-item" id="Account">
                    <a href="#" class="side-nav-link">
                        <img src="../assets/account.png" alt="account logo">
                        Account
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-details">
                        <div class="user-name"><?php echo htmlspecialchars($username); ?></div>
                        <div class="user-email"><?php echo htmlspecialchars($email); ?></div>
                    </div>
                    <a href="#" class="logout-btn">
                        <img src="../assets/log out.png" alt="log-out logo" width="20" height="20">
                    </a>
                </div>
            </div>
        </aside>

        <main class="main-content">
            <h2 class="order-title">Orders</h2>

            <nav class="main-nav-bar">
                <ul>
                    <li class="main-nav-item">
                        <a href="#" class="main-nav-link">
                            <img src="../assets/pay.png" alt="pay logo">    
                            To Pay
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#" class="main-nav-link">
                            <img src="../assets/ship.png" alt="pay logo">    
                            To Ship
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#" class="main-nav-link">
                            <img src="../assets/receive.png" alt="pay logo">    
                            To Receive
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#" class="main-nav-link active">
                            <img src="../assets/complete.png" alt="pay logo">    
                            Completed
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#" class="main-nav-link">
                            <img src="../assets/return.png" alt="pay logo">    
                            Return/Refund
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#" class="main-nav-link">
                            <img src="../assets/cancel.png" alt="ship logo">
                            Cancelled
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="product-grid">
                <div class="product-card">
                    <div class="prod-info-grid">
                        <div class="prod-icon">
                            <img class="prod-pic" 
                            src="../assets/prod4.png">
                        </div>

                        <div class="prod-info">
                            <div class="prod-status">
                                Completed
                            </div>
                            <div class="prod-name">iPhone 14 Plus</div>
                            <div class="prod-variation">Blue &#183; 256GB</div>
                            <div class="prod-price">$799.00</div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="prod-info-grid">
                        <div class="prod-icon">
                            <img class="prod-pic" 
                                src="../assets/prod5.png">
                        </div>
                        <div class="prod-info">
                            <div class="prod-status">
                                Completed
                            </div>
                            <div class="prod-name">AirPods Pro 2</div>
                            <div class="prod-variation">White &#183; No Engraving</div>
                            <div class="prod-price">$249.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?php echo $order_navbar; ?>"></script>
</body>
</html>