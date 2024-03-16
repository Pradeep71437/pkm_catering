<?php
// Your database connection code here
$conn = mysqli_connect("localhost", "root", "", "pkm_catering");

// Fetch specific order data based on the passed ID
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM order_details WHERE id = $order_id");
    $row = mysqli_fetch_assoc($result);


    $malaifirday = isset($row['malaifirday']) ? unserialize($row['malaifirday']) : [];
    $wedmalaiset = isset($row['wedmalaiset']) ? unserialize($row['wedmalaiset']) : [];
    $kasiyathiraiset = isset($row['kasiyathiraiset']) ? unserialize($row['kasiyathiraiset']) : [];
    $samangalset = isset($row['samangalset']) ? unserialize($row['samangalset']) : [];
    $wedplateset = isset($row['wedplateset']) ? unserialize($row['wedplateset']) : [];
    $toiletset = isset($row['toiletset']) ? unserialize($row['toiletset']) : [];
    $vedicset = isset($row['vedicset']) ? unserialize($row['vedicset']) : [];
    // long iteams 
    $carrybag = isset($row['carrybag']) ? unserialize($row['carrybag']) : [];
    $carrybagweat = isset($row['carrybagweat']) ? unserialize($row['carrybagweat']) : [];
    $carrybagcookie = isset($row['carrybagcookie']) ? unserialize($row['carrybagcookie']) : [];
    $firdaymor = isset($row['firdaymor']) ? unserialize($row['firdaymor']) : [];
    // $firdayaft = isset($row['firdayaft']) ? unserialize($row['firdayaft']) : [];
    $firdayeve = isset($row['firdayeve']) ? unserialize($row['firdayeve']) : [];
    $firdaycooldrink = isset($row['firdaycooldrink']) ? unserialize($row['firdaycooldrink']) : [];
    $firdaysnack = isset($row['firdaysnack']) ? unserialize($row['firdaysnack']) : [];
    $firdaydinner = isset($row['firdaydinner']) ? unserialize($row['firdaydinner']) : [];
    $secdaymor = isset($row['secdaymor']) ? unserialize($row['secdaymor']) : [];
    // $secdayafter = isset($row['secdayafter']) ? unserialize($row['secdayafter']) : [];
    $secdayeve = isset($row['secdayeve']) ? unserialize($row['secdayeve']) : [];
    $secdaydinner = isset($row['secdaydinner']) ? unserialize($row['secdaydinner']) : [];
    $guestfood = isset($row['guestfood']) ? unserialize($row['guestfood']) : [];
    $packetfood = isset($row['packetfood']) ? unserialize($row['packetfood']) : [];


} else {
    // Handle the case where no ID is provided
    header("Location: index.php"); // Redirect to the main page
    exit();
}


// ?>

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
    table,input{
        width: 100px;
    }

    </style>
    <div class="container orders-table">

        <table class="table table-bordered" id="pdfTable">
            <tr class="text-primary">
                <th class="text-primary text-center" style="width : 150px;">Title</th>
                <td class="text-primary text-center">Details</td>
                <td class="text-primary text-center">Count</td>
                <td class="text-primary text-center">Amount</td>
            </tr>
            <tr>
                <th style="color: black">Customer Name :</th>
                <td><?= $row['uname'] ?></td>
                <td></td>
                <td id="amount"></td>
            </tr>

            <tr>
            <th style="color: black">Customer Mobile :</th>
            <td><?= $row['unumber'] ?></td>
            <td></td>
            <td ></td>

            </tr>

            <tr>
            <th style="color: black">Customer E-Mail :</th>
            <td><?= $row['uemail'] ?></td>
            <td></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Customer City :</th>
            <td><?= $row['ucity'] ?></td>
            <td></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Event Starting Date :</th>
            <td><?= $row['usdate'] ?></td>
            <td></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Event Ending Date :</th>
            <td><?= $row['uedate'] ?></td>
            <td></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Party Details :</th>
            <td><?= $row['upartydetails'] ?></td>
            <td></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Mandapam Details :</th>
            <td><?= $row['uhalldetails'] ?></td>
            <td></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">புஷ்பம், மாலைகள் ஜானவாசம்</th>
            <td id="deatils"><?php echo implode(', ', $malaifirday); ?></td>
            <td></td>
            <td>Amount :  ₹ <input type="number" id="f1"  oninput="calculateTotal()" required></td>
            </tr>

            <tr>
            <th style="color: black">முகூர்த்தம்</th>
            <td><?php echo implode(', ', $wedmalaiset); ?></td>
            <td></td>
            <td>Amount :  ₹ <input type="number" id="f2"  oninput="calculateTotal()" required></td>
            </tr>

            <tr>
            <th style="color: black">காசியாத்திரை செட்</th>
            <td><?php echo implode(', ', $kasiyathiraiset); ?></td>
            <td></td>
            <td>Amount :  ₹ <input type="number" id="f3"  oninput="calculateTotal()" required></td>
            </tr>

            <tr>
            <th style="color: black">ஷேம தண்டல சாமான்கள்</th>
            <td><?php echo implode(', ', $samangalset); ?></td>
            <td></td>
            <td>Amount :  ₹ <input type="number" id="f4"  oninput="calculateTotal()" required></td>
            </tr>

            <tr>
            <th style="color: black">நிச்சயதார்த்த தட்டுகள்</th>
            <td><?php echo implode(', ', $wedplateset); ?></td>
            <td></td>
            <td>Amount :  ₹ <input type="number" id="f5"  oninput="calculateTotal()" required></td>
            </tr>

            <tr>
            <th style="color: black">TOILET SET (with Plastic Tray)</th>
            <td><?php echo implode(', ', $toiletset); ?></td>
            <td></td>
            <td>Amount :  ₹ <input type="number" id="f6"  oninput="calculateTotal()" required></td>
            </tr>

            <tr>
            <th style="color: black">வைதீக சாமான்கள்</th>
            <td><?php echo implode(', ', $vedicset); ?></td>
            <td></td>
            <td>Amount :  ₹ <input type="number" id="f7"  oninput="calculateTotal()" required></td>
            </tr>

            <!-- long and count -->
            <tr>
            <th style="color: black">விரத பட்சணங்கள்</th>
            <td><?php echo implode(', ', $carrybag); ?></td>
            <td><?= $row['carrybagcou'] ?></td>
            <td>Amount :  ₹ <input type="number" id="f8"  oninput="calculateTotal()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">ஸ்வீட் பாக்ஸ்</th>
            <td><?php echo implode(', ', $carrybagweat); ?></td>
            <td><?= $row['carrybagsweatcou'] ?></td>
            <td>Amount :  ₹ <input type="number" id="f9"  oninput="calculateTotal()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">பணியாரக்காய்கள்</th>
            <td><?php echo implode(', ', $carrybagcookie); ?></td>
            <td><?= $row['carrybagcookiecou'] ?></td>
            <td>Amount :  ₹ <input type="number" id="f10"  oninput="calculateTotal()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">ஜானவாசம் காலை டிபன்</th>
            <td><?php echo implode(', ', $firdaymor); ?></td>
            <td><?= $row['firdaymorcou'] ?></td>
            <td >Amount :  ₹ <input type="number" id="f11"  oninput="calculateTotal()" required></td>
            </tr>
            

            
            
            <tr>
                <th></th>
                <td></td>
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
            margin: 1,
            filename: 'order_details.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: '' }
        });
    }




function calculateTotal() {

            var total = 0;

    // Iterate over input fields and calculate total
    for (var i = 1; i <= 11; i++) {
        var fieldValue = document.getElementById("f" + i).valueAsNumber || 0;
        total += fieldValue;
    }
        document.getElementById("total").textContent = total;
    }

</script>
</html>
