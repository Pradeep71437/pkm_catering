<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['admin_username'])) {
    // Redirect the user to the login page
    header("Location: ../index.php");
    exit(); // Make sure to stop execution after redirecting
}
include 'db_connection.php';

$result = mysqli_query($conn, "SELECT * FROM order_details");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chennai's Top Iyengar Catering Services: A Legacy of Quality Since 1954</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="https://raw.githubusercontent.com/pkm1996/pkmcatering/main/uploads/favicon-32x32%20pkm%20.avif" rel="icon" type="image/x-icon">
    <link href="https://raw.githubusercontent.com/pkm1996/pkmcatering/main/uploads/apple-touch-icon.avif" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="admin.css">
    <style>
        .neworder {
            background-color: #343a40;
            color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .neworder .row {
            align-items: center;
        }

        .neworder .opt {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        @media (max-width: 576px) {
            .neworder .opt {
                justify-content: flex-start;
                flex-wrap: wrap;
            }

            .neworder .opt a {
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="text-primary m-0">P.K.M Catering</h1>
                    </a>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3 text-left">
                    <a href="../index.php" class="btn btn-link text-primary" accesskey="1">Home</a>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center my-4">Orders</h1>
                </div>
            </div>
        </div>
        <div class="container orders">
            <?php
            // Loop through each order and create a neworder div
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class=" container neworder row">
                    <div class="col-md-6">
                        <h3 class="m-4">New Order: <span><?= $row['id'] ?> (<?= $row['uname'] ?>)</span></h3>
                    </div>
                    <div class="col-md-6 opt text-nowrap" style="float:right;">
                        <a href="remove.php?remove_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">REMOVE</a>
                        <a href="view_order.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">VIEW ORDER</a>
                        <a href="update-process.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">UPDATE</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>