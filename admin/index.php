<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['admin_username'])) {
    // Redirect the user to the login page
    header("Location: ../index.html");
    exit(); // Make sure to stop execution after redirecting
}
$conn = mysqli_connect("localhost", "root", "", "pkm_catering");

$result = mysqli_query($conn, "SELECT * FROM order_details");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>P.K.M Catering</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/style2.css">
   <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0 text-center m-4" >P.K.M Catering</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a><br>
        <h1 class="text-center">Orders</h1>
    </div>
    <div class="container orders ">
    <?php
        // Loop through each order and create a neworder div
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
           <div class="m-4 container neworder ">
            <h3 class="m-4 white">New Order: <span> <?= $row['id'] ?>(<?= $row['uname'] ?>)</span></h3>
            <div class="opt">
            <a href="remove.php?remove_id=<?= $row['id'] ?>" class="remove">REMOVE</a>
            <a href="view_order.php?id=<?= $row['id'] ?>" class="view">VIEW ORDER</a>
        </div>
           </div>
           <?php
        }
        ?>
    </div>
</body>
</html>