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
    <title>About Us | Atelier Nade</title>
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>

<header>
    <link rel="stylesheet" href="style.css">
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
            <input
                type="text"
                id="searchInput"
                class="search-input"
                placeholder="Search bags..."
            >
        </div>
            <button><a href="fave.php"><i class="fa-regular fa-heart"></i></button></a>    
            <button><a href="notif.php"><i class="fa-regular fa-bell"></i></button></a>
            <button><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></button></a>
            <button><a href="profile.php"><i class="fa-regular fa-user"></i></button></a>

        </div>
    </nav>
</header>

    <!-- ===================== HERO ===================== -->
    <section class="about-hero">
        <div class="about-overlay"></div>
        <div class="about-content">
            <p class="subtitle">ABOUT ATELIER NADE</p>
            <h1>
                Crafted With Purpose.<br>
                Designed For Every Journey.
            </h1>
        </div>
    </section>

    <!-- ===================== STORY ===================== -->
<link rel="stylesheet" href="style.css">
<div class="section-divider"></div>
    <section class="about-section">
        <div class="about-image">
            <img src="hero_aboutus.jpg" alt="Luxury Bag">
        </div>
        <div class="about-text">
            <span>OUR STORY</span>
            <h2>Luxury Beyond Fashion</h2>
            <p>
                Atelier Nade was founded with a simple belief that every
                bag should be a perfect balance of elegance,
                functionality, and timeless craftsmanship.
            </p>
            <p>
                Inspired by modern lifestyles, our collections are
                thoughtfully designed for professionals, travelers,
                athletes, and everyday individuals who appreciate
                refined luxury.
            </p>
        </div>
    </section>

    <!-- ===================== VALUES ===================== -->
    <section class="values">
    <link rel="stylesheet" href="style.css">
    <div class="section-divider"></div>
        <h2>Our Philosophy</h2>
        <div class="values-grid">
            <div class="value-card">
                <i class="fa-solid fa-gem"></i>
                <h3>Premium Quality</h3>
                <p>
                    Carefully selected materials and meticulous craftsmanship.
                </p>
            </div>
            <div class="value-card">
                <i class="fa-solid fa-leaf"></i>
                <h3>Timeless Design</h3>
                <p>
                    Elegant pieces created to remain stylish for years.
                </p>
            </div>
            <div class="value-card">
                <i class="fa-solid fa-briefcase"></i>
                <h3>Everyday Luxury</h3>
                <p>
                    Sophisticated bags made for every occasion.
                </p>
            </div>
        </div>
    </section>

<!-- ===================== MEET THE CREATORS ===================== -->
<section class="creators">
    <div class="section-divider"></div>
    <div class="creators-header">
        <span>THE FOUNDERS</span>
        <h2>Meet the Creators</h2>
        <p>
            Behind Atelier Nade are two passionate creators who believe
            luxury should be timeless, practical, and crafted with purpose.
            Every collection reflects their shared vision of elegance,
            confidence, and modern living.
        </p>
    </div>
    <div class="creators-container">

        <!-- Creator 1 -->
        <div class="creator-card">
            <div class="creator-image">
                <img src="thens.jpg" alt="Athena Ysabelle Palomo">
            </div>
            <div class="creator-info">
                <h3>Athena Ysabelle Palomo</h3>
                <span>Co-Founder & Creative Director</span>
                <p>
                    Athena leads the creative vision of Atelier Nade,
                    transforming timeless elegance into modern designs
                    that celebrate confidence and sophistication.
                </p>
                <div class="creator-social">

                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Creator 2 -->
        <div class="creator-card">
            <div class="creator-image">
                <img src="nadz.jpg" alt="Nadine Hyacinth Razalan">
            </div>
            <div class="creator-info">
                <h3>Nadine Hyacinth Razalan</h3>
                <span>Co-Founder & Brand Strategist</span>
                <p>
                    Nadine shapes the brand experience by combining
                    functionality with luxury, ensuring every collection
                    reflects quality, innovation, and everyday elegance.
                </p>
                <div class="creator-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- ===================== FOOTER ===================== -->

<footer   footer class="footer">
        <link rel="stylesheet" href="style.css">
<div class="section-divider"></div>
    <div class="footer-container">
        <div class="footer-brand">
            <h2>Atelier Nade</h2>
            <p>
                Crafted for elegance. Designed for every journey.
                Discover luxury bags that blend timeless style with
                everyday functionality.
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
            <a href="#">Contact</a>
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
    document
        .querySelector(".search-container")
        .classList
        .toggle("active");
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
        card.style.display =
            title.includes(keyword)
            ? "flex"
            : "none";

    });
});
</script>
</body>
</html>

