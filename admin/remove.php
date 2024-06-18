<?php
// Establish database connection
include 'db_connection.php';

// Check if the remove ID is set and is a valid integer
if(isset($_GET['remove_id']) && is_numeric($_GET['remove_id'])) {
    // Escape the remove ID to prevent SQL injection
    $remove_id = mysqli_real_escape_string($conn, $_GET['remove_id']);

    // Prepare the SQL query to delete the order with the given ID
    $delete_query = "DELETE FROM order_details WHERE id = $remove_id";

    // Execute the delete query
    if(mysqli_query($conn, $delete_query)) {
        // If deletion is successful, redirect back to the page displaying orders
        header("Location: adminindex.php");
        exit();
    } else {
        // If there's an error in executing the query, display an error message
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // If the remove ID is not set or not a valid integer, redirect back to the page displaying orders
    header("Location: adminindex.php");
    exit();
}
?>
