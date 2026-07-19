<?php
session_start();
if (!isset($_SESSION['buyer_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier Nade</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="notif.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600&family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<!-- ===================== NAVIGATION ===================== -->
<header>
    <nav class="navbar">
        <a href="home.php" class="logo">
            <img src="TranspLogo.png" alt="Atelier Nade Logo">
        </a>
        <ul class="nav-links">
            <li><a href="home.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">
                    Collections
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="categories.php#everyday">Everyday Bags</a></li>
                    <li><a href="categories.php#executive">Executive Bags</a></li>
                    <li><a href="categories.php#voyage">Voyage Bags</a></li>
                    <li><a href="categories.php#active">Active Bags</a></li>
                </ul>
            </li>
        </ul>
        <div class="nav-icons">
            <div class="search-container">
                <button class="search-toggle" id="searchToggle" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input>
                    type="text"
                    id="searchInput"
                    class="search-input"
                    placeholder="Search bags..."
            </div>
            <a href="fave.php" class="nav-btn" aria-label="Favorites">
                <i class="fa-regular fa-heart"></i>
            </a>
            <a href="notif.php" class="nav-btn active" aria-label="Notifications">
                <i class="fa-regular fa-bell"></i>
            </a>
            <a href="cart.php" class="nav-btn" aria-label="Cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <a href="profile.php" class="nav-btn" aria-label="Profile">
                <i class="fa-regular fa-user"></i>
            </a>
        </div>
    </nav>
</header>
<main>

<!-- ===================== PAGE HEADER ===================== -->
<section class="notif-hero">
    <h1>Notifications</h1>
    <p>
        Stay updated with your purchases, deliveries, promotions,
        and important announcements.
    </p>
</section>

<!-- ===================== NOTIFICATION TABS ===================== -->
<section class="notif-wrapper">
    <div class="notif-tabs">
        <button class="tab-btn active" data-tab="pay">
            <i class="fa-solid fa-wallet"></i>
            <span>To Pay</span>
        </button>
        <button class="tab-btn" data-tab="ship">
            <i class="fa-solid fa-box"></i>
            <span>To Ship</span>
        </button>
        <button class="tab-btn" data-tab="shipped">
            <i class="fa-solid fa-truck-fast"></i>
            <span>Shipped</span>
        </button>
        <button class="tab-btn" data-tab="receive">
            <i class="fa-solid fa-box-open"></i>
            <span>To Receive</span>
        </button>
        <button class="tab-btn" data-tab="rate">
            <i class="fa-solid fa-star"></i>
            <span>To Rate</span>
        </button>
        <button class="tab-btn" data-tab="general">
            <i class="fa-regular fa-bell"></i>
            <span>Notifications</span>
        </button>
    </div>

    <!-- ===================== TO PAY ===================== -->
    <div class="tab-content active" id="pay">
        <div class="purchase-card">
            <img src="Crossbody_evrydy.jpeg" alt="Classic Leather Tote">
            <div class="purchase-info">
                <h3>Classic Leather Tote</h3>
                <p>
                    Your order is awaiting payment.
                    Complete payment to begin processing.
                </p>
                <span class="purchase-date">
                    July 7, 2026 • 10:35 AM
                </span>
            </div>
            <div class="purchase-side">
                <span class="status waiting">To Pay</span>
                <button class="action-btn">Pay Now</button>
            </div>
        </div>
        <div class="purchase-card">
            <img src="beachtote_vyg.jpeg" alt="Canvas Everyday Tote">
            <div class="purchase-info">
                <h3>Canvas Everyday Tote</h3>
                <p>
                    Waiting for payment confirmation.
                </p>
                <span class="purchase-date">
                    July 6, 2026
                </span>
            </div>
            <div class="purchase-side">
                <span class="status waiting">To Pay</span>
                <button class="action-btn">Pay Now</button>
            </div>
        </div>
    </div>

        <!-- ===================== TO SHIP ===================== -->
    <div class="tab-content" id="ship">
        <div class="purchase-card">
            <img src="Shoulder_evrydy.jpeg" alt="Elegant Shoulder Bag">
            <div class="purchase-info">
                <h3>Elegant Shoulder Bag</h3>
                <p>
                    Payment has been confirmed.
                    Your order is now being prepared.
                </p>
                <span class="purchase-date">
                    July 5, 2026
                </span>
            </div>
            <div class="purchase-side">
                <span class="status processing">Preparing</span>
            </div>
        </div>
        <div class="purchase-card">
            <img src="clutch_exec.jpeg" alt="Minimal Crossbody Bag">
            <div class="purchase-info">
                <h3>Minimal Crossbody Bag</h3>
                <p>
                    Packing your order for shipment.
                </p>
                <span class="purchase-date">
                    July 4, 2026
                </span>
            </div>
            <div class="purchase-side">
                <span class="status processing">To Ship</span>
            </div>
        </div>
    </div>

    <!-- ===================== SHIPPED ===================== -->
    <div class="tab-content" id="shipped">
        <div class="purchase-card">
            <img src="Hobo_evrydy.jpeg" alt="Premium Hobo Bag">
            <div class="purchase-info">
                <h3>Premium Hobo Bag</h3>
                <p>
                    Your parcel is on the way.
                    Estimated arrival: July 10.
                </p>
                <span class="purchase-date">
                    Shipped Yesterday
                </span>
            </div>
            <div class="purchase-side">
                <span class="status shipped">Shipped</span>
                <button class="action-btn">Track Order</button>
            </div>
        </div>
        <div class="purchase-card">
            <img src="laptop_exec.jpeg" alt="Vintage Handbag">
            <div class="purchase-info">
                <h3>Vintage Handbag</h3>
                <p>
                    Your courier has picked up your package.
                </p>
                <span class="purchase-date">
                    July 6, 2026
                </span>
            </div>
            <div class="purchase-side">
                <span class="status shipped">In Transit</span>
                <button class="action-btn">Track Order</button>
            </div>
        </div>
    </div>

    <!-- ===================== TO RECEIVE ===================== -->
    <div class="tab-content" id="receive">
        <div class="purchase-card">
            <img src="laptop_exec.jpeg" alt="Signature Leather Tote">
            <div class="purchase-info">
                <h3>Signature Leather Tote</h3>
                <p>
                    Your package has arrived at your local delivery hub
                    and will be delivered soon.
                </p>
                <span class="purchase-date">
                    Expected Today
                </span>
            </div>
            <div class="purchase-side">
                <span class="status receive">Out for Delivery</span>
                <button class="action-btn">Confirm Received</button>
            </div>
        </div>
        <div class="purchase-card">
            <img src="tennis_act.jpeg" alt="Classic Office Handbag">
            <div class="purchase-info">
                <h3>Classic Office Handbag</h3>
                <p>
                    Your parcel is arriving tomorrow.
                </p>
                <span class="purchase-date">
                    ETA: July 8, 2026
                </span>
            </div>
            <div class="purchase-side">
                <span class="status receive">To Receive</span>
                <button class="action-btn">Track Parcel</button>
            </div>
        </div>
    </div>

        <!-- ===================== TO RATE ===================== -->
    <div class="tab-content" id="rate">
        <div class="purchase-card">
            <img src="Hobo_evrydy.jpeg" alt="Everyday Canvas Tote">
            <div class="purchase-info">
                <h3>Everyday Canvas Tote</h3>
                <p>
                    Delivered successfully.
                    Share your experience with this product.
                </p>
                <span class="purchase-date">
                    Delivered July 3, 2026
                </span>
            </div>
            <div class="purchase-side">
                <span class="status complete">Delivered</span>
                <button class="action-btn">
                    Rate Product
                </button>
            </div>
        </div>
        <div class="purchase-card">
            <img src="Crossbody_evrydy.jpeg" alt="Minimal Crossbody Bag">
            <div class="purchase-info">
                <h3>Minimal Crossbody Bag</h3>
                <p>
                    We'd love to hear your feedback.
                </p>
                <span class="purchase-date">
                    Delivered June 30, 2026
                </span>
            </div>
            <div class="purchase-side">
                <span class="status complete">Delivered</span>
                <button class="action-btn">
                    Leave Review
                </button>
            </div>
        </div>
    </div>

    <!-- ===================== GENERAL NOTIFICATIONS ===================== -->
    <div class="tab-content" id="general">
        <div class="notification-card">
            <div class="notif-icon sale">
                <i class="fa-solid fa-tags"></i>
            </div>
            <div class="notif-text">
                <h3>Mid-Year Sale</h3>
                <p>
                    Enjoy up to <strong>30% OFF</strong> on selected bags this week only.
                </p>
                <span>2 hours ago</span>
            </div>
        </div>
        <div class="notification-card">
            <div class="notif-icon gift">
                <i class="fa-solid fa-gift"></i>
            </div>
            <div class="notif-text">
                <h3>Voucher Received</h3>
                <p>
                    Congratulations! You earned a ₱300 voucher on your next purchase.
                </p>
                <span>Yesterday</span>
            </div>
        </div>
        <div class="notification-card">
            <div class="notif-icon announcement">
                <i class="fa-solid fa-bullhorn"></i>
            </div>
            <div class="notif-text">
                <h3>New Collection Available</h3>
                <p>
                    Discover our newest handcrafted bags inspired by timeless elegance.
                </p>
                <span>3 days ago</span>
            </div>
        </div>
        <div class="notification-card">
            <div class="notif-icon info">
                <i class="fa-solid fa-circle-info"></i>
            </div>
            <div class="notif-text">
                <h3>Welcome to Atelier Nade</h3>
                <p>
                    Thank you for choosing Atelier Nade.
                    We hope you enjoy shopping with us.
                </p>
                <span>Last week</span>
            </div>
        </div>
    </div>
</section>
</main>

<!-- ===================== FOOTER ===================== -->
<footer class="footer">
    <div class="section-divider"></div>
    <div class="footer-container">
        <div class="footer-brand">
            <h2>Atelier Nade</h2>
            <p>
                Crafted for elegance. Designed for every journey.
                Discover luxury bags that blend timeless style with everyday functionality.
            </p>
        </div>
        <div class="footer-links">
            <h3>Shop</h3>
            <a href="categories.php#everyday">Everyday</a>
            <a href="categories.php#executive">Executive</a>
            <a href="categories.php#voyage">Voyage</a>
            <a href="categories.php#active">Active</a>
        </div>
        <div class="footer-links">
            <h3>Company</h3>
            <a href="about.php">About Us</a>
            <a href="#new-products">New Arrivals</a>
            <a href="#categories">Collections</a>
            <a href="about.php">Contact</a>
        </div>
        <div class="footer-contact">
            <h3>Connect</h3>
            <p>Email: athenadine.com</p>
            <p>Phone: +63 912 345 6789</p>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>
            Created by Athena Ysabelle Palomo &amp; Nadine Hyacinth Razalan.
        </p>
    </div>
</footer>

<!-- ===================== JAVASCRIPT ===================== -->
<script>
const tabs = document.querySelectorAll(".tab-btn");
const contents = document.querySelectorAll(".tab-content");
tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        tabs.forEach(btn => btn.classList.remove("active"));
        contents.forEach(content => content.classList.remove("active"));

        tab.classList.add("active");
        document.getElementById(tab.dataset.tab).classList.add("active");
    });
});
const dropdown = document.querySelector(".dropdown");
const toggle = document.querySelector(".dropdown-toggle");
toggle.addEventListener("click", e => {
    e.preventDefault();
    dropdown.classList.toggle("active");
});
document.addEventListener("click", e => {
    if (!dropdown.contains(e.target)) {
        dropdown.classList.remove("active");
    }
});
</script>
</body>
</html>
