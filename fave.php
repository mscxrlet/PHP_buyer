<?php
require_once 'db.php';
session_start();

if (!isset($_SESSION['buyer_id'])) {
    header("Location: login.php");
    exit();
}

$buyer_id = $_SESSION['buyer_id'];

$query = "SELECT * FROM favorites WHERE buyer_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $buyer_id);
$stmt->execute();
$favorites_result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites | Atelier Nade</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="categories.css">
    <link rel="stylesheet" href="fave.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<!-- ===================== NAVBAR ===================== -->
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
                    Collections <i class="fa-solid fa-chevron-down"></i>
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
                <button class="search-toggle" id="searchToggle">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input type="text" id="searchInput" class="search-input" placeholder="Search bags...">
            </div>
            <a href="fave.php"><button><i class="fa-regular fa-heart"></i></button></a>    
            <a href="notif.php"><button><i class="fa-regular fa-bell"></i></button></a>
            <a href="cart.php"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
            <a href="profile.php"><button><i class="fa-regular fa-user"></i></button></a>
        </div>
    </nav>
</header>

<!-- ===================== FAVORITES SECTION ===================== -->
<section class="favorites-page">
    <div class="favorites-heading">
        <span>Your Wishlist</span>
        <h1>Favorites</h1>
        <p>Keep track of the bags you love. Your saved favorites are always here whenever you're ready to continue shopping.</p>
    </div>

    <?php if ($favorites_result && $favorites_result->num_rows > 0): ?>
        <!-- Display items if wishlist has content -->
        <div class="favorites-grid">
            <!-- Favorite Item 1 -->
            <div class="favorite-card">
                <button class="remove-favorite">
                    <i class="fa-solid fa-heart"></i>
                </button>
                <img src="tote_evrydy.jpeg" alt="Classic Tote">
                <div class="favorite-info">
                    <span class="favorite-category">Everyday</span>
                    <h3>Classic Tote</h3>
                    <p class="favorite-price">₱2,499</p>
                    <div class="favorite-buttons">
                        <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Favorite Item 2 -->
            <div class="favorite-card">
                <button class="remove-favorite">
                    <i class="fa-solid fa-heart"></i>
                </button>
                <img src="Shoulder_evrydy.jpeg" alt="Elegant Shoulder Bag">
                <div class="favorite-info">
                    <span class="favorite-category">Executive</span>
                    <h3>Elegant Shoulder</h3>
                    <p class="favorite-price">₱2,899</p>
                    <div class="favorite-buttons">
                        <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Favorite Item 3 -->
            <div class="favorite-card">
                <button class="remove-favorite">
                    <i class="fa-solid fa-heart"></i>
                </button>
                <img src="tennis_act.jpeg" alt="Court Tennis Bag">
                <div class="favorite-info">
                    <span class="favorite-category">Active</span>
                    <h3>Court Tennis Bag</h3>
                    <p class="favorite-price">₱1,999</p>
                    <div class="favorite-buttons">
                        <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <!-- Empty Wishlist view shows up ONLY if database records = 0 -->
        <div class="favorites-empty">
            <i class="fa-regular fa-heart"></i>
            <h2>No Favorites Yet</h2>
            <p>Browse our collections and save your favorite luxury bags.</p>
            <a href="categories.php" class="shop-btn">Explore Collections</a>
        </div>
    <?php endif; ?>
</section>

<!-- ===================== FOOTER ===================== -->
<footer class="footer">
    <div class="section-divider"></div>
    <div class="footer-container">
        <div class="footer-brand">
            <h2>Atelier Nade</h2>
            <p>Crafted for elegance. Designed for every journey. Discover luxury bags that blend timeless style with everyday functionality.</p>
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
            <a href="home.php#new-products">New Arrivals</a>
            <a href="home.php#categories">Collections</a>
            <a href="about.php">Contact</a>
        </div>
        <div class="footer-contact">
            <h3>Connect</h3>
            <p>Email: ateliernade@email.com</p>
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
        <p>Created By Athena Ysabelle Palomo & Nadine Hyacinth Razalan.</p>
    </div>
</footer>

<script>
// Navbar dropdown implementation
const dropdown = document.querySelector(".dropdown");
const toggle = document.querySelector(".dropdown-toggle");

toggle.addEventListener("click", function(e) {
    e.preventDefault();
    dropdown.classList.toggle("active");
});

document.addEventListener("click", function(e) {
    if (!dropdown.contains(e.target)) {
        dropdown.classList.remove("active");
    }
});
</script>
</body>
</html>
