<?php
session_start();

if (!isset($_SESSION['buyer_id'])) {
    header("Location: login.php");
    exit();
} 

$host = "localhost";
$db_user = "root";
$db_pass = "cassy";
$db_name = "ateliernade_db"; 

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$buyer_id = $_SESSION['buyer_id'];
$update_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_profile'])) {
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $update_query = "UPDATE buyers SET fullname='$fullname', username='$username', email='$email' WHERE id='$buyer_id'";
    
    if ($conn->query($update_query) === TRUE) {
        $update_message = "Profile updated successfully!";
    } else {
        $update_message = "Error updating profile: " . $conn->error;
    }
}

$query = "SELECT * FROM buyers WHERE id = '$buyer_id'";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    $buyer = $result->fetch_assoc();
} else {
    echo "User data not found.";
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
    <link rel="stylesheet" href="profile.css">
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

<!-- ===================== PROFILE CONTENT ===================== -->
<main>
<section class="profile-page">
    <div class="profile-container">
        
        <div class="profile-header">
            <div class="profile-image">
                <img src="nopfp.jpg" id="profilePreview" alt="Profile Picture">
                <label for="profileUpload" class="change-photo">
                    <i class="fa-solid fa-camera"></i>
                </label>
                <input type="file" id="profileUpload" accept="image/*">
            </div>
            <h2>My Profile</h2>
            <p>Manage your account information and preferences.</p>
            
            <?php if(!empty($update_message)): ?>
                <p style="color: green; margin-top: 10px; font-weight: 500;"><?php echo $update_message; ?></p>
            <?php endif; ?>
        </div>

    <!-- MEMBERSHIP -->
    <div class="membership-card">
        <h3>
            <i class="fa-solid fa-crown"></i>
            Gold Member
        </h3>
        <span>Member Since 2026</span>
        <p>
            Enjoy exclusive benefits, early access, and special offers.
        </p>
    </div>
</div>

<!-- ACCOUNT STATS -->
<div class="profile-stats">
    <div>
        <h2>4</h2>
        <span>Orders</span>
    </div>
    <div>
        <h2>₱14K</h2>
        <span>Total Spent</span>
    </div>
    <div>
        <h2>Gold</h2>
        <span>Membership</span>
    </div>
</div>

<!-- PROFILE FORM -->
<form class="profile-form" method="POST" action="profile.php">
    <div class="input-group">
        <label>Full Name</label>
        <input type="text" name="fullname" value="<?php echo htmlspecialchars($buyer['fullname'] ?? ''); ?>" required>
    </div>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($buyer['username'] ?? ''); ?>" required>
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($buyer['email'] ?? ''); ?>" required>
    </div>
    <div class="profile-buttons">
        <button type="submit" name="update_profile" class="save-btn">
            <i class="fa-solid fa-floppy-disk"></i> Save Changes
        </button>
        <a href="logout.php" class="logout-btn" style="text-align: center; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>
</form>
    </div>
</section>
</main>

<!-- ================= PURCHASE HISTORY ================= -->
<section class="history-section">
    <button class="history-toggle">
        <div class="history-title">
            <div class="history-icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
            <div class="history-text">
                <h3>Purchase History</h3>
                <p>4 Orders • ₱14,196 Total Spent</p>
            </div>
        </div>
        <i class="fa-solid fa-chevron-down arrow"></i>
    </button>
    <div class="history-content">
        <div class="history-body">
            <div class="history-card">
                <img src="EverydayBag1.png" alt="Classic Tote">
                <div class="history-info">
                    <h4>Classic Tote</h4>
                    <span class="order-id">Order #ATN-1001</span>
                    <p>Purchased July 2, 2026</p>
                </div>
                <div class="history-right">
                    <span class="status delivered">Delivered</span>
                    <h4>₱2,499</h4>
                </div>
            </div>
            <div class="history-card">
                <img src="ExecutiveBag1.png" alt="Executive Briefcase">
                <div class="history-info">
                    <h4>Executive Briefcase</h4>
                    <span class="order-id">Order #ATN-0998</span>
                    <p>Purchased June 15, 2026</p>
                </div>
                <div class="history-right">
                    <span class="status delivered">Delivered</span>
                    <h4>₱4,999</h4>
                </div>
            </div>
            <div class="history-card">
                <img src="VoyageBag1.png" alt="Voyage Weekender">
                <div class="history-info">
                    <h4>Voyage Weekender</h4>
                    <span class="order-id">Order #ATN-0992</span>
                    <p>Purchased May 29, 2026</p>
                </div>
                <div class="history-right">
                    <span class="status shipped">Shipped</span>
                    <h4>₱3,799</h4>
                </div>
            </div>
        </div>
    </div>
</section>
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
    <<!-- Educational Project Disclaimer -->
    <div style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 15px; text-align: center;">
        <p style="font-size: 0.8rem; opacity: 0.7; margin: 0;">Created By Athena Ysabelle Palomo & Nadine Hyacinth Razalan.</p>
        <p style="font-size: 0.75rem; opacity: 0.6; margin: 5px 0 0 0;">Disclaimer: This website is for educational purposes only and is a requirement for our final project.</p>
    </div>
</footer>

<script>
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
const upload = document.getElementById("profileUpload");
const preview = document.getElementById("profilePreview");
if (upload && preview) {
    upload.addEventListener("change", function() {
        const file = this.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
        }
    });
}
</script>
</body>
</html>
