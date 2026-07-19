<?php
require_once "db.php";

if (isset($_GET['token']) && !empty($_GET['token'])) {
    $token = $_GET['token'];

    $stmt = $conn->prepare("SELECT id FROM buyers WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // 2. Found them! Let's update is_verified to 1
        $update = $conn->prepare("UPDATE buyers SET is_verified = 1 WHERE token = ?");
        $update->bind_param("s", $token);
        
        if ($update->execute()) {
            echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif;'>";
            echo "<h2 style='color:#155724;'>Success! Account successfully verified.</h2>";
            echo "<p>Your database row has been updated to 1.</p>";
            echo "<p><a href='login.php' style='color:#800020; font-weight:bold;'>Go to Login Page</a></p>";
            echo "</div>";
        } else {
            echo "Error updating status: " . $conn->error;
        }
        $update->close();
    } else {
        echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif; color:#721c24;'>";
        echo "<h2>Invalid or expired verification token.</h2>";
        echo "<p>Check if this user was already verified.</p>";
        echo "</div>";
    }
    $stmt->close();
} else {
    echo "No token provided.";
}
?>
