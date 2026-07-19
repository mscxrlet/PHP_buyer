<?php
require_once "db.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$message = "";
$message_type = "error";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    $username = $email; 
    $address = "";
    $contact = "";
    $is_verified = 1; // FIXED: Sets status to active immediately upon account creation
    $token = "";      // FIXED: Clears the token since no confirmation link is needed

    if ($password !== $confirm_password) {
        $message = "Passwords do not match.";
    } else {

        $check = $conn->prepare("SELECT id FROM buyers WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $message = "Email is already registered.";
        } else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("
                INSERT INTO buyers
                (fullname, email, username, password, address, contact, token, is_verified)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ");

            $stmt->bind_param(
                "sssssssi",
                $fullname,
                $email,
                $username,
                $hashed_password,
                $address,
                $contact,
                $token,
                $is_verified
            );

            if ($stmt->execute()) {

                // FIXED: Instantly route them to log in with a success status flag
                header("Location: login.php?registered=success");
                exit();

            } else {
                $message = "Registration failed. Please try again.";
            }
            $stmt->close();
        }
        $check->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Atelier Nade</title>
    <link rel="stylesheet" href="LoginRegis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 4px; font-size: 14px; text-align: center; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>

<main class="container">

    <!-- LOGO -->
    <div class="logo">
        <img src="Logo.png" alt="Atelier Nade Logo">
    </div>

    <!-- BRAND -->
    <h1 class="brand-title">Atelier Nade</h1>
    <h2>Create Account</h2>
    <h3>Join our luxury bag collection</h3>

    <!-- Display Error Messages if any -->
    <?php if (!empty($message)): ?>
        <div class="alert"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>

    <!-- REGISTER FORM -->
    <form action="register.php" method="post">

        <div class="input-group">
            <label for="fullname">Full Name</label>
            <input 
                type="text" 
                id="fullname" 
                name="fullname" 
                placeholder="Enter your full name"
                required>
        </div>

        <div class="input-group">
            <label for="email">Email Address</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="Enter your email"
                required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="Create password"
                required>
        </div>

        <div class="input-group">
            <label for="confirm-password">Confirm Password</label>
            <input 
                type="password" 
                id="confirm-password" 
                name="confirm-password" 
                placeholder="Confirm password"
                required>
        </div>

        <button class="login-btn" type="submit">Create Account</button>

    </form>

    <div style="margin-top: 15px; text-align: center;">
        <a href="login.php">Already have an account? Login</a>
    </div>

</main>
</body>
</html>
