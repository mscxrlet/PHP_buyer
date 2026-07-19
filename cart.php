<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart | Atelier Nade</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="categories.css">
<link rel="stylesheet" href="cart.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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
        <button id="searchToggle" class="search-toggle" type="button">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <input
            id="searchInput"
            class="search-input"
            type="text"
            placeholder="Search bags...">
    </div>
    <a href="fave.php" class="nav-icon" aria-label="Favorites">
        <i class="fa-regular fa-heart"></i>
    </a>
    <a href="notif.php" class="nav-icon" aria-label="Notifications">
        <i class="fa-regular fa-bell"></i>
    </a>
    <a href="cart.php" class="nav-icon" aria-label="Shopping Cart">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
    <a href="profile.php" class="nav-icon" aria-label="Profile">
        <i class="fa-regular fa-user"></i>
    </a>
</div>
</nav>
</header>

<!-- ===================== MAIN ===================== -->
<main>
<section class="cart-page">
<div class="cart-heading">
    <span>Your Shopping Bag</span>
    <h1>Shopping Cart</h1>
    <p>Review your selected pieces before proceeding to checkout.</p>
</div>
<div class="cart-layout">

<!-- ===================== CART ITEMS ===================== -->
<div class="cart-items">
<article class="cart-item">
    <img src="tote_evrydy.jpeg" alt="Classic Tote">
    <div class="cart-info">
        <span class="cart-category">Everyday</span>
        <h3>Classic Tote</h3>
        <p class="cart-price">₱2,499</p>
    </div>
    <div class="cart-quantity">
        <button class="minus" type="button">−</button>
        <span class="qty">1</span>
        <button class="plus" type="button">+</button>
    </div>
    <div class="cart-total">₱2,499</div>
    <button class="remove-item" type="button" aria-label="Remove Item">
        <i class="fa-solid fa-trash"></i>
    </button>
</article>
<article class="cart-item">
    <img src="Backpack_vyg.jpeg" alt="Travel Backpack">
    <div class="cart-info">
        <span class="cart-category">Active</span>
        <h3>Travel Backpack</h3>
        <p class="cart-price">₱1,799</p>
    </div>
    <div class="cart-quantity">
        <button class="minus" type="button">−</button>
        <span class="qty">1</span>
        <button class="plus" type="button">+</button>
    </div>
    <div class="cart-total">₱1,799</div>
    <button class="remove-item" type="button" aria-label="Remove Item">
        <i class="fa-solid fa-trash"></i>
    </button>
</article>
</div>

<!-- ===================== ORDER SUMMARY ===================== -->
<aside class="cart-summary">
    <h2>Order Summary</h2>
    <div class="summary-row">
        <span>Subtotal</span>
        <span id="subtotal">₱4,298</span>
    </div>
    <div class="summary-row">
        <span>Shipping</span>
        <span>Free</span>
    </div>
    <div class="summary-row">
        <span>Tax</span>
        <span>₱0.00</span>
    </div>
    <hr>
    <div class="summary-total">
        <span>Total</span>
        <span id="total">₱4,298</span>
    </div>
    <a href="#checkout-page" class="checkout-btn">
        Proceed to Checkout
    </a>
    <a href="categories.php" class="continue-shopping">
        Continue Shopping
    </a>
</aside>
</div>

<!-- ===================== EMPTY CART ===================== -->
<div class="cart-empty" hidden>
    <i class="fa-solid fa-bag-shopping"></i>
    <h2>Your Cart is Empty</h2>
    <p>Looks like you haven't added any luxury bags yet.</p>
    <a href="categories.php" class="shop-btn">
        Explore Collections
    </a>
</div>
</section>

<!-- ===================== CHECKOUT PAGE ===================== -->
<section class="checkout-page" id="checkout-page">
    <div class="section-divider"></div>
    <div class="checkout-container">

        <!-- ================= SHIPPING ADDRESS ================= -->
        <section class="checkout-section active">
            <button class="checkout-toggle" type="button">
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    Shipping Address
                </span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="checkout-content">
                <div class="checkout-inner">
                    <div class="input-grid">
                        <input type="text" placeholder="Full Name">
                        <input type="tel" placeholder="Phone Number">
                        <input type="email" placeholder="Email Address">
                        <input type="text" placeholder="Province">
                        <input type="text" placeholder="City / Municipality">
                        <input type="text" placeholder="Barangay">
                        <input type="text" placeholder="Street Address">
                        <input type="text" placeholder="Postal Code">
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= MODE OF PAYMENT ================= -->
        <section class="checkout-section">
            <button class="checkout-toggle" type="button">
                <span>
                    <i class="fa-solid fa-wallet"></i>
                    Mode of Payment
                </span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="checkout-content">
                <div class="checkout-inner">
                    <label class="payment-option">
                        <input type="radio" name="payment" value="cod">
                        <i class="fa-solid fa-money-bill-wave"></i>
                        <span>Cash on Delivery</span>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment" value="card">
                        <i class="fa-brands fa-cc-visa"></i>
                        <span>Credit / Debit Card</span>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment" value="bank">
                        <i class="fa-solid fa-building-columns"></i>
                        <span>Bank Transfer</span>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment" value="gcash">
                        <i class="fa-solid fa-mobile-screen"></i>
                        <span>GCash</span>
                    </label>
                </div>
            </div>
        </section>

        <!-- ================= ORDER REVIEW ================= -->
        <section class="checkout-section">
            <button class="checkout-toggle" type="button">
                <span>
                    <i class="fa-solid fa-receipt"></i>
                    Order Review
                </span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="checkout-content">
                <div class="checkout-inner">
                    <div class="review-row">
                        <span>Subtotal</span>
                        <span id="reviewSubtotal">₱4,298</span>
                    </div>
                    <div class="review-row">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <div class="review-row">
                        <span>Tax</span>
                        <span>₱0.00</span>
                    </div>
                    <hr>
                    <div class="review-row total">
                        <span>Total</span>
                        <span id="reviewTotal">₱4,298</span>
                    </div>
                    <button class="place-order" type="button">
                        Place Order
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer class="footer">
    <div class="section-divider"></div>
    <div class="footer-container">

        <!-- Brand -->
        <div class="footer-brand">
            <h2>Atelier Nade</h2>
            <p>
                Crafted for elegance. Designed for every journey.
                Discover luxury bags that blend timeless style with
                everyday functionality.
            </p>
        </div>

        <!-- Shop Links -->
        <nav class="footer-links">
            <h3>Shop</h3>
            <a href="categories.php#everyday">Everyday</a>
            <a href="categories.php#executive">Executive</a>
            <a href="categories.php#voyage">Voyage</a>
            <a href="categories.php#active">Active</a>
        </nav>

        <!-- Company Links -->
        <nav class="footer-links">
            <h3>Company</h3>
            <a href="about.php">About Us</a>
            <a href="home.php#new-products">New Arrivals</a>
            <a href="categories.php">Collections</a>
            <a href="about.php">Contact</a>
        </nav>

        <!-- Contact -->
        <div class="footer-contact">
            <h3>Connect</h3>
            <p>Email: athenadine.com</p>
            <p>Phone: +63 912 345 6789</p>
            <div class="footer-social">
                <a href="#" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" aria-label="X">
                    <i class="fab fa-x-twitter"></i>
                </a>
                <a href="#" aria-label="Pinterest">
                    <i class="fab fa-pinterest-p"></i>
                </a>
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

/* ==========================================================
                        HELPERS
========================================================== */
const $ = s => document.querySelector(s);
const $$ = s => document.querySelectorAll(s);
const parsePrice = text => +text.replace(/[₱,]/g,"");
const formatPrice = value => `₱${value.toLocaleString()}`;

/* ==========================================================
                        ELEMENTS
========================================================== */
const dropdown = $(".dropdown");
const dropdownToggle = $(".dropdown-toggle");
const searchToggle = $("#searchToggle");
const searchInput = $("#searchInput");
const searchBox = $(".search-container");
const cartLayout = $(".cart-layout");
const emptyCart = $(".cart-empty");

/* ==========================================================
                        NAVBAR
========================================================== */
dropdownToggle?.addEventListener("click", e=>{
    e.preventDefault();
    dropdown.classList.toggle("active");
});
document.addEventListener("click", e=>{
    if(!dropdown?.contains(e.target))
        dropdown?.classList.remove("active");
});

/* ==========================================================
                        SEARCH
========================================================== */
searchToggle?.addEventListener("click",()=>{
    searchBox.classList.toggle("active");
    if(searchBox.classList.contains("active")){
        searchInput.focus();
    }else{
        searchInput.value="";
    }
});

/* ==========================================================
                    CART SUMMARY
========================================================== */
function updateSummary(){
    let subtotal = 0;
    $$(".cart-item").forEach(item=>{
        const qty = +item.querySelector(".qty").textContent;
        const price = parsePrice(item.querySelector(".cart-price").textContent);
        const total = qty * price;
        item.querySelector(".cart-total").textContent = formatPrice(total);
        subtotal += total;
    });
    ["subtotal","total","reviewSubtotal","reviewTotal"].forEach(id=>{
        const el = $("#"+id);
        if(el) el.textContent = formatPrice(subtotal);
    });
    const hasItems = $$(".cart-item").length;
    cartLayout.hidden = !hasItems;
    emptyCart.hidden = hasItems;
}

/* ==========================================================
                    CART EVENTS
========================================================== */
document.addEventListener("click",e=>{
    const plus = e.target.closest(".plus");
    const minus = e.target.closest(".minus");
    const remove = e.target.closest(".remove-item");
    if(plus || minus){
        const qty = (plus || minus)
            .parentElement
            .querySelector(".qty");
        qty.textContent = Math.max(
            1,
            +qty.textContent + (plus ? 1 : -1)
        );
        updateSummary();
    }
    if(remove){
        remove.closest(".cart-item").remove();
        updateSummary();
    }

});

/* ==========================================================
                CHECKOUT ACCORDION
========================================================== */
$$(".checkout-section").forEach(section=>{
    const button = section.querySelector(".checkout-toggle");
    const content = section.querySelector(".checkout-content");
    if(section.classList.contains("active"))
        content.style.maxHeight = content.scrollHeight+"px";
    button.addEventListener("click",()=>{
        const open = section.classList.contains("active");
        $$(".checkout-section").forEach(item=>{
            if(item===section) return;
            item.classList.remove("active");
            item.querySelector(".checkout-content").style.maxHeight = null;
        });
        if(open){
            section.classList.remove("active");
            content.style.maxHeight = null;
        }else{
            section.classList.add("active");
            content.style.maxHeight = content.scrollHeight+"px";
        }
    });
});

/* ==========================================================
                    PRODUCT SEARCH
========================================================== */
searchInput?.addEventListener("input",()=>{
    const keyword = searchInput.value.toLowerCase();
    $$(".product-card").forEach(card=>{
        card.style.display =
            card.querySelector("h3")
            .textContent
            .toLowerCase()
            .includes(keyword)
            ? "flex"
            : "none";
    });
});

/* ==========================================================
                    INITIALIZE
========================================================== */
updateSummary();
</script>
</body>
</html>
