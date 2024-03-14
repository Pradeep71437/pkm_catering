<?php
// Your database connection code here
$conn = mysqli_connect("localhost", "root", "", "pkm_catering");

// Fetch specific order data based on the passed ID
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM orders WHERE id = $order_id");
    $row = mysqli_fetch_assoc($result);


    $breakfast = isset($row['breakfast']) ? unserialize($row['breakfast']) : [];
    $lunch = isset($row['lunch']) ? unserialize($row['lunch']) : [];
    $dinner = isset($row['dinner']) ? unserialize($row['dinner']) : [];

} else {
    // Handle the case where no ID is provided
    header("Location: index.php"); // Redirect to the main page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

<!-- Add this script tag to include jsPDF library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>


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
</head>

<body>
<div class="container">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0 text-center m-4" >P.K.M Catering</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a><br>
        <h1 class="text-center">Order Details</h1>
    </div>
<style>
    table{
        margin-top:20px
    }
    table,th,tr{
        border: 1px solid black;
    }
    td,th{
        padding:5px 15px;
        color: black
    }
    </style>
    <div class="container orders-table">

        <table class="table table-bordered" id="pdfTable">
            <tr>
                <th style="color: black">Customer Name :</th>
                <td><?= $row['user_name'] ?></td>
                <td></td>
            </tr>

            <tr>
            <th style="color: black">Customer Mobile :</th>
            <td><?= $row['user_number'] ?></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Customer E-Mail :</th>
            <td><?= $row['user_mail'] ?></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Customer City :</th>
            <td><?= $row['user_city'] ?></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Event Date :</th>
            <td><?= $row['event_date'] ?></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Total Guests :</th>
            <td><?= $row['total_guests'] ?></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Breakfast :</th>
            <td><?php echo implode(', ', $breakfast); ?></td>
            <td>Amount :  ₹ <input type="number" id="f1"  oninput="calculateTotal()" required></td>
            </tr>

            <tr>
            <th style="color: black">Lunch :</th>
            <td><?php echo implode(', ', $lunch); ?></td>
            <td>Amount :  ₹ <input type="number" id="f2" oninput="calculateTotal()" required></td>

            </tr>

            <tr>
            <th style="color: black">Dinner:</th>
            <td><?php echo implode(', ', $dinner); ?></td>
            <td>Amount :  ₹ <input type="number" id="f3" oninput="calculateTotal()" required></td>

            </tr>

            <tr>
                <th></th>
                <td></td>
                <td>
                    Total: ₹ <span id="total" style="color: green"></span>
                </td>
            </tr>
        </table>
        <div class="download text-center">
            <button id="downloadButton" onclick="downloadPDF()" class="btn btn-warning">Download</button>
        </div>
     
    </div>
</body>

<script>

function downloadPDF() {
        var element = document.getElementById('pdfTable');

        html2pdf(element, {
            margin: 10,
            filename: 'order_details.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        });
    }


    function calculateTotal() {
        // Get input values
        var f1 = document.getElementById("f1").valueAsNumber || 0;
        var f2 = document.getElementById("f2").valueAsNumber || 0;
        var f3 = document.getElementById("f3").valueAsNumber || 0;

        // Calculate total
        var total = f1 + f2 + f3;

        // Display the total in the span
        document.getElementById("total").textContent = total;
    }
</script>
</html>
