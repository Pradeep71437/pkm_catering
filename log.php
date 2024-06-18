<?php
// Start session
session_start();

// Database configuration
include 'admin/db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['uname'];
    $password = $_POST['upass'];

    // Prepare SQL statement to fetch user from database
    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if ($password === $row['password']) { // Assuming password is stored in plain text
            // Authentication successful
            $_SESSION['admin_username'] = $username; // Set session variable to indicate user is logged in
            header("Location: admin/adminindex.php");
            // You can redirect the user to another page here
        } else {
            // Authentication failed
            echo "Invalid password.";
        }
    } else {
        // User not found
        echo "User not found.";
    }
}

// Close connection
$conn->close();
?>
