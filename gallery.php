<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.K.M Catering | Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/wow/wow.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .custom-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-warning m-0">P.K.M Catering</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="index.php#about" class="nav-item nav-link">About</a>
                    <a href="index.php#service" class="nav-item nav-link">Service</a>
                    <a href="index.php#menu" class="nav-item nav-link">Menu</a>
                    <a href="/index.php#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="book.html" class="btn btn-warning py-2 px-4">ORDER NOW</a>
            </div>
        </nav>

        <div class="container-fluid py-5 bg-dark hero-header mb-5" style="min-height: 100px;">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Gallery Start -->
    <main>
        <div class="container">
            <div class="row">
                <?php
                // Connect to the MySQL database
                include 'admin/db_connection.php';

                // Check connection
                if ($conn) {
                    // Execute the query
                    $result = mysqli_query($conn, "SELECT * FROM images");

                    // Check if the query was successful
                    if ($result) {
                        // Loop through each row and create an img element for each image
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['attributes']) ?>" class="custom-img" loading="lazy">
                            </div>
                            <?php
                        }

                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }

                    // Close the database connection
                    mysqli_close($conn);
                } else {
                    die("Connection failed: " . mysqli_connect_error());
                }
                ?>
            </div>
        </div>
    </main>
    <!-- Gallery End -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>