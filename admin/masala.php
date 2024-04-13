<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>PKM Catering</title>
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
    <link rel="stylesheet" href="admin.css">
    <style>
        table{
    margin-top:20px;
    background-color: #fff;
}
table,th,tr{
    border: 1px solid black;
}
td,th{
    
    color: black
}
table input{
    width: 100px;
    height: auto;
    align-items: center;
    justify-content: center;
    border: none;
    outline: none;
    text-align: center;
}

table input[type="number"]::-webkit-inner-spin-button,
table input[type="number"]::-webkit-outer-spin-button {
-webkit-appearance: none; /* Webkit browsers */
margin: 0; /* Optional - if you want to remove the margin */
}
#cou{
    text-align: left;
    align-items: center;
    justify-content: center;
}
    </style>
</head>
<body>
    <div class="container orders-table">
        <div class="text-center pt-5 pb-2">
            <h2>Kindly Fill The Details For Your Order</h2>
        </div>
        <table class="table table-bordered" id="pdfTable">
            <tr class="text-primary">
                <th class="text-primary text-center" style="width : 30px;">S.no</th>
                <td class="text-primary text-center" style="width : 200px;">Details</td>
                <td class="text-primary text-center" style="width : 100px;">Count</td>
                <td class="text-primary text-center" style="width : 30px;">S.no</td>
                <td class="text-primary text-center" style="width : 200px;">Amount</td>
                <td class="text-primary text-center" style="width : 100px;">Amount</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <div class="download text-center p-3">
            <button id="downloadButton" onclick="downloadPDF2()" class="btn btn-warning">Download</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="admin.js"></script>
</body>
</html>