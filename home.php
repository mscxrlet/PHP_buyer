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
    <title>Atelier Nade | Home</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
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

<main>
<!-- ===================== HERO ===================== -->
<section class="hero">
    <div class="overlay"></div>
    <img src="heropage.jpeg" alt="Hero Banner">
    <div class="hero-content">
        <h1>Timeless Luxury.<br>Everyday Purpose.</h1>
        <p>Crafted for modern elegance, designed to accompany every journey with style, confidence, and purpose.</p>
        <a href="categories.php" class="cta">
            <span class="hover-underline-animation">Shop Now</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
                <path d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
            </svg>
        </a>
    </div>
</section>

<!-- ===================== CATEGORIES ===================== -->
<section id="categories" class="categories">
    <div class="section-divider"></div>
    <h1>Curated by Purpose</h1>
    <div class="category-grid">
        <a href="categories.php#everyday" class="category-card">
            <img src="EVERYDAY.png" alt="Everyday">
            <div class="category-overlay">
                <h2>Everyday</h2>
            </div>
        </a>
        <a href="categories.php#executive" class="category-card">
            <img src="EXECUTIVE.png" alt="Executive">
            <div class="category-overlay">
                <h2>Executive</h2>
            </div>
        </a>
        <a href="categories.php#voyage" class="category-card">
            <img src="VOYAGE.png" alt="Voyage">
            <div class="category-overlay">
                <h2>Voyage</h2>
            </div>
        </a>
        <a href="categories.php#active" class="category-card">
            <img src="ACTIVE.png" alt="Active">
            <div class="category-overlay">
                <h2>Active</h2>
            </div>
        </a>
    </div>
</section>

<div class="section-divider"></div>

<!-- ===================== NEW ARRIVALS ===================== -->
<section id="new-products" class="new-products">
    <div class="featured-product product-bg">
        <div class="featured-image">
            <img src="newArriv.jpg" alt="Featured Bag">
        </div>
        <div class="featured-info">
            <span class="featured-badge">NEW ARRIVAL</span>
            <p class="featured-category">Executive Collection</p>
            <h1>Satchel Bag</h1>
            <p>Crafted from premium leather with refined details, the Satchel Bag is designed for professionals who appreciate timeless sophistication and everyday functionality.</p>
            <div class="featured-price">₱2,999</div>
            <a href="categories.php#executive">
                <button class="featured-btn">Shop Now</button>
            </a>
        </div>
    </div>
</section>

<!-- ===================== TAGLINE ===================== -->
<section class="tagline">
    <div class="section-divider"></div>
    <div class="tagline-container">
        <p class="tagline-subtitle">Crafted with Purpose</p>
        <h2>Luxury That Moves With You</h2>
        <p class="tagline-text">At Atelier Nade, every bag is thoughtfully designed to complement your lifestyle—from everyday essentials to elegant occasions. Timeless craftsmanship, refined materials, and effortless sophistication come together in every piece.</p>
    </div>
</section>
</main>

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
     <!-- Educational Project Disclaimer -->
    <div style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 15px; text-align: center;">
        <p style="font-size: 0.8rem; opacity: 0.7; margin: 0;">Created By Athena Ysabelle Palomo & Nadine Hyacinth Razalan.</p>
        <p style="font-size: 0.75rem; opacity: 0.6; margin: 5px 0 0 0;">Disclaimer: This website is for educational purposes only and is a requirement for our final project.</p>
    </div>
</footer>

<script>
const dropdown = document.querySelector(".dropdown");
const toggle = document.querySelector(".dropdown-toggle");

toggle.addEventListener("click", function(e){
    e.preventDefault();
    dropdown.classList.toggle("active");
});

document.addEventListener("click", function(e){
    if(!dropdown.contains(e.target)){
        dropdown.classList.remove("active");
    }
});

const searchToggle = document.getElementById("searchToggle");
const searchInput = document.getElementById("searchInput");

searchToggle.addEventListener("click", () => {
    document.querySelector(".search-container").classList.toggle("active");
    if(document.querySelector(".search-container").classList.contains("active")){
        searchInput.focus();
    }else{
        searchInput.value = "";
    }
});

searchInput.addEventListener("input", function(){
    const keyword = this.value.toLowerCase();
    document.querySelectorAll(".product-card").forEach(card=>{
        const title = card.querySelector("h3").textContent.toLowerCase();
        card.style.display = title.includes(keyword) ? "flex" : "none";
    });
});
</script>
</body>
</html>
