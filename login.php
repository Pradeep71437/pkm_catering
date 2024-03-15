<?php
// Database configuration
$servername = "localhost"; // Change this if your database server is on a different host
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "pkm_catering"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
            // echo "Login successful!";
            header("Location: admin/index.php");
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
