<?php
// Your database connection code here
include 'db_connection.php';

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
?>

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
    <link href="https://raw.githubusercontent.com/pkm1996/pkmcatering/main/uploads/favicon-32x32%20pkm%20.avif" rel="icon" type="image/x-icon">
    <link href="https://raw.githubusercontent.com/pkm1996/pkmcatering/main/uploads/apple-touch-icon.avif" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> -->

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> #fff -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="admin.css">

</head>

<body>
    <style>
        table {
            margin-top: 20px;
            background-color: #fff;
        }

        table,
        th,
        tr {
            border: 1px solid black;
        }

        td,
        th {

            color: black
        }

        table input {
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
            -webkit-appearance: none;
            /* Webkit browsers */
            margin: 0;
            /* Optional - if you want to remove the margin */
        }
    </style>
    <div class="ps-5 m-4 text-warning m-0"><a href="adminindex.php" class="btn btn-link text-primary mb-4" accesskey="1">Home</a></div>
    <div class="container" id="pdfTable">
        <div>
            <h1 class="text-warning m-0 text-center m-4">P.K.M Catering</h1>
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Order Details</h1>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-warning table_res">
                        <th class="text-warning text-center col-xs-3 col-md-2">Title</th>
                        <th class="text-warning text-center col-xs-6 col-md-9">Details</th>
                        <th class="text-warning text-center col-xs-2 col-md-1">Count</th>
                        <th class="text-warning text-center col-xs-3 col-md-2">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color: black">Customer Name :</th>
                        <td><?= $row['uname'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th style="color: black">Customer Mobile :</th>
                        <td><?= $row['unumber'] ?></td>
                        <td></td>
                        <td></td>
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
                        <th style="color: black; cursor: pointer;" onclick="showPopup('புஷ்பம், மாலைகள் ஜானவாசம்','<?= !empty($malaifirday) ? implode('<br> ', $malaifirday) : ''; ?>', '<?= !empty($row['']) ? $row[''] : ''; ?>')">புஷ்பம், மாலைகள் ஜானவாசம்</th>
                        <td><?php echo !empty($malaifirday) ? implode(', ', $malaifirday) : ''; ?></td>
                        <td></td>
                        <td><input placeholder="Amount" type="number" id="f1" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f2')" required></td>
                    </tr>
                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('முகூர்த்தம்','<?= !empty($wedmalaiset) ? implode('<br> ', $wedmalaiset) : ''; ?>', '<?= !empty($row['']) ? $row[''] : ''; ?>')">முகூர்த்தம்</th>
                        <td><?php echo !empty($wedmalaiset) ? implode(', ', $wedmalaiset) : ''; ?></td>
                        <td></td>
                        <td><input placeholder="Amount" type="number" id="f2" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f3')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('காசியாத்திரை செட்','<?= !empty($kasiyathiraiset) ? implode('<br> ', $kasiyathiraiset) : ''; ?>', '<?= !empty($row['']) ? $row[''] : ''; ?>')">காசியாத்திரை செட்</th>
                        <td><?php echo !empty($kasiyathiraiset) ? implode(', ', $kasiyathiraiset) : ''; ?></td>
                        <td></td>
                        <td><input placeholder="Amount" type="number" id="f3" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f4')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('ஷேம தண்டல சாமான்கள்','<?= !empty($samangalset) ? implode('<br> ', $samangalset) : ''; ?>', '<?= !empty($row['']) ? $row[''] : ''; ?>')">ஷேம தண்டல சாமான்கள்</th>
                        <td><?php echo !empty($samangalset) ? implode(', ', $samangalset) : ''; ?></td>
                        <td></td>
                        <td><input placeholder="Amount" type="number" id="f4" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f5')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('நிச்சயதார்த்த தட்டுகள்','<?= !empty($wedplateset) ? implode('<br> ', $wedplateset) : ''; ?>', '<?= !empty($row['']) ? $row[''] : ''; ?>')">நிச்சயதார்த்த தட்டுகள்</th>
                        <td><?php echo !empty($wedplateset) ? implode(', ', $wedplateset) : ''; ?></td>
                        <td></td>
                        <td><input placeholder="Amount" type="number" id="f5" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f6')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('TOILET SET (with Plastic Tray)','<?= !empty($toiletset) ? implode('<br> ', $toiletset) : ''; ?>', '<?= !empty($row['']) ? $row[''] : ''; ?>')">TOILET SET (with Plastic Tray)</th>
                        <td><?php echo !empty($toiletset) ? implode(', ', $toiletset) : ''; ?></td>
                        <td></td>
                        <td><input placeholder="Amount" type="number" id="f6" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f7')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('வைதீக சாமான்கள்','<?= !empty($vedicset) ? implode('<br> ', $vedicset) : ''; ?>', '<?= !empty($row['']) ? $row[''] : ''; ?>')">வைதீக சாமான்கள்</th>
                        <td><?php echo !empty($vedicset) ? implode(', ', $vedicset) : ''; ?></td>
                        <td></td>
                        <td><input placeholder="Amount" type="number" id="f7" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f8')" required></td>
                    </tr>

                    <!-- long and count -->
                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('விரத பட்சணங்கள்','<?= !empty($carrybag) ? implode('<br> ', $carrybag) : ''; ?>', '<?= !empty($row['carrybagcou']) ? $row['carrybagcou'] : ''; ?>')">விரத பட்சணங்கள்</th>
                        <td><?php echo !empty($carrybag) ? implode(', ', $carrybag) : ''; ?></td>
                        <td><?= !empty($row['carrybagcou']) ? $row['carrybagcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f8" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f9')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('ஸ்வீட் பாக்ஸ்','<?= !empty($carrybagweat) ? implode('<br> ', $carrybagweat) : ''; ?>', '<?= !empty($row['carrybagsweatcou']) ? $row['carrybagsweatcou'] : ''; ?>')">ஸ்வீட் பாக்ஸ்</th>
                        <td><?php echo !empty($carrybagweat) ? implode(', ', $carrybagweat) : ''; ?></td>
                        <td><?= !empty($row['carrybagsweatcou']) ? $row['carrybagsweatcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f9" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f10')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('பணியாரக்காய்கள்','<?= !empty($carrybagcookie) ? implode('<br> ', $carrybagcookie) : ''; ?>', '<?= !empty($row['carrybagcookiecou']) ? $row['carrybagcookiecou'] : ''; ?>')">பணியாரக்காய்கள்</th>
                        <td><?php echo !empty($carrybagcookie) ? implode(', ', $carrybagcookie) : ''; ?></td>
                        <td><?= !empty($row['carrybagcookiecou']) ? $row['carrybagcookiecou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f10" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f11')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('ஜானவாசம் காலை டிபன்','<?= !empty($firdaymor) ? implode('<br> ', $firdaymor) : ''; ?>', '<?= !empty($row['firdaymorcou']) ? $row['firdaymorcou'] : ''; ?>')">ஜானவாசம் காலை டிபன்</th>
                        <td><?php echo !empty($firdaymor) ? implode(', ', $firdaymor) : ''; ?></td>
                        <td><?= !empty($row['firdaymorcou']) ? $row['firdaymorcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f11" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f12')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('ஜானவாசம் சாப்பாடு','<?= !empty($firdayaft) ? implode('<br> ', $firdayaft) : ''; ?>', '<?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?>')">ஜானவாசம் சாப்பாடு</th>
                        <td><?php echo !empty($firdayaft) ? implode(', ', $firdayaft) : ''; ?></td>
                        <td><?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f12" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f13')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('ஜானவாசம் மாலை டிபன்','<?= !empty($firdayeve) ? implode('<br> ', $firdayeve) : ''; ?>', '<?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?>')">ஜானவாசம் மாலை டிபன்</th>
                        <td><?php echo !empty($firdayeve) ? implode(', ', $firdayeve) : ''; ?></td>
                        <td><?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f13" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f14')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('பிரெஷ் ஜூஸ்','<?= !empty($firdaydrink) ? implode('<br> ', $firdaydrink) : ''; ?>', '<?= !empty($row['firdaycooldrinkcou']) ? $row['firdaycooldrinkcou'] : ''; ?>')">பிரெஷ் ஜூஸ்</th>
                        <td><?php echo !empty($firdaydrink) ? implode(', ', $firdaydrink) : ''; ?></td>
                        <td><?= !empty($row['firdaycooldrinkcou']) ? $row['firdaycooldrinkcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f14" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f15')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('சாட்ஸ்','<?= !empty($firdaysnack) ? implode('<br> ', $firdaysnack) : ''; ?>', '<?= !empty($row['firdaysnackcou']) ? $row['firdaysnackcou'] : ''; ?>')">சாட்ஸ்</th>
                        <td><?php echo !empty($firdaysnack) ? implode(', ', $firdaysnack) : ''; ?></td>
                        <td><?= !empty($row['firdaysnackcou']) ? $row['firdaysnackcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f15" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f16')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('ஸ்பெஷல் டின்னர்','<?= !empty($firdaydinner) ? implode('<br> ', $firdaydinner) : ''; ?>', '<?= !empty($row['firdaydinnercou']) ? $row['firdaydinnercou'] : ''; ?>')">ஸ்பெஷல் டின்னர்</th>
                        <td><?php echo !empty($firdaydinner) ? implode(', ', $firdaydinner) : ''; ?></td>
                        <td><?= !empty($row['firdaydinnercou']) ? $row['firdaydinnercou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f16" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f17')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('முகூர்த்தம் காலை டிபன்','<?= !empty($secdaymor) ? implode('<br> ', $secdaymor) : ''; ?>', '<?= !empty($row['secdaymorcou']) ? $row['secdaymorcou'] : ''; ?>')">முகூர்த்தம் காலை டிபன்</th>
                        <td><?php echo !empty($secdaymor) ? implode(', ', $secdaymor) : ''; ?></td>
                        <td><?= !empty($row['secdaymorcou']) ? $row['secdaymorcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f17" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f18')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('முகூர்த்தம் சாப்பாடு','<?= !empty($secdayaft) ? implode('<br> ', $secdayaft) : ''; ?>', '<?= !empty($row['secdayaftercou']) ? $row['secdayaftercou'] : ''; ?>')">முகூர்த்தம் சாப்பாடு</th>
                        <td><?php echo !empty($secdayaft) ? implode(', ', $secdayaft) : ''; ?></td>
                        <td><?= !empty($row['secdayaftercou']) ? $row['secdayaftercou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f18" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f19')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('முகூர்த்தம் மாலை ஸ்நாக்ஸ்','<?= !empty($secdayeve) ? implode('<br> ', $secdayeve) : ''; ?>', '<?= !empty($row['secdayevecou']) ? $row['secdayevecou'] : ''; ?>')">முகூர்த்தம் மாலை ஸ்நாக்ஸ்</th>
                        <td><?php echo !empty($secdayeve) ? implode(', ', $secdayeve) : ''; ?></td>
                        <td><?= !empty($row['secdayevecou']) ? $row['secdayevecou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f19" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f20')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('முகூர்த்தம் டின்னர்','<?= !empty($secdaydinner) ? implode('<br> ', $secdaydinner) : ''; ?>', '<?= !empty($row['secdaydinnercou']) ? $row['secdaydinnercou'] : ''; ?>')">முகூர்த்தம் டின்னர்</th>
                        <td><?php echo !empty($secdaydinner) ? implode(', ', $secdaydinner) : ''; ?></td>
                        <td><?= !empty($row['secdaydinnercou']) ? $row['secdaydinnercou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f20" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f21')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('சம்மந்தி விருந்து', '<?= !empty($guestfood) ? implode('<br> ', $guestfood) : ''; ?>', '<?= !empty($row['guestfoodcou']) ? $row['guestfoodcou'] : ''; ?>')">சம்மந்தி விருந்து</th>
                        <td><?php echo !empty($guestfood) ? implode(', ', $guestfood) : ''; ?></td>
                        <td><?= !empty($row['guestfoodcou']) ? $row['guestfoodcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f21" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f22')" required></td>
                    </tr>

                    <tr>
                        <th style="color: black; cursor: pointer;" onclick="showPopup('Packet food','<?= !empty($packetfood) ? implode('<br> ', $packetfood) : ''; ?>', '<?= !empty($row['packetfoodcou']) ? $row['packetfoodcou'] : ''; ?>')">Packet food</th>
                        <td><?php echo !empty($packetfood) ? implode(', ', $packetfood) : ''; ?></td>
                        <td><?= !empty($row['packetfoodcou']) ? $row['packetfoodcou'] : ''; ?></td>
                        <td><input placeholder="Amount" type="number" id="f22" oninput="calculatottotal2()" onkeydown="handleKeyDown(event, 'f22')" required> </td>
                    </tr>

                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td>Total: ₹ <span id="total" style="color: green"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="download text-center p-5">
        <button id="downloadButton" onclick="downloadPDF()" class="btn btn-warning">Download</button>
    </div>
    <!-- <div class="container">
    <div class="table-responsive">
        <table class="table table-bordered" id="pdfTable2" style="width: 50%;text-align: center;">
            <thead>
                <tr class="text-warning">
                    <th class="text-warning text-center col-xs-2 col-md-2">Title</th>
                    <th class="text-warning text-center col-xs-2 col-md-2">Rate</th>
                    <th class="text-warning text-center col-xs-2 col-md-2">Count</th>
                    <th class="text-warning text-center col-xs-2 col-md-2">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="color: black">புஷ்பம், மாலைகள் ஜானவாசம்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td></td>
                    <td><input placeholder="Amount" type="number" id="t1"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't2')" required></td>
                </tr>
                <tr>
                    <th style="color: black">முகூர்த்தம்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td></td>
                    <td><input placeholder="Amount" type="number" id="t2"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't3')" required></td>
                </tr>
                <tr>
                    <th style="color: black">காசியாத்திரை செட்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td></td>
                    <td><input placeholder="Amount" type="number" id="t3"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't4')" required></td>
                </tr>
                <tr>
                    <th style="color: black">ஷேம தண்டல சாமான்கள்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td></td>
                    <td><input placeholder="Amount" type="number" id="t4"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't5')" required></td>
                </tr>
                <tr>
                    <th style="color: black">நிச்சயதார்த்த தட்டுகள்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td></td>
                    <td><input placeholder="Amount" type="number" id="t5"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't6')" required></td>
                </tr>
                <tr>
                    <th style="color: black">TOILET SET (with Plastic Tray)</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td></td>
                    <td><input placeholder="Amount" type="number" id="t6"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't7')" required></td>
                </tr>
                <tr>
                    <th style="color: black">வைதீக சாமான்கள்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td></td>
                    <td><input placeholder="Amount" type="number" id="t7"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't8')" required></td>
                </tr>
                <tr>
                    <th style="color: black">விரத பட்சணங்கள்</th>
                    <td><input id="rate1" placeholder="Rate" type="number" required></td>
                    <td id="cou1"><?= !empty($row['carrybagcou']) ? $row['carrybagcou'] : ''; ?></td>
                    <td><input id="amount1" placeholder="Amount" type="number" id="t8"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't9')" required></td>
                </tr>
                <tr>
                    <th style="color: black">ஸ்வீட் பாக்ஸ்</th>
                    <td><input id="rate2" placeholder="Rate" type="number" required></td>
                    <td id="cou2"><?= !empty($row['carrybagsweatcou']) ? $row['carrybagsweatcou'] : ''; ?></td>
                    <td><input id="amount2" placeholder="Amount" type="number" id="t9"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't10')" required></td>
                </tr>
                <tr>
                    <th style="color: black">பணியாரக்காய்கள்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['carrybagcookiecou']) ? $row['carrybagcookiecou'] : ''; ?></td>
                    <td><input id="amoun3" placeholder="Amount" type="number" id="t10"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't11')" required></td>
                </tr>
                <tr>
                    <th style="color: black">ஜானவாசம் காலை டிபன்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['firdaymorcou']) ? $row['firdaymorcou'] : ''; ?></td>
                    <td><input id="amoun4" placeholder="Amount" type="number" id="t11" oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't12')" required></td>
                </tr>
                <tr>
                    <th style="color: black">ஜானவாசம் சாப்பாடு</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['firdayaftcou']) ? $row['firdayaftcou'] : ''; ?></td>
                    <td ><input id="amoun5" placeholder="Amount" type="number" id="t12"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't13')" required></td>
                </tr>
                <tr>
                    <th style="color: black">ஜானவாசம் மாலை டிபன்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['firdayevecou']) ? $row['firdayevecou'] : ''; ?></td>
                    <td ><input id="amoun6" placeholder="Amount" type="number" id="t13"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't14')" required></td>
                </tr>
                <tr>
                    <th style="color: black">பிரெஷ் ஜூஸ்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['firdaycooldrinkcou']) ? $row['firdaycooldrinkcou'] : ''; ?></td>
                    <td ><input id="amoun7" placeholder="Amount" type="number" id="t14"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't15')" required></td>
                </tr>
            
                <tr>
                    <th style="color: black">சாட்ஸ்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['firdaysnackcou']) ? $row['firdaysnackcou'] : ''; ?></td>
                    <td ><input id="amoun8" placeholder="Amount" type="number" id="t15"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't16')" required></td>
                </tr>

                <tr>
                    <th style="color: black">ஸ்பெஷல் டின்னர்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['firdaydinnercou']) ? $row['firdaydinnercou'] : ''; ?></td>
                    <td ><input id="amoun9" placeholder="Amount" type="number" id="t16"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't17')" required></td>
                </tr>

                <tr>
                    <th style="color: black">முகூர்த்தம் காலை டிபன்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['secdaymorcou']) ? $row['secdaymorcou'] : ''; ?></td>
                    <td ><input id="amoun10" placeholder="Amount" type="number" id="t17"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't18')" required></td>
                </tr>

                <tr>
                    <th style="color: black">முகூர்த்தம் சாப்பாடு</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['secdayaftercou']) ? $row['secdayaftercou'] : ''; ?></td>
                    <td ><input id="amoun11" placeholder="Amount" type="number" id="t18"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't19')" required></td>
                </tr>
            
                <tr>
                    <th style="color: black">முகூர்த்தம் மாலை ஸ்நாக்ஸ்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['secdayevecou']) ? $row['secdayevecou'] : ''; ?></td>
                    <td ><input id="amoun12" placeholder="Amount" type="number" id="t19"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't20')" required></td>
                </tr> 

                <tr>
                    <th style="color: black">முகூர்த்தம் டின்னர்</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['secdaydinnercou']) ? $row['secdaydinnercou'] : ''; ?></td>
                    <td ><input id="amoun13" placeholder="Amount" type="number" id="t20"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't21')" required></td>
                </tr>
                        
                <tr>
                    <th style="color: black">சம்மந்தி விருந்து</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['guestfoodcou']) ? $row['guestfoodcou'] : ''; ?></td>
                    <td ><input id="amoun14" placeholder="Amount" type="number" id="t21"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't22')" required></td>
                </tr>
                        
                <tr>
                    <th style="color: black">Packet food</th>
                    <td><input placeholder="Rate" type="number" required></td>
                    <td><?= !empty($row['packetfoodcou']) ? $row['packetfoodcou'] : ''; ?></td>
                    <td ><input placeholder="Amount" type="number" id="t22"  oninput="calculatAmount()" onkeydown="handleKeyDown(event, 't22')" required></td>
                </tr>
    
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td>Total: ₹ <span id="total1" style="color: green"></span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div> -->
    <!-- sample code  -->
    <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-4" id="pdfTable3">
                        <div class="row pb-4">
                            <div class="col-12 p-2 h5" id="popupTitle">Popup Title</div>
                            <div class="col-12 h6">Count : <span id="popupFooter">0</span></div>
                        </div>
                        <div contenteditable="true" id="popupBody">Popup Body Content</div>
                    </div>
                </div>
                <div class="download text-center p-3">
                    <button onclick="downloadPDF3()" class="btn btn-warning">Download</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function showPopup(title, bodyContent, headerContent) {
            // Set the popup header
            document.getElementById('popupModalLabel').innerHTML = title;

            // Set the popup body content
            document.getElementById('popupTitle').innerHTML = title;
            document.getElementById('popupBody').innerHTML = bodyContent;
            document.getElementById('popupFooter').innerHTML = headerContent;

            // Show the modal
            $('#popupModal').modal('show');
        }

        function downloadPDF3() {
        var element = document.getElementById('pdfTable3');
        var title = document.getElementById('popupTitle').textContent.trim(); // Get the title text
        var usdate = '<?= $row['usdate'] ?>'; // Get the usdate value from PHP
        var filename = (title ? title + ' ' : '') + usdate + '.pdf'; // Combine title and usdate for the filename

        // Make contenteditable="false"
        document.getElementById('popupBody').contentEditable = "false";

        html2pdf().from(element).set({
            margin: 1,
            filename: filename,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2, useCORS: true },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        }).save().then(function () {
            // Reset contenteditable="true" after download
            document.getElementById('popupBody').contentEditable = "true";
        });
    }
    </script>
    <!-- sample end -->
    <script src="admin.js"></script>
    <script>
        function handleKeyDown(event, nextId) {
            if (event.key === 'Enter') {
                document.getElementById(nextId).focus();
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle (including Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Additional Libraries -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/counterup2@1.0.4/dist/index.min.js"></script> -->

    <!-- Tempus Dominus (Date Time Picker) -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.34/moment-timezone.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script> -->

    <!-- Owl Carousel (Comment out local library link if needed) -->
    <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <!-- Owl Carousel CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
</body>
</html>