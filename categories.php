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
    <title>Collections | Atelier Nade</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="categories.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
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
            <li><a href="shop.php">Shop</a></li>
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

<!-- ================= COLLECTION HEADING =================== -->
<section class="collection-heading">
    <span class="collection-subtitle">Atelier Nade</span>
    <h1>Our Collections</h1>
    <p>Timeless luxury crafted for every journey. Explore premium handbags designed to complement your lifestyle with elegance and sophistication.</p>
</section>

<!-- ===================== EVERYDAY COLLECTION ===================== -->
<section id="everyday" class="collection-section">
    <div class="collection-header">
        <div>
            <span>Collection 01</span>
            <h2>Everyday Bags</h2>
        </div>
        <p>Refined essentials made for effortless style, comfort, and everyday versatility.</p>
    </div>
    <div class="carousel-container">
        <button class="carousel-btn prev" type="button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <div class="product-carousel">
            <!-- Product 1 -->
            <div class="product-card">
                <a href="shop_actions.php?action=add_to_fave&product_name=Classic+Tote&price=1199&image=tote_evrydy.jpeg&redirect=categories.php" class="favorite">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <img src="tote_evrydy.jpeg" alt="Classic Tote Bag">
                <div class="product-header">
                    <h3>Classic Tote</h3>
                    <p class="price">₱1,199</p>
                </div>
                <div class="product-actions">
                    <a href="shop_actions.php?action=add_to_cart&product_name=Classic+Tote&price=1199&image=tote_evrydy.jpeg&redirect=categories.php" class="cart-btn" style="display: flex; justify-content:center; align-items:center;">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="Shoulder_evrydy.jpeg" alt="Shoulder Bag">
                <div class="product-header">
                    <h3>Shoulder Bag</h3>
                    <p class="price">₱799</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <span class="product-label">NEW</span>
                <img src="Hobo_evrydy.jpeg" alt="Hobo Bag">
                <div class="product-header">
                    <h3>Soft Hobo Bag</h3>
                    <p class="price">₱1,499</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="Crossbody_evrydy.jpeg" alt="Crossbody Bag">
                <div class="product-header">
                    <h3>City Crossbody Bag</h3>
                    <p class="price">₱1,999</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
        </div>
        <button class="carousel-btn next" type="button">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- ===================== EXECUTIVE COLLECTION ===================== -->
<section id="executive" class="collection-section">
    <div class="collection-header">
        <div>
            <span>Collection 02</span>
            <h2>Executive Bags</h2>
        </div>
        <p>Sophisticated silhouettes crafted for modern professionals who value elegance and function.</p>
    </div>
    <div class="carousel-container">
        <button class="carousel-btn prev" type="button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <div class="product-carousel">
            <!-- Product 0 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <span class="product-label">NEW</span>
                <img src="newArriv.jpg" alt="Satchel Bag">
                <div class="product-header">
                    <h3>Satchel Bag</h3>
                    <p class="price">₱2,999</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 1 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="clutch_exec.jpeg" alt="Clutch Bag">
                <div class="product-header">
                    <h3>Elegant Clutch</h3>
                    <p class="price">₱3,299</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="bcase_exec.jpeg" alt="Briefcase Bag">
                <div class="product-header">
                    <h3>Legacy Briefcase</h3>
                    <p class="price">₱1,999</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="laptop_exec.jpeg" alt="Laptop Bag">
                <div class="product-header">
                    <h3>Work Laptop Tote</h3>
                    <p class="price">₱1,499</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="handbag_exec.jpeg" alt="Handbag">
                <div class="product-header">
                    <h3>Classic Handbag</h3>
                    <p class="price">₱2,499</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
        </div>
        <button class="carousel-btn next" type="button">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- ===================== VOYAGE COLLECTION ===================== -->
<section id="voyage" class="collection-section">
    <div class="collection-header">
        <div>
            <span>Collection 03</span>
            <h2>Voyage Bags</h2>
        </div>
        <p>Travel with confidence through thoughtfully crafted bags that combine luxury, durability, and generous storage for every adventure.</p>
    </div>
    <div class="carousel-container">
        <button class="carousel-btn prev" type="button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <div class="product-carousel">
            <!-- Product 1 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="suitcase_vyg.jpeg" alt="Suitcase">
                <div class="product-header">
                    <h3>Atlas Suitcase</h3>
                    <p class="price">₱4,499</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <span class="product-label">NEW</span>
                <img src="Backpack_vyg.jpeg" alt="backpack">
                <div class="product-header">
                    <h3>Travel Backpack</h3>
                    <p class="price">₱1,799</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="beachtote_vyg.jpeg" alt="Beach Tote">
                <div class="product-header">
                    <h3>Summer Beach Tote</h3>
                    <p class="price">₱999</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="TravelOrg_vyg.jpeg" alt="Travel Organizer Bag">
                <div class="product-header">
                    <h3>Packing Organizer</h3>
                    <p class="price">₱1,199</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
        </div>
        <button class="carousel-btn next" type="button">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- ===================== ACTIVE COLLECTION ===================== -->
<section id="active" class="collection-section">
    <div class="collection-header">
        <div>
            <span>Collection 04</span>
            <h2>Active Bags</h2>
        </div>
        <p>Lightweight and versatile designs made for active lifestyles without compromising luxury or comfort.</p>
    </div>
    <div class="carousel-container">
        <button class="carousel-btn prev" type="button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <div class="product-carousel">
            <!-- Product 1 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <span class="product-label">NEW</span>
                <img src="gym_act.jpeg" alt="gym Bag">
                <div class="product-header">
                    <h3>Active Duffel</h3>
                    <p class="price">₱3,199</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="yoga_act.jpeg" alt="Yoga Bag">
                <div class="product-header">
                    <h3>Zen Yoga Carrier</h3>
                    <p class="price">₱1,499</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="tennis_act.jpeg" alt="Tennis Bag">
                <div class="product-header">
                    <h3>Court Tennis Bag</h3>
                    <p class="price">₱1,999</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="product-card">
                <button class="favorite" type="button">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <img src="hike_act.jpeg" alt="Hiking Bag">
                <div class="product-header">
                    <h3>Trail Hiking Bag</h3>
                    <p class="price">₱2,999</p>
                </div>
                <div class="product-actions">
                    <div class="quantity">
                        <button type="button">-</button>
                        <span>1</span>
                        <button type="button">+</button>
                    </div>
                    <button class="cart-btn" type="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                    <button class="buy-btn" type="button">Buy</button>
                </div>
            </div>
        </div>
        <button class="carousel-btn next" type="button">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
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
            <a href="#everyday">Everyday</a>
            <a href="#executive">Executive</a>
            <a href="#voyage">Voyage</a>
            <a href="#active">Active</a>
        </div>
        <div class="footer-links">
            <h3>Company</h3>
            <a href="about.php">About Us</a>
            <a href="#everyday">Collections</a>
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
      <!-- Educational Project Disclaimer -->
    <div style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 15px; text-align: center;">
        <p style="font-size: 0.8rem; opacity: 0.7; margin: 0;">Created By Athena Ysabelle Palomo & Nadine Hyacinth Razalan.</p>
        <p style="font-size: 0.75rem; opacity: 0.6; margin: 5px 0 0 0;">Disclaimer: This website is for educational purposes only and is a requirement for our final project.</p>
    </div>
</footer>



<script>
// DROPDOWN MENU
const dropdown = document.querySelector(".dropdown");
const toggle = document.querySelector(".dropdown-toggle");

toggle.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown.classList.toggle("active");
});

document.addEventListener("click", (e) => {
    if (!dropdown.contains(e.target)) {
        dropdown.classList.remove("active");
    }
});

// PRODUCT CAROUSELS
document.querySelectorAll(".carousel-container").forEach(container => {
    const carousel = container.querySelector(".product-carousel");
    const next = container.querySelector(".next");
    const prev = container.querySelector(".prev");
    const card = carousel.querySelector(".product-card");
    const gap = 28;
    const amount = card.offsetWidth + gap;
    
    next.onclick = () => {
        carousel.scrollBy({ left: amount, behavior: "smooth" });
    };
    prev.onclick = () => {
        carousel.scrollBy({ left: -amount, behavior: "smooth" });
    };
});

// SEARCH FIELD TOGGLE
const searchToggle = document.getElementById("searchToggle");
const searchInput = document.getElementById("searchInput");

searchToggle.addEventListener("click", () => {
    document.querySelector(".search-container").classList.toggle("active");
    if (document.querySelector(".search-container").classList.contains("active")) {
        searchInput.focus();
    } else {
        searchInput.value = '';
    }
});

searchInput.addEventListener("input", function() {
    const keyword = this.value.toLowerCase();
    document.querySelectorAll(".product-card").forEach(card => {
        const title = card.querySelector("h3").textContent.toLowerCase();
        card.style.display = title.includes(keyword) ? "flex" : "none";
    });
});
</script>
</body>
</html>
