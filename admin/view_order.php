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
    $firdayaft = isset($row['firdayaft']) ? unserialize($row['firdayaft']) : [];
    $firdayeve = isset($row['firdayeve']) ? unserialize($row['firdayeve']) : [];
    $firdaydrink = isset($row['firdaydrink']) ? unserialize($row['firdaydrink']) : [];
    $firdaysnack = isset($row['firdaysnack']) ? unserialize($row['firdaysnack']) : [];
    $firdaydinner = isset($row['firdaydinner']) ? unserialize($row['firdaydinner']) : [];
    $secdaymor = isset($row['secdaymor']) ? unserialize($row['secdaymor']) : [];
    $secdayaft = isset($row['secdayaft']) ? unserialize($row['secdayaft']) : [];
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
    
</head>

<body>
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
    <div class="container">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0 text-center m-4" >P.K.M Catering</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a><br>
        <h1 class="text-center">Order Details</h1>
    </div>

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
                <td id="cou"></td>
                <td id="amount"></td>
            </tr>

            <tr>
            <th style="color: black">Customer Mobile :</th>
            <td><?= $row['unumber'] ?></td>
            <td id="cou"></td>
            <td ></td>

            </tr>

            <tr>
            <th style="color: black">Customer E-Mail :</th>
            <td><?= $row['uemail'] ?></td>
            <td id="cou"></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Customer City :</th>
            <td><?= $row['ucity'] ?></td>
            <td id="cou"></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Event Starting Date :</th>
            <td><?= $row['usdate'] ?></td>
            <td id="cou"></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Event Ending Date :</th>
            <td><?= $row['uedate'] ?></td>
            <td id="cou"></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Party Details :</th>
            <td><?= $row['upartydetails'] ?></td>
            <td id="cou"></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">Mandapam Details :</th>
            <td><?= $row['uhalldetails'] ?></td>
            <td id="cou"></td>
            <td></td>

            </tr>

            <tr>
            <th style="color: black">புஷ்பம், மாலைகள் ஜானவாசம்</th>
            <td id="deatils"><?php echo !empty($malaifirday) ? implode(', ', $malaifirday) : ''; ?></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="f1"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">முகூர்த்தம்</th>
            <td><?php echo !empty($wedmalaiset) ? implode(', ', $wedmalaiset) : ''; ?></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="f2"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">காசியாத்திரை செட்</th>
            <td><?php echo !empty($kasiyathiraiset) ? implode(', ', $kasiyathiraiset) : ''; ?></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="f3"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">ஷேம தண்டல சாமான்கள்</th>
            <td><?php echo !empty($samangalset) ? implode(', ', $samangalset) : ''; ?></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="f4"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">நிச்சயதார்த்த தட்டுகள்</th>
            <td><?php echo !empty($wedplateset) ? implode(', ', $wedplateset) : ''; ?></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="f5"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">TOILET SET (with Plastic Tray)</th>
            <td><?php echo !empty($toiletset) ? implode(', ', $toiletset) : ''; ?></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="f6"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">வைதீக சாமான்கள்</th>
            <td><?php echo !empty($vedicset) ? implode(', ', $vedicset) : ''; ?></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="f7"  oninput="calculatottotal2()"  required></td>
            </tr>

            <!-- long and count -->
            <tr>
            <th style="color: black">விரத பட்சணங்கள்</th>
            <td><?php echo !empty($carrybag) ? implode(', ', $carrybag) : ''; ?></td>
            <td id="cou"><?= !empty($row['carrybagcou']) ? $row['carrybagcou'] : ''; ?></td>
            <td><input placeholder="Amount" type="number" id="f8"  oninput="calculatottotal2()"  required></td>
            </tr>
            
            <tr>
            <th style="color: black">ஸ்வீட் பாக்ஸ்</th>
            <td><?php echo !empty($carrybagweat) ? implode(', ', $carrybagweat) : ''; ?></td>
            <td id="cou"><?= !empty($row['carrybagsweatcou']) ? $row['carrybagsweatcou'] : ''; ?></td>
            <td><input placeholder="Amount" type="number" id="f9"  oninput="calculatottotal2()"  required></td>
            </tr>
            
            <tr>
            <th style="color: black">பணியாரக்காய்கள்</th>
            <td><?php echo !empty($carrybagcookie) ? implode(', ', $carrybagcookie) : ''; ?></td>
            <td id="cou"><?= !empty($row['carrybagcookiecou']) ? $row['carrybagcookiecou'] : ''; ?></td>
            <td><input placeholder="Amount" type="number" id="f10"  oninput="calculatottotal2()"  required></td>
            </tr>
            
            <tr>
                <th style="color: black">ஜானவாசம் காலை டிபன்</th>
                <td><?php echo !empty($firdaymor) ? implode(', ', $firdaymor) : ''; ?></td>
                <td id="cou"><?= !empty($row['firdaymorcou']) ? $row['firdaymorcou'] : ''; ?></td>
                <td><input placeholder="Amount" type="number" id="f11"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">ஜானவாசம் சாப்பாடு</th>
            <td><?php echo !empty($firdayaft) ? implode(', ', $firdayaft) : ''; ?></td>
            <td id="cou"><?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f12"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">ஜானவாசம் மாலை டிபன்</th>
            <td><?php echo !empty($firdayeve) ? implode(', ', $firdayeve) : ''; ?></td>
            <td id="cou"><?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f13"  oninput="calculatottotal2()"  required></td>
            </tr>
            
            <tr>
            <th style="color: black">பிரெஷ் ஜூஸ்</th>
            <td><?php echo !empty($firdaydrink) ? implode(', ', $firdaydrink) : ''; ?></td>
            <td id="cou"><?= !empty($row['firdaycooldrinkcou']) ? $row['firdaycooldrinkcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f14"  oninput="calculatottotal2()"  required></td>
            </tr>
            
            <tr>
            <th style="color: black">சாட்ஸ்</th>
            <td><?php echo !empty($firdaysnack) ? implode(', ', $firdaysnack) : ''; ?></td>
            <td id="cou"><?= !empty($row['firdaysnackcou']) ? $row['firdaysnackcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f15"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">ஸ்பெஷல் டின்னர்</th>
            <td><?php echo !empty($firdaydinner) ? implode(', ', $firdaydinner) : ''; ?></td>
            <td id="cou"><?= !empty($row['firdaydinnercou']) ? $row['firdaydinnercou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f16"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">முகூர்த்தம் காலை டிபன்</th>
            <td><?php echo !empty($secdaymor) ? implode(', ', $secdaymor) : ''; ?></td>
            <td id="cou"><?= !empty($row['secdaymorcou']) ? $row['secdaymorcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f17"  oninput="calculatottotal2()"  required></td>
            </tr>

            <tr>
            <th style="color: black">முகூர்த்தம் சாப்பாடு</th>
            <td><?php echo !empty($secdayaft) ? implode(', ', $secdayaft) : ''; ?></td>
            <td id="cou"><?= !empty($row['secdayaftercou']) ? $row['secdayaftercou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f18"  oninput="calculatottotal2()"  required></td>
            </tr>
            
            <tr>
            <th style="color: black">முகூர்த்தம் மாலை ஸ்நாக்ஸ்</th>
            <td><?php echo !empty($secdayeve) ? implode(', ', $secdayeve) : ''; ?></td>
            <td id="cou"><?= !empty($row['secdayevecou']) ? $row['secdayevecou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f19"  oninput="calculatottotal2()"  required></td>
            </tr> 

            <tr>
            <th style="color: black">முகூர்த்தம் டின்னர்</th>
            <td><?php echo !empty($secdaydinner) ? implode(', ', $secdaydinner) : ''; ?></td>
            <td id="cou"><?= !empty($row['secdaydinnercou']) ? $row['secdaydinnercou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f20"  oninput="calculatottotal2()"  required></td>
            </tr>
                        
            <tr>
            <th style="color: black">சம்மந்தி விருந்து</th>
            <td><?php echo !empty($guestfood) ? implode(', ', $guestfood) : ''; ?></td>
            <td id="cou"><?= !empty($row['guestfoodcou']) ? $row['guestfoodcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f21"  oninput="calculatottotal2()"  required></td>
            </tr>
                        
            <tr>
            <th style="color: black">Packet food</th>
            <td><?php echo !empty($packetfood) ? implode(', ', $packetfood) : ''; ?></td>
            <td id="cou"><?= !empty($row['packetfoodcou']) ? $row['packetfoodcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="f22"  oninput="calculatottotal2()"  required> </td>
            </tr>
    
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td>
                    Total: ₹ <span id="total2" style="color: green"></span>
                </td>
            </tr>
        </table>

        <div class="download text-center">
            <button id="downloadButton" onclick="downloadPDF()" class="btn btn-warning">Download</button>
        </div>
     
    </div>
    <div class="container justify-content-center align-items-center text-center">
        <table class="table table-bordered" id="pdfTable2" style="width: 300px;height:fit-content;"> 
            <tr class="text-primary">
                <th class="text-primary text-center" style="width : 150px;">Title</th>
                <td class="text-primary text-center">Rate</td>
                <td class="text-primary text-center">Count</td>
                <td class="text-primary text-center">Amount</td>
            </tr>

            <tr>
            <th style="color: black">புஷ்பம், மாலைகள் ஜானவாசம்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" class="common-input" type="number" id="t1"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">முகூர்த்தம்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="t2"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">காசியாத்திரை செட்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="t3"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">ஷேம தண்டல சாமான்கள்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="t4"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">நிச்சயதார்த்த தட்டுகள்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="t5"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">TOILET SET (with Plastic Tray)</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="t6"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">வைதீக சாமான்கள்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"></td>
            <td><input placeholder="Amount" type="number" id="t7"  oninput="calculatAmount()" required></td>
            </tr>

            <!-- long and count -->
            <tr>
            <th style="color: black">விரத பட்சணங்கள்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['carrybagcou']) ? $row['carrybagcou'] : ''; ?></td>
            <td><input placeholder="Amount" type="number" id="t8"  oninput="calculatAmount()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">ஸ்வீட் பாக்ஸ்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['carrybagsweatcou']) ? $row['carrybagsweatcou'] : ''; ?></td>
            <td><input placeholder="Amount" type="number" id="t9"  oninput="calculatAmount()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">பணியாரக்காய்கள்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['carrybagcookiecou']) ? $row['carrybagcookiecou'] : ''; ?></td>
            <td><input placeholder="Amount" type="number" id="t10"  oninput="calculatAmount()" required></td>
            </tr>
            
            <tr>
                <th style="color: black">ஜானவாசம் காலை டிபன்</th>
                <td><input placeholder="Amount" type="number" required></td>
                <td id="cou"><?= !empty($row['firdaymorcou']) ? $row['firdaymorcou'] : ''; ?></td>
                <td><input placeholder="Amount" type="number" id="t11" oninput="calculatAmount()" required></td>
            </tr>


            <tr>
            <th style="color: black">ஜானவாசம் சாப்பாடு</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['firdayaftcou']) ? $row['firdayaftcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t12"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">ஜானவாசம் மாலை டிபன்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t13"  oninput="calculatAmount()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">பிரெஷ் ஜூஸ்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['firdaycooldrinkcou']) ? $row['firdaycooldrinkcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t14"  oninput="calculatAmount()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">சாட்ஸ்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['firdaysnackcou']) ? $row['firdaysnackcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t15"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">ஸ்பெஷல் டின்னர்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['firdaydinnercou']) ? $row['firdaydinnercou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t16"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">முகூர்த்தம் காலை டிபன்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['secdaymorcou']) ? $row['secdaymorcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t17"  oninput="calculatAmount()" required></td>
            </tr>

            <tr>
            <th style="color: black">முகூர்த்தம் சாப்பாடு</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['secdayaftercou']) ? $row['secdayaftercou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t18"  oninput="calculatAmount()" required></td>
            </tr>
            
            <tr>
            <th style="color: black">முகூர்த்தம் மாலை ஸ்நாக்ஸ்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['secdayevecou']) ? $row['secdayevecou'] : ''; ?></td>
            <td ><input placeholder="Amount" class="common-input" type="number" id="t19"  oninput="calculatAmount()" required></td>
            </tr> 

            <tr>
            <th style="color: black">முகூர்த்தம் டின்னர்</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['secdaydinnercou']) ? $row['secdaydinnercou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t20"  oninput="calculatAmount()" required></td>
            </tr>
                        
            <tr>
            <th style="color: black">சம்மந்தி விருந்து</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['guestfoodcou']) ? $row['guestfoodcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t21"  oninput="calculatAmount()" required></td>
            </tr>
                        
            <tr>
            <th style="color: black">Packet food</th>
            <td><input placeholder="Amount" type="number" required></td>
            <td id="cou"><?= !empty($row['packetfoodcou']) ? $row['packetfoodcou'] : ''; ?></td>
            <td ><input placeholder="Amount" type="number" id="t22"  oninput="calculatAmount()" required></td>
            </tr>
    
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td>
                    Total: ₹ <span id="total1" style="color: green"></span>
                </td>
            </tr>
        </table>
        <div class="download text-center p-3">
            <button id="downloadButton" onclick="downloadPDF2()" class="btn btn-warning">Download</button>
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
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
        });
    }

    function downloadPDF2() {
        var element = document.getElementById('pdfTable2');

        html2pdf(element, {
            margin: 1,
            filename: 'order_details.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
        });
    }



    function calculatottotal2() {
    var total = 0;

    // Iterate over input fields and calculate total
    for (var i = 1; i <= 22; i++) {
        var fieldValue = parseFloat(document.getElementById("f" + i).value) || 0;
        total += fieldValue;
    }
    document.getElementById("total2").textContent = total;
}
function calculatAmount() {

var total = 0;

// Iterate over input fields and calculate total
for (var i = 1; i <= 22; i++) {
var fieldValue = document.getElementById("t" + i).valueAsNumber || 0;
total += fieldValue;
}
document.getElementById("total1").textContent = total;
}

</script>

<script>
  function calculatottotal2() {
    // Your calculation logic here
  }

  function handleKeyDown(event, nextInputId) {
    if (event.key === "Enter") {
      event.preventDefault();
      document.getElementById(nextInputId).focus();
    } else if (event.key === "ArrowUp" || event.key === "ArrowDown") {
      event.preventDefault();
    }
  }
</script>

</html>
