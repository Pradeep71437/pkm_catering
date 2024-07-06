<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Catering</title>
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

    <!-- Libraries Stylesheet -->
     <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style2.css">
    <?php

include 'db_connection.php';

// Check if the form is submitted
if (count($_POST) > 0) {
    // Update the order details with the submitted data
    $order_id = $_GET['id']; // Get the order ID from the URL parameter
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $unumber = mysqli_real_escape_string($conn, $_POST['unumber']);
    $uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
    $ucity = mysqli_real_escape_string($conn, $_POST['ucity']);
    $usdate = mysqli_real_escape_string($conn, $_POST['usdate']);
    $uedate = mysqli_real_escape_string($conn, $_POST['uedate']);
    $upartydetails = mysqli_real_escape_string($conn, $_POST['upartydetails']);
    $uhalldetails = mysqli_real_escape_string($conn, $_POST['uhalldetails']);
// large value count
    $carrybagcou = mysqli_real_escape_string($conn, $_POST['carrybagcou']);
    $carrybagsweatcou = mysqli_real_escape_string($conn, $_POST['carrybagsweatcou']);
    $carrybagcookiecou = mysqli_real_escape_string($conn, $_POST['carrybagcookiecou']);
    $firdaymorcou = mysqli_real_escape_string($conn, $_POST['firdaymorcou']);
    $firdayaftcou = mysqli_real_escape_string($conn, $_POST['firdayaftcou']);
    $firdayevecou = mysqli_real_escape_string($conn, $_POST['firdayevecou']);
    $firdaycooldrinkcou = mysqli_real_escape_string($conn, $_POST['firdaycooldrinkcou']);
    $firdaysnackcou = mysqli_real_escape_string($conn, $_POST['firdaysnackcou']);
    $firdaydinnercou = mysqli_real_escape_string($conn, $_POST['firdaydinnercou']);
    $secdaymorcou = mysqli_real_escape_string($conn, $_POST['secdaymorcou']);
    $secdayaftercou = mysqli_real_escape_string($conn, $_POST['secdayaftercou']);
    $secdayevecou = mysqli_real_escape_string($conn, $_POST['secdayevecou']);
    $secdaydinnercou = mysqli_real_escape_string($conn, $_POST['secdaydinnercou']);
    $guestfoodcou = mysqli_real_escape_string($conn, $_POST['guestfoodcou']);
    $packetfoodcou = mysqli_real_escape_string($conn, $_POST['packetfoodcou']);

    // Serialize all data if it exists in the form submission
    $malaifirday = isset($_POST['malaifirday']) ? serialize($_POST['malaifirday']) : '';
    $wedmalaiset = isset($_POST['wedmalaiset']) ? serialize($_POST['wedmalaiset']) : '';
    $kasiyathiraiset = isset($_POST['kasiyathiraiset']) ? serialize($_POST['kasiyathiraiset']) : '';
    $samangalset = isset($_POST['samangalset']) ? serialize($_POST['samangalset']) : '';
    $wedplateset = isset($_POST['wedplateset']) ? serialize($_POST['wedplateset']) : '';
    $toiletset = isset($_POST['toiletset']) ? serialize($_POST['toiletset']) : '';
    $vedicset = isset($_POST['vedicset']) ? serialize($_POST['vedicset']) : '';
    // long data with count
    $carrybag = isset($_POST['carrybag']) ? serialize($_POST['carrybag']) : '';
    $carrybagweat = isset($_POST['carrybagweat']) ? serialize($_POST['carrybagweat']) : '';
    $carrybagcookie = isset($_POST['carrybagcookie']) ? serialize($_POST['carrybagcookie']) : '';
    $firdaymor = isset($_POST['firdaymor']) ? serialize($_POST['firdaymor']) : '';
    $firdayeve = isset($_POST['firdayeve']) ? serialize($_POST['firdayeve']) : '';
    $firdaydrink = isset($_POST['firdaydrink']) ? serialize($_POST['firdaydrink']) : '';
    $firdaysnack = isset($_POST['firdaysnack']) ? serialize($_POST['firdaysnack']) : '';
    $firdaydinner = isset($_POST['firdaydinner']) ? serialize($_POST['firdaydinner']) : '';
    $secdaymor = isset($_POST['secdaymor']) ? serialize($_POST['secdaymor']) : '';
    $secdayeve = isset($_POST['secdayeve']) ? serialize($_POST['secdayeve']) : '';
    $secdaydinner = isset($_POST['secdaydinner']) ? serialize($_POST['secdaydinner']) : '';
    $guestfood = isset($_POST['guestfood']) ? serialize($_POST['guestfood']) : '';
    $packetfood = isset($_POST['packetfood']) ? serialize($_POST['packetfood']) : '';
    $firdayaft = isset($_POST['firdayaft']) ? serialize($_POST['firdayaft']) : '';
    $secdayaft = isset($_POST['secdayaft']) ? serialize($_POST['secdayaft']) : '';

    // Construct and execute the SQL query
    $sql = "UPDATE order_details SET  
    uname='$uname', 
    unumber='$unumber',
    uemail='$uemail',
    ucity='$ucity',
    usdate='$usdate',
    uedate='$uedate',
    upartydetails='$upartydetails',
    uhalldetails='$uhalldetails',
    carrybagcou='$carrybagcou',
    carrybagsweatcou='$carrybagsweatcou',
    carrybagcookiecou='$carrybagcookiecou',
    firdaymorcou='$firdaymorcou',
    firdayaftcou='$firdayaftcou',
    firdayevecou='$firdayevecou',
    firdaycooldrinkcou='$firdaycooldrinkcou',
    firdaysnackcou='$firdaysnackcou',
    firdaydinnercou='$firdaydinnercou',
    secdaymorcou='$secdaymorcou',
    secdayaftercou='$secdayaftercou',
    secdayevecou='$secdayevecou',
    secdaydinnercou='$secdaydinnercou',
    guestfoodcou='$guestfoodcou',
    packetfoodcou='$packetfoodcou',
    malaifirday='$malaifirday',
    wedmalaiset='$wedmalaiset',
    kasiyathiraiset='$kasiyathiraiset',
    samangalset='$samangalset',
    wedplateset='$wedplateset',
    toiletset='$toiletset',
    vedicset='$vedicset',
    carrybag='$carrybag',
    carrybagweat='$carrybagweat',
    carrybagcookie='$carrybagcookie',
    firdaymor='$firdaymor',
    firdayeve='$firdayeve',
    firdaydrink='$firdaydrink',
    firdaysnack='$firdaysnack',
    firdaydinner='$firdaydinner',
    secdaymor='$secdaymor',
    secdayeve='$secdayeve',
    secdaydinner='$secdaydinner',
    guestfood='$guestfood',
    packetfood='$packetfood',
    firdayaft='$firdayaft',
    secdayaft='$secdayaft'
    WHERE id='$order_id'";
    
    mysqli_query($conn, $sql);

    // Check if the query was successful
    if (mysqli_affected_rows($conn) > 0) {
        $message = "Record Modified Successfully";
    } else {
        $message = "Failed to modify record";
    }
}
// Fetch specific order data based on the passed ID
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM order_details WHERE id = $order_id");
    $row = mysqli_fetch_assoc($result);

    // Define an array of fields to unserialize
    $fields_to_unserialize = ['malaifirday', 'wedmalaiset', 'kasiyathiraiset', 'samangalset', 'wedplateset', 'toiletset', 
    'vedicset', 'carrybag', 'carrybagweat', 'carrybagcookie', 'firdaymor', 'firdayaft', 'firdayeve', 
    'firdaydrink', 'firdaysnack', 'firdaydinner', 'secdaymor', 'secdayaft', 'secdayeve', 'secdaydinner', 
    'guestfood', 'packetfood'];

    // Unserialize the specified fields
    foreach ($fields_to_unserialize as $field) {
        ${$field} = !empty($row[$field]) ? unserialize($row[$field]) : [];
    }
}
?>
</head>
    <style>
         span {
        cursor: pointer;
    }
    </style>
<body>
<div class="container text-center">
    <div class="row pt-5">
        <div class="col-2"><a href="adminindex.php" class="btn btn-link text-primary mb-4" accesskey="1"> Home </a></div>
        <div class="col-8">
        <h2 >Kindly Fill The Details to Update Your Order</h2>
        </div>
    </div>
</div>
<div class="container">
    <form method="post" class="mt-5 container" >
        <h4>Personal Details:</h4>
        <div class="row m-3">
            <div class="col-md-6">
                <label for="name" class="mx-3"><b>Your Name</b></label>
                <input type="text" placeholder="Enter Your Name" class="form-control m-3" name="uname" id="name" value="<?= isset($row['uname']) ? $row['uname'] : '' ?>">
            </div>
            <div class="col-md-6">
                <label for="number" class="mx-3"><b>Your Whatsapp Number</b></label>
                <input type="tel" placeholder="Enter Your Whatsapp No" class="form-control m-3" id="number" name="unumber" value="<?= isset($row['unumber']) ? $row['unumber'] : '' ?>">
            </div>
            <div class="col-md-6">
                <label for="mail" class="mx-3"><b>Your Email</b></label>
            <input type="email" placeholder="Enter Your E-mail" class="form-control m-3" id="mail" name="uemail" value="<?= isset($row['uemail']) ? $row['uemail'] : '' ?>">
            </div>
            <div class="col-md-6">
                <label for="city" class="mx-3"><b>Your City</b></label>
                <input type="text" placeholder="Enter Your City" class="form-control m-3"id="city" name="ucity" value="<?= isset($row['ucity']) ? $row['ucity'] : '' ?>">
            </div>
        </div>
        <h4>Order Details:</h4>
        <div class="row m-3">
            <div class="col-md-6">
                <label for="date" class="mx-3"><b>Event Strating Date</b></label>
                <input type="date" class="form-control m-3" id="date" name="usdate" value="<?= isset($row['usdate']) ? $row['usdate'] : '' ?>">
            </div>
            <div class="col-md-6">
                <label for="date" class="mx-3"><b>Event Ending Date</b></label>
                <input type="date" class="form-control m-3" id="date" name="uedate" value="<?= isset($row['uedate']) ? $row['uedate'] : '' ?>">
            </div>
            <div class="col-md-6">
                <label for="city" class="mx-3"><b>Party Details</b></label>
                <textarea type="textarea" placeholder="Enter Your City" class="form-control m-3" id="city" name="upartydetails" style="height: 100px;" ><?= isset($row['upartydetails']) ? $row['upartydetails'] : '' ?></textarea>
            </div>
            <div class="col-md-6">
                <label for="city" class="mx-3"><b>DATE & MANDAPAM DETAILS</b></label>
                <textarea type="textarea" placeholder="Enter Your City" class="form-control m-3" id="city" name="uhalldetails" style="height: 100px;" ><?= isset($row['uhalldetails']) ? $row['uhalldetails'] : '' ?></textarea>
            </div>
        </div>
        <h5 class="text-center mt-4">Food Details:</h5>
        <p class="text-center">Please select the required food items!</p>
        <div class="row m-3">
            <!-- long ones 1 -->
            <h5 class="text-center mt-4">Viratha Patchanangal (விரத பட்சணங்கள்) Menu:</h5>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="விரத பட்சணங்கள்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <!-- <li class="px-3 m-2 text-center"> <input type="checkbox" id="selectAllCheckbox" style="color: black;"> Select All</li>  -->
                                <li class="px-3 m-2">
                                    <input type="checkbox" style="color: black;" id="select-all1" class="select-all" onchange="checkAll(this)" /> 
                                    <label for="select-all1">Select All</label>
                                </li>
                                <div class="col-sm-4">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="லட்டு" <?php echo in_array('லட்டு', $carrybag) ? 'checked' : ''; ?>> <span>லட்டு (Laddu)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="மைசூர் பாக்" <?php echo in_array('மைசூர் பாக்', $carrybag) ? 'checked' : ''; ?>> <span>மைசூர் பாக் (Mysorepak)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="பாதாம் கேக்" <?php echo in_array('பாதாம் கேக்', $carrybag) ? 'checked' : ''; ?>> <span>பாதாம் கேக் (Badam Cake)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="முந்திரி கேக்" <?php echo in_array('முந்திரி கேக்', $carrybag) ? 'checked' : ''; ?>> <span>முந்திரி கேக் (Cashew Cake)</span></li>

                                </div>
                                <div class="col-sm-4">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="நுக்கல்" <?php echo in_array('நுக்கல்', $carrybag) ? 'checked' : ''; ?>> <span>நுக்கல் (Nookol)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="சோன்பப்டி" <?php echo in_array('சோன்பப்டி', $carrybag) ? 'checked' : ''; ?>> <span>சோன்பப்டி (Soan Papdi)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="நேஷனல் கேக்" <?php echo in_array('நேஷனல் கேக்', $carrybag) ? 'checked' : ''; ?>> <span>நேஷனல் கேக் (National Cake)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="திரட்டிப்பால்" <?php echo in_array('திரட்டிப்பால்', $carrybag) ? 'checked' : ''; ?>> <span>திரட்டிப்பால் (Thirattipal)</span></li>

                                </div>
                                <div class="col-sm-4">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="அப்பம்" <?php echo in_array('அப்பம்', $carrybag) ? 'checked' : ''; ?>> <span>அப்பம் (Appam)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="தேங்காய் பர்பி" <?php echo in_array('தேங்காய் பர்பி', $carrybag) ? 'checked' : ''; ?>> <span>தேங்காய் பர்பி (Coconut Burfi)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="கைமுறுக்கு" <?php echo in_array('கைமுறுக்கு', $carrybag) ? 'checked' : ''; ?>> <span>கைமுறுக்கு (Kai Murukku)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="மணோப்பு" <?php echo in_array('மணோப்பு', $carrybag) ? 'checked' : ''; ?>> <span>மணோப்பு (Manoppu)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="carrybagcou" value="<?= isset($row['carrybagcou']) ? $row['carrybagcou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 2 -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="ஸ்வீட் பாக்ஸ்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <li class="px-3 m-2">
                                    <input type="checkbox" style="color: black;" id="select-all2" class="select-all" onchange="checkAll(this)" /> 
                                    <label for="select-all2"><span>Select All</span></label>
                                </li>
                                <div class="col-sm-6">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="லட்டு" <?php echo in_array('லட்டு', $carrybagweat) ? 'checked' : ''; ?>> <span>லட்டு (Laddu)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="பாதுஷா" <?php echo in_array('பாதுஷா', $carrybagweat) ? 'checked' : ''; ?>> <span>பாதுஷா (Badusha)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="மில்க் கேக்" <?php echo in_array('மில்க் கேக்', $carrybagweat) ? 'checked' : ''; ?>> <span>மில்க் கேக் (Milk Cake)</span></li>

                                </div>
                                <div class="col-lg-4">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="போர்ன்விடா கேக்" <?php echo in_array('போர்ன்விடா கேக்', $carrybagweat) ? 'checked' : ''; ?>> <span>போர்ன்விடா கேக் (Bournvita Cake)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="மிக்ஸர்" <?php echo in_array('மிக்ஸர்', $carrybagweat) ? 'checked' : ''; ?>> <span>மிக்ஸர் (Mixture)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="carrybagsweatcou" value="<?= isset($row['carrybagsweatcou']) ? $row['carrybagsweatcou'] : '' ?>">
                </div>
                <!-- long ones 3 -->
                <div class="col-lg-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="பணியாரக்காய்கள்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <li class="px-3 m-2">
                                    <input type="checkbox" style="color: black;" id="select-all3" class="select-all" onchange="checkAll(this)" /> 
                                    <label for="select-all3">Select All</label>
                                </li>
                                <div class="col-6">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagcookie[]" value="லட்டு" <?php echo in_array('லட்டு', $carrybagcookie) ? 'checked' : ''; ?>> <span>லட்டு (Laddu)</span></li>
                                </div>
                                <div class="col-6">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagcookie[]" value="மணோகரம்" <?php echo in_array('மணோகரம்', $carrybagcookie) ? 'checked' : ''; ?>> <span>மணோகரம் (Manogaram)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="carrybagcookiecou" value="<?= isset($row['carrybagcookiecou']) ? $row['carrybagcookiecou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 4 -->
            <div class="row align-items-center justify-content-center">
                
                <h5 class="text-center mt-5">Jaanavasam (ஜானவாசம்) Menu:</h5>

                <div class="col-lg-10 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="ஜானவாசம் காலை டிபன்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <li class="px-3 m-2">
                                    <input type="checkbox" style="color: black;" id="select-all4" class="select-all" onchange="checkAll(this)" /> 
                                    <label for="select-all4">Select</label>
                                </li>
                                <div class="col-sm-6">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="பைனாப்பிள் புட்டிங்" <?php echo in_array('பைனாப்பிள் புட்டிங்', $firdaymor) ? 'checked' : ''; ?>> <span>Pineapple Pudding (பைனாப்பிள் புட்டிங்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="அசோகா அல்வா" <?php echo in_array('அசோகா அல்வா', $firdaymor) ? 'checked' : ''; ?>> <span>Ashoka Alva(அசோகா அல்வா)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="அவல் கேசரி" <?php echo in_array('அவல் கேசரி', $firdaymor) ? 'checked' : ''; ?>> <span>Aval Kesari (அவல் கேசரி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="மினி இட்லி" <?php echo in_array('மினி இட்லி', $firdaymor) ? 'checked' : ''; ?>> <span>Mini idli(மினி இட்லி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="தட்டு இட்லி" <?php echo in_array('தட்டு இட்லி', $firdaymor) ? 'checked' : ''; ?>> <span>Plate idli(தட்டு இட்லி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="கல் தோசை" <?php echo in_array('கல் தோசை', $firdaymor) ? 'checked' : ''; ?>> <span>Kal dosa(கல் தோசை)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="பொங்கல்" <?php echo in_array('பொங்கல்', $firdaymor) ? 'checked' : ''; ?>> <span>Pongal (பொங்கல்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="ஊத்தப்பம்" <?php echo in_array('ஊத்தப்பம்', $firdaymor) ? 'checked' : ''; ?>> <span>Uttapam (ஊத்தப்பம்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="வெஜ். கிச்சடி" <?php echo in_array('வெஜ். கிச்சடி', $firdaymor) ? 'checked' : ''; ?>> <span>Veg Kichadi (வெஜ். கிச்சடி)</span></li>
                                </div>
                                <div class="col-sm-6">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="மெது வடை" <?php echo in_array('மெது வடை', $firdaymor) ? 'checked' : ''; ?>> <span>Medhu Vadai (மெது வடை)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="தேங்காய் சட்னி" <?php echo in_array('தேங்காய் சட்னி', $firdaymor) ? 'checked' : ''; ?>> <span>Coconut Chutney (தேங்காய் சட்னி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="புதினா சட்னி" <?php echo in_array('புதினா சட்னி', $firdaymor) ? 'checked' : ''; ?>> <span>Pudina chutney (புதினா சட்னி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="சாம்பார்" <?php echo in_array('சாம்பார்', $firdaymor) ? 'checked' : ''; ?>> <span>Sambaar (சாம்பார்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="காபி" <?php echo in_array('காபி', $firdaymor) ? 'checked' : ''; ?>> <span>Coffee (காபி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="டீ" <?php echo in_array('டீ', $firdaymor) ? 'checked' : ''; ?>> <span>Tea (டீ)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="பால்" <?php echo in_array('பால்', $firdaymor) ? 'checked' : ''; ?>> <span>Milk (பால்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="Boost" <?php echo in_array('Boost', $firdaymor) ? 'checked' : ''; ?>> <span>Boost (பூஸ்ட்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="Horlicks" <?php echo in_array('Horlicks', $firdaymor) ? 'checked' : ''; ?>> <span>Horlicks (ஹார்லிக்ஸ்)</span></li>
                                </div>
                                
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaymorcou" value="<?= isset($row['firdaymorcou']) ? $row['firdaymorcou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 5 -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="ஜானவாசம் சாப்பாடு" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">ஸ்வீட்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="மைசூர்பாகு" <?php echo in_array('மைசூர்பாகு', $firdayaft) ? 'checked' : ''; ?>> <span>மைசூர்பாகு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ஜாங்கிரி" <?php echo in_array('ஜாங்கிரி', $firdayaft) ? 'checked' : ''; ?>> <span>ஜாங்கிரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அஜ்மீர் கேக்" <?php echo in_array('அஜ்மீர் கேக்', $firdayaft) ? 'checked' : ''; ?>> <span>அஜ்மீர் கேக்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="மோகன்டால்" <?php echo in_array('மோகன்டால்', $firdayaft) ? 'checked' : ''; ?>> <span>மோகன்டால்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாக்கோ கேக்" <?php echo in_array('சாக்கோ கேக்', $firdayaft) ? 'checked' : ''; ?>> <span>சாக்கோ கேக்</span></li>
                                    <h6 class="px-3 p-3">வடை</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாம்பார் வடை" <?php echo in_array('சாம்பார் வடை', $firdayaft) ? 'checked' : ''; ?>> <span>சாம்பார் வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ரசவடை" <?php echo in_array('ரசவடை', $firdayaft) ? 'checked' : ''; ?>> <span>ரசவடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வாழைப்பூ வடை" <?php echo in_array('வாழைப்பூ வடை', $firdayaft) ? 'checked' : ''; ?>> <span>வாழைப்பூ வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ஆமவடை" <?php echo in_array('ஆமவடை', $firdayaft) ? 'checked' : ''; ?>> <span>ஆமவடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தயிர்வடை" <?php echo in_array('தயிர்வடை', $firdayaft) ? 'checked' : ''; ?>> <span>தயிர்வடை</span></li>
                                    <h6 class="px-3 p-3">சிப்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வாழை சிப்ஸ்" <?php echo in_array('வாழை சிப்ஸ்', $firdayaft) ? 'checked' : ''; ?>> <span>வாழை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="நேந்திரம் சிப்ஸ்" <?php echo in_array('நேந்திரம் சிப்ஸ்', $firdayaft) ? 'checked' : ''; ?>> <span>நேந்திரம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேனை சிப்ஸ்" <?php echo in_array('சேனை சிப்ஸ்', $firdayaft) ? 'checked' : ''; ?>> <span>சேனை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சர்க்கரை வல்லிகிழங்கு சிப்ஸ்" <?php echo in_array('சர்க்கரை வல்லிகிழங்கு சிப்ஸ்', $firdayaft) ? 'checked' : ''; ?>> <span>சர்க்கரை வல்லிகிழங்கு</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">தயிர் பச்சடி</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="காரபூந்தி தயிர்பச்சடி" <?php echo in_array('காரபூந்தி தயிர்பச்சடி', $firdayaft) ? 'checked' : ''; ?>> <span>காரபூந்தி தயிர்பச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தக்காளி தயிர்பச்சடி" <?php echo in_array('தக்காளி தயிர்பச்சடி', $firdayaft) ? 'checked' : ''; ?>> <span>தக்காளி தயிர்பச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வெண்டைக்காய் தயிர்பச்சடி" <?php echo in_array('வெண்டைக்காய் தயிர்பச்சடி', $firdayaft) ? 'checked' : ''; ?>> <span>வெண்டைக்காய் தயிர்பச்சடி</span></li>
                                    <h6 class="px-3 p-3">கூட்டு</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="கத்திரிக்காய் கடலை புளிப்புக்கூட்டு" <?php echo in_array('"கத்திரிக்காய் கடலை புளிப்புக்கூட்டு', $firdayaft) ? 'checked' : ''; ?>> <span>கத்திரிக்காய் கடலை புளிப்புக்கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="செளசெள கடலை புளிப்புக்கூட்டு" <?php echo in_array('செளசெள கடலை புளிப்புக்கூட்டு', $firdayaft) ? 'checked' : ''; ?>> <span>செளசெள கடலை புளிப்புக்கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேனை தயிர்கூட்டு" <?php echo in_array('சேனை தயிர்கூட்டு', $firdayaft) ? 'checked' : ''; ?>> <span>சேனை தயிர்கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="எரிசேரி" <?php echo in_array('எரிசேரி', $firdayaft) ? 'checked' : ''; ?>> <span>எரிசேரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தக்காளிக்காய் கூட்டு" <?php echo in_array('தக்காளிக்காய் கூட்டு', $firdayaft) ? 'checked' : ''; ?>> <span>தக்காளிக்காய் கூட்டு</span></li>
                                    <h6 class="px-3 p-3">பொறியல்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வெண்டைக்காய் காரகறமது" <?php echo in_array('வெண்டைக்காய் காரகறமது', $firdayaft) ? 'checked' : ''; ?>> <span>வெண்டைக்காய் காரகறமது</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேனைகாரகறமது or Fry" <?php echo in_array('சேனைகாரகறமது or Fry', $firdayaft) ? 'checked' : ''; ?>> <span>சேனைகாரகறமது or Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேம்பு Fry" <?php echo in_array('சேம்பு Fry', $firdayaft) ? 'checked' : ''; ?>> <span>சேம்பு Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="கோவக்காய் காரகறமது" <?php echo in_array('கோவக்காய் காரகறமது', $firdayaft) ? 'checked' : ''; ?>> <span>கோவக்காய் காரகறமது</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="கோஸ்பட்டாணி பொறியல்" <?php echo in_array('கோஸ்பட்டாணி பொறியல்', $firdayaft) ? 'checked' : ''; ?>> <span>கோஸ்பட்டாணி பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அவரைக்காய் பொறியல்" <?php echo in_array('அவரைக்காய் பொறியல்', $firdayaft) ? 'checked' : ''; ?>> <span>அவரைக்காய் பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="பீன்ஸ் பொறியல்" <?php echo in_array('பீன்ஸ் பொறியல்', $firdayaft) ? 'checked' : ''; ?>> <span>பீன்ஸ் பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="குடமிளகாய் உசிலி" <?php echo in_array('குடமிளகாய் உசிலி', $firdayaft) ? 'checked' : ''; ?>> <span>குடமிளகாய் உசிலி</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">பாயசம்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="இளநீர் பாயசம்" <?php echo in_array('இளநீர் பாயசம்', $firdayaft) ? 'checked' : ''; ?>> <span>இளநீர் பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="பால் பாயசம்" <?php echo in_array('பால் பாயசம்', $firdayaft) ? 'checked' : ''; ?>> <span>பால் பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அடைப்பிரதமன்" <?php echo in_array('அடைப்பிரதமன்', $firdayaft) ? 'checked' : ''; ?>> <span>அடைப்பிரதமன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="திருப்புல்லாணி பாயசம்" <?php echo in_array('திருப்புல்லாணி பாயசம்', $firdayaft) ? 'checked' : ''; ?>> <span>திருப்புல்லாணி பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சக்கை பிரதமன்" <?php echo in_array('சக்கை பிரதமன்', $firdayaft) ? 'checked' : ''; ?>> <span>சக்கை பிரதமன்</span></li>
                                    <h6 class="px-3 p-3">ஊறுகாய்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தக்காளி" <?php echo in_array('தக்காளி', $firdayaft) ? 'checked' : ''; ?>> <span>தக்காளி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="நெல்லிக்காய்" <?php echo in_array('நெல்லிக்காய்', $firdayaft) ? 'checked' : ''; ?>> <span>நெல்லிக்காய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="மாங்காய்" <?php echo in_array('மாங்காய்', $firdayaft) ? 'checked' : ''; ?>> <span>மாங்காய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="இஞ்சி" <?php echo in_array('இஞ்சி', $firdayaft) ? 'checked' : ''; ?>> <span>இஞ்சி</span></li>
                                    <h6 class="px-3 p-3">list</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="பருப்பு" <?php echo in_array('பருப்பு', $firdayaft) ? 'checked' : ''; ?>> <span>பருப்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="நெய்" <?php echo in_array('நெய்', $firdayaft) ? 'checked' : ''; ?>> <span>நெய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாதம்" <?php echo in_array('சாதம்', $firdayaft) ? 'checked' : ''; ?>> <span>சாதம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாம்பார்" <?php echo in_array('சாம்பார்', $firdayaft) ? 'checked' : ''; ?>> <span>சாம்பார்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ரசம்" <?php echo in_array('ரசம்', $firdayaft) ? 'checked' : ''; ?>> <span>ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தயிர்" <?php echo in_array('தயிர்', $firdayaft) ? 'checked' : ''; ?>> <span>தயிர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அப்பளம்" <?php echo in_array('அப்பளம்', $firdayaft) ? 'checked' : ''; ?>> <span>அப்பளம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தாம்பூலம்" <?php echo in_array('தாம்பூலம்', $firdayaft) ? 'checked' : ''; ?>> <span>தாம்பூலம்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdayaftcou" value="<?= isset($row['firdayaftcou']) ? $row['firdayaftcou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 13 -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="ஜானவாசம் மாலை டிபன்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="px-3 p-3">ஸ்வீட்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="காசி அல்வா" <?php echo in_array('காசி அல்வா', $firdayeve) ? 'checked' : ''; ?>> <span>காசி அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="பாதாம் அல்வா" <?php echo in_array('பாதாம் அல்வா', $firdayeve) ? 'checked' : ''; ?>> <span>பாதாம் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="கேரட் அல்வா" <?php echo in_array('கேரட் அல்வா', $firdayeve) ? 'checked' : ''; ?>> <span>கேரட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Dry Fruit அல்வா" <?php echo in_array('Dry Fruit அல்வா', $firdayeve) ? 'checked' : ''; ?>> <span>Dry Fruit அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Coconut அல்வா" <?php echo in_array('Coconut அல்வா', $firdayeve) ? 'checked' : ''; ?>> <span>Coconut அல்வா</span></li>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="px-3 p-3">டிபன்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="காஞ்சீபுரம் இட்லி" <?php echo in_array('காஞ்சீபுரம் இட்லி', $firdayeve) ? 'checked' : ''; ?>> <span>காஞ்சீபுரம் இட்லி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="ரவா பொங்கல்" <?php echo in_array('ரவா பொங்கல்', $firdayeve) ? 'checked' : ''; ?>> <span>ரவா பொங்கல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Veg கிச்சடி" <?php echo in_array('Veg கிச்சடி', $firdayeve) ? 'checked' : ''; ?>> <span>Veg கிச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="அடை அவியல்" <?php echo in_array('அடை அவியல்', $firdayeve) ? 'checked' : ''; ?>> <span>அடை அவியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="தேங்காய் சேவை" <?php echo in_array('தேங்காய் சேவை', $firdayeve) ? 'checked' : ''; ?>> <span>தேங்காய் சேவை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Lemon சேவை" <?php echo in_array('Lemon சேவை', $firdayeve) ? 'checked' : ''; ?>> <span>Lemon சேவை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Veg சேவை" <?php echo in_array('Veg சேவை', $firdayeve) ? 'checked' : ''; ?>> <span>Veg சேவை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="செட்தோசை வடகறி" <?php echo in_array('செட்தோசை வடகறி', $firdayeve) ? 'checked' : ''; ?>> <span>செட்தோசை வடகறி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="ரவா இட்லி" <?php echo in_array('ரவா இட்லி', $firdayeve) ? 'checked' : ''; ?>> <span>ரவா இட்லி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="கோதுமை தோசை" <?php echo in_array('கோதுமை தோசை', $firdayeve) ? 'checked' : ''; ?>> <span>கோதுமை தோசை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="ரவா தோசை" <?php echo in_array('ரவா தோசை', $firdayeve) ? 'checked' : ''; ?>> <span>ரவா தோசை</span></li>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="px-3 p-3">போண்டா</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="மைசூர் போண்டா" <?php echo in_array('மைசூர் போண்டா', $firdayeve) ? 'checked' : ''; ?>> <span>மைசூர் போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Veg போண்டா" <?php echo in_array('Veg போண்டா', $firdayeve) ? 'checked' : ''; ?>> <span>Veg போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="உருளை போண்டா" <?php echo in_array('உருளை போண்டா', $firdayeve) ? 'checked' : ''; ?>> <span>உருளை போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="சமோசா" <?php echo in_array('சமோசா', $firdayeve) ? 'checked' : ''; ?>> <span>சமோசா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="பனீர் போண்டா" <?php echo in_array('பனீர் போண்டா', $firdayeve) ? 'checked' : ''; ?>> <span>பனீர் போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="தேங்காய் சட்னி" <?php echo in_array('தேங்காய் சட்னி', $firdayeve) ? 'checked' : ''; ?>> <span>தேங்காய் சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="புதினா சட்னி" <?php echo in_array('புதினா சட்னி', $firdayeve) ? 'checked' : ''; ?>> <span>புதினா சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="சாம்பார்" <?php echo in_array('சாம்பார்', $firdayeve) ? 'checked' : ''; ?>> <span>சாம்பார்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="காபி" <?php echo in_array('காபி', $firdayeve) ? 'checked' : ''; ?>> <span>காபி (Coffee)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="டீ" <?php echo in_array('டீ', $firdayeve) ? 'checked' : ''; ?>> <span>டீ (Tea)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="பால்" <?php echo in_array('பால்', $firdayeve) ? 'checked' : ''; ?>> <span>பால் (Milk)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdayevecou" value="<?= isset($row['firdayevecou']) ? $row['firdayevecou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 14 -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="Cooldrinks" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="px-3 p-3">பிரெஷ் ஜூஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="பைனாப்பிள்" <?php echo in_array('பைனாப்பிள்', $firdaydrink) ? 'checked' : ''; ?>> <span>பைனாப்பிள்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="க்ரேப்" <?php echo in_array('க்ரேப்', $firdaydrink) ? 'checked' : ''; ?>> <span>க்ரேப்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Water Melon" <?php echo in_array('Water Melon', $firdaydrink) ? 'checked' : ''; ?>> <span>Water Melon</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Musk Melon" <?php echo in_array('Musk Melon', $firdaydrink) ? 'checked' : ''; ?>> <span>Musk Melon</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Lemon மொஜிட்டோ" <?php echo in_array('Lemon மொஜிட்டோ', $firdaydrink) ? 'checked' : ''; ?>> <span>Lemon மொஜிட்டோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Green Apple Mint மொஜிட்டோ" <?php echo in_array('Green Apple Mint மொஜிட்டோ', $firdaydrink) ? 'checked' : ''; ?>> <span>Green Apple Mint மொஜிட்டோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Mango" <?php echo in_array('Mango', $firdaydrink) ? 'checked' : ''; ?>> <span>Mango</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="ஜிகர்தண்டா" <?php echo in_array('ஜிகர்தண்டா', $firdaydrink) ? 'checked' : ''; ?>> <span>ஜிகர்தண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Sugarcane juice" <?php echo in_array('Sugarcane juice', $firdaydrink) ? 'checked' : ''; ?>> <span>Sugarcane juice</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Fresh லஸ்ஸி" <?php echo in_array('Fresh லஸ்ஸி', $firdaydrink) ? 'checked' : ''; ?>> <span>Fresh லஸ்ஸி</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaycooldrinkcou" value="<?= isset($row['firdaycooldrinkcou']) ? $row['firdaycooldrinkcou'] : '' ?>">
                </div>
                <!-- long ones 15 -->
                <div class="col-lg-4 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="Snacks" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="px-3 p-3">சாட்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பேல்பொறி" <?php echo in_array('பேல்பொறி', $firdaysnack) ? 'checked' : ''; ?>> <span>பேல்பொறி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பானிபூரி" <?php echo in_array('பானிபூரி', $firdaysnack) ? 'checked' : ''; ?>> <span>பானிபூரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="தஹிபூரி" <?php echo in_array('தஹிபூரி', $firdaysnack) ? 'checked' : ''; ?>> <span>தஹிபூரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="சமுசா - சாஸ்" <?php echo in_array('சமுசா - சாஸ்', $firdaysnack) ? 'checked' : ''; ?>> <span>சமுசா - சாஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பாவ்பாஜி" <?php echo in_array('பாவ்பாஜி', $firdaysnack) ? 'checked' : ''; ?>> <span>பாவ்பாஜி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="சென்னா மசாலா" <?php echo in_array('சென்னா மசாலா', $firdaysnack) ? 'checked' : ''; ?>> <span>சென்னா மசாலா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="Veg Roll" <?php echo in_array('Veg Roll', $firdaysnack) ? 'checked' : ''; ?>> <span>Veg Roll</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="Veg கட்லட் - சாஸ்" <?php echo in_array('Veg கட்லட் - சாஸ்', $firdaysnack) ? 'checked' : ''; ?>> <span>Veg கட்லட் - சாஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="கச்சோடி" <?php echo in_array('கச்சோடி', $firdaysnack) ? 'checked' : ''; ?>> <span>கச்சோடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="சாக்லெட் Fountain" <?php echo in_array('சாக்லெட் Fountain', $firdaysnack) ? 'checked' : ''; ?>> <span>சாக்லெட் Fountain</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="குழிப்பணியாரம்" <?php echo in_array('குழிப்பணியாரம்', $firdaysnack) ? 'checked' : ''; ?>> <span>குழிப்பணியாரம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="French Fry" <?php echo in_array('French Fry', $firdaysnack) ? 'checked' : ''; ?>> <span>French Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="Sweet corn" <?php echo in_array('Sweet corn', $firdaysnack) ? 'checked' : ''; ?>> <span>Sweet corn</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பனீர் டிக்கா" <?php echo in_array('பனீர் டிக்கா', $firdaysnack) ? 'checked' : ''; ?>> <span>பனீர் டிக்கா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பாப்கான் பஞ்சுமிட்டாய்" <?php echo in_array('பாப்கான் பஞ்சுமிட்டாய்', $firdaysnack) ? 'checked' : ''; ?>> <span>பாப்கான் பஞ்சுமிட்டாய்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaysnackcou" value="<?= isset($row['firdaysnackcou']) ? $row['firdaysnackcou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 16 -->
            <div class="row align-items-center justify-content-center">

                <h5 class="text-center mt-5">Special Dinner (ஸ்பெஷல் டின்னர்) Menu:</h5>

                <div class="col-lg-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="ஸ்பெஷல் டின்னர்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">SWEETS (ஸ்வீட்ஸ்)</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ரசமலாய்" <?php echo in_array('ரசமலாய்', $firdaydinner) ? 'checked' : ''; ?>> <span>ரசமலாய் (Rasamalai)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பதிர்பேனி" <?php echo in_array('பதிர்பேனி', $firdaydinner) ? 'checked' : ''; ?>> <span>பதிர்பேனி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சீரோட்டி" <?php echo in_array('சீரோட்டி', $firdaydinner) ? 'checked' : ''; ?>> <span>சீரோட்டி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மலாய் சான்ட்விட்ச்" <?php echo in_array('மலாய் சான்ட்விட்ச்', $firdaydinner) ? 'checked' : ''; ?>> <span>மலாய் சான்ட்விட்ச்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="குலோப் ஜாமூன்" <?php echo in_array('குலோப் ஜாமூன்', $firdaydinner) ? 'checked' : ''; ?>> <span>குலோப் ஜாமூன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Dry ஜாமூன்" <?php echo in_array('Dry ஜாமூன்', $firdaydinner) ? 'checked' : ''; ?>> <span>Dry ஜாமூன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மலாய் சம் சம்" <?php echo in_array('மலாய் சம் சம்', $firdaydinner) ? 'checked' : ''; ?>> <span>மலாய் சம் சம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="காஜு கசாட்டா" <?php echo in_array('காஜு கசாட்டா', $firdaydinner) ? 'checked' : ''; ?>> <span>காஜு கசாட்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="காஜு கத்திலி" <?php echo in_array('காஜு கத்திலி', $firdaydinner) ? 'checked' : ''; ?>> <span>காஜு கத்திலி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பாதாம் ரோல்" <?php echo in_array('பாதாம் ரோல்', $firdaydinner) ? 'checked' : ''; ?>> <span>பாதாம் ரோல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிஸ்தா ரோல்" <?php echo in_array('பிஸ்தா ரோல்', $firdaydinner) ? 'checked' : ''; ?>> <span>பிஸ்தா ரோல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ட்ரை Fruits கேக்" <?php echo in_array('ட்ரை Fruits கேக்', $firdaydinner) ? 'checked' : ''; ?>> <span>ட்ரை Fruits கேக்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ரப்டி ஜிலேபி" <?php echo in_array('ரப்டி ஜிலேபி', $firdaydinner) ? 'checked' : ''; ?>> <span>ரப்டி ஜிலேபி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பாசந்தி" <?php echo in_array('பாசந்தி', $firdaydinner) ? 'checked' : ''; ?>> <span>பாசந்தி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கற்கண்டு பாத்" <?php echo in_array('கற்கண்டு பாத்', $firdaydinner) ? 'checked' : ''; ?>> <span>கற்கண்டு பாத்</span></li>
                                    <h6 class="px-3 p-3">ஸ்டார்டர்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg கட்லெட்" <?php echo in_array('Veg கட்லெட்', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg கட்லெட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg வடை" <?php echo in_array('Veg வடை', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கீரை வடை" <?php echo in_array('கீரை வடை', $firdaydinner) ? 'checked' : ''; ?>> <span>கீரை வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg Spring Roll" <?php echo in_array('Veg Spring Roll', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg Spring Roll</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Paneer Roll" <?php echo in_array('Paneer Roll', $firdaydinner) ? 'checked' : ''; ?>> <span>Paneer Roll</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கோபி Fry" <?php echo in_array('கோபி Fry', $firdaydinner) ? 'checked' : ''; ?>> <span>கோபி Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ருமானி ரொட்டி" <?php echo in_array('ருமானி ரொட்டி', $firdaydinner) ? 'checked' : ''; ?>> <span>ருமானி ரொட்டி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ஆலு பரோட்டா" <?php echo in_array('ஆலு பரோட்டா', $firdaydinner) ? 'checked' : ''; ?>> <span>ஆலு பரோட்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பூரி" <?php echo in_array('பூரி', $firdaydinner) ? 'checked' : ''; ?>> <span>பூரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சப்பாத்தி" <?php echo in_array('சப்பாத்தி', $firdaydinner) ? 'checked' : ''; ?>> <span>சப்பாத்தி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பட்டர் நான்" <?php echo in_array('பட்டர் நான்', $firdaydinner) ? 'checked' : ''; ?>> <span>பட்டர் நான்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="புல்கா" <?php echo in_array('புல்கா', $firdaydinner) ? 'checked' : ''; ?>> <span>புல்கா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg ஊத்தப்பம்" <?php echo in_array('Veg ஊத்தப்பம்', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg ஊத்தப்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பொடி ஊத்தப்பம்" <?php echo in_array('பொடி ஊத்தப்பம்', $firdaydinner) ? 'checked' : ''; ?>> <span>பொடி ஊத்தப்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பனீர் சப்ஜி" <?php echo in_array('பனீர் சப்ஜி', $firdaydinner) ? 'checked' : ''; ?>> <span>பனீர் சப்ஜி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மட்டர் பனீர்" <?php echo in_array('மட்டர் பனீர்', $firdaydinner) ? 'checked' : ''; ?>> <span>மட்டர் பனீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கோபி மஞ்சூரியன்" <?php echo in_array('கோபி மஞ்சூரியன்', $firdaydinner) ? 'checked' : ''; ?>> <span>கோபி மஞ்சூரியன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சென்னா" <?php echo in_array('சென்னா', $firdaydinner) ? 'checked' : ''; ?>> <span>சென்னா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg குர்மா" <?php echo in_array('Veg குர்மா', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg குர்மா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சட்னி,கொச்சு" <?php echo in_array('சட்னி,கொச்சு', $firdaydinner) ? 'checked' : ''; ?>> <span>சட்னி,கொச்சு</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">Rice Items</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg புலாவ்" <?php echo in_array('Veg புலாவ்', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Fried ரைஸ்" <?php echo in_array('Fried ரைஸ்', $firdaydinner) ? 'checked' : ''; ?>> <span>Fried ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="தந்துரி புலாவ்" <?php echo in_array('தந்துரி புலாவ்', $firdaydinner) ? 'checked' : ''; ?>> <span>தந்துரி புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பனீர் புலாவ்" <?php echo in_array('பனீர் புலாவ்', $firdaydinner) ? 'checked' : ''; ?>> <span>பனீர் புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="காஷ்மீரி புலாவ்" <?php echo in_array('காஷ்மீரி புலாவ்', $firdaydinner) ? 'checked' : ''; ?>> <span>காஷ்மீரி புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Ghee ரைஸ்" <?php echo in_array('Ghee ரைஸ்', $firdaydinner) ? 'checked' : ''; ?>> <span>Ghee ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சீரக ரைஸ்" <?php echo in_array('சீரக ரைஸ்', $firdaydinner) ? 'checked' : ''; ?>> <span>சீரக ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="வாங்கி பாத்" <?php echo in_array('வாங்கி பாத்', $firdaydinner) ? 'checked' : ''; ?>> <span>வாங்கி பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="டால் பாத்" <?php echo in_array('டால் பாத்', $firdaydinner) ? 'checked' : ''; ?>> <span>டால் பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிசிபேளா பாத்" <?php echo in_array('பிசிபேளா பாத்', $firdaydinner) ? 'checked' : ''; ?>> <span>பிசிபேளா பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கதம்பம்" <?php echo in_array('கதம்பம்', $firdaydinner) ? 'checked' : ''; ?>> <span>கதம்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="புதினா ரைஸ்" <?php echo in_array('புதினா ரைஸ்', $firdaydinner) ? 'checked' : ''; ?>> <span>புதினா ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மல்லி ரைஸ்" <?php echo in_array('மல்லி ரைஸ்', $firdaydinner) ? 'checked' : ''; ?>> <span>மல்லி ரைஸ்</span></li>
                                    <h6 class="px-3 p-3">Raithas</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Onion Raitha" <?php echo in_array('Onion Raitha', $firdaydinner) ? 'checked' : ''; ?>> <span>Onion Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Cucumber Raitha" <?php echo in_array('Cucumber Raitha', $firdaydinner) ? 'checked' : ''; ?>> <span>Cucumber Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg Raitha" <?php echo in_array('Veg Raitha', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Boondhi Raitha" <?php echo in_array('Boondhi Raitha', $firdaydinner) ? 'checked' : ''; ?>> <span>Boondhi Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Tomato Raitha" <?php echo in_array('Tomato Raitha', $firdaydinner) ? 'checked' : ''; ?>> <span>Tomato Raitha</span></li>
                                    <h6 class="px-3 p-3">சிப்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="நேந்திரம் சிப்ஸ்" <?php echo in_array('நேந்திரம் சிப்ஸ்', $firdaydinner) ? 'checked' : ''; ?>> <span>நேந்திரம் சிப்ஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Finger Chips" <?php echo in_array('Finger Chips', $firdaydinner) ? 'checked' : ''; ?>> <span>Finger Chips</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மினி வத்தல்" <?php echo in_array('மினி வத்தல்', $firdaydinner) ? 'checked' : ''; ?>> <span>மினி வத்தல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மினி பப்பட்" <?php echo in_array('மினி பப்பட்', $firdaydinner) ? 'checked' : ''; ?>> <span>மினி பப்பட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="அப்பளம்" <?php echo in_array('அப்பளம்', $firdaydinner) ? 'checked' : ''; ?>> <span>அப்பளம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பப்படம்" <?php echo in_array('பப்படம்', $firdaydinner) ? 'checked' : ''; ?>> <span>பப்படம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="இலை வடாம்(மினி)" <?php echo in_array('இலை வடாம்(மினி)', $firdaydinner) ? 'checked' : ''; ?>> <span>இலை வடாம் (மினி)</span></li>
                                    <h6 class="px-3 p-3">ரசம்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="இஞ்சி லெமன் ரசம்" <?php echo in_array('இஞ்சி லெமன் ரசம்', $firdaydinner) ? 'checked' : ''; ?>> <span>இஞ்சி லெமன் ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="அன்னாசி ரசம்" <?php echo in_array('அன்னாசி ரசம்', $firdaydinner) ? 'checked' : ''; ?>> <span>அன்னாசி ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="லெமன் சீரக ரசம்" <?php echo in_array('லெமன் சீரக ரசம்', $firdaydinner) ? 'checked' : ''; ?>> <span>லெமன் சீரக ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மைசூர் ரசம்" <?php echo in_array('மைசூர் ரசம்', $firdaydinner) ? 'checked' : ''; ?>> <span>மைசூர் ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="தக்காளி ரசம் (SPL)" <?php echo in_array('தக்காளி ரசம் (SPL)', $firdaydinner) ? 'checked' : ''; ?>> <span>தக்காளி ரசம் (SPL)</span></li>
                                    <h6 class="px-3 p-3">பொறியல்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="உருளை ரோஸ்ட்" <?php echo in_array('உருளை ரோஸ்ட்', $firdaydinner) ? 'checked' : ''; ?>> <span>உருளை ரோஸ்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மிக்ஸ் வெஜ் பொறியல்" <?php echo in_array('மிக்ஸ் வெஜ் பொறியல்', $firdaydinner) ? 'checked' : ''; ?>> <span>மிக்ஸ் வெஜ் பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சேனை ரோஸ்ட்" <?php echo in_array('சேனை ரோஸ்ட்', $firdaydinner) ? 'checked' : ''; ?>> <span>சேனை ரோஸ்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கத்திரிக்காய் சாப்ஸ்" <?php echo in_array('கத்திரிக்காய் சாப்ஸ்', $firdaydinner) ? 'checked' : ''; ?>> <span>கத்திரிக்காய் சாப்ஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிண்டி Fry" <?php echo in_array('பிண்டி Fry', $firdaydinner) ? 'checked' : ''; ?>> <span>பிண்டி Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சேம்பு ரோஸ்ட்" <?php echo in_array('சேம்பு ரோஸ்ட்', $firdaydinner) ? 'checked' : ''; ?>> <span>சேம்பு ரோஸ்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கோஸ் பட்டாணி பொறியல்" <?php echo in_array('கோஸ் பட்டாணி பொறியல்', $firdaydinner) ? 'checked' : ''; ?>> <span>கோஸ் பட்டாணி பொறியல்</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">பாயசம்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="இளநீர் பாயசம்" <?php echo in_array('இளநீர் பாயசம்', $firdaydinner) ? 'checked' : ''; ?>> <span>இளநீர் பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மில்க்மெய்டு கேரட்கீர்" <?php echo in_array('மில்க்மெய்டு கேரட்கீர்', $firdaydinner) ? 'checked' : ''; ?>> <span>மில்க்மெய்டு கேரட்கீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பாதாம் கீர்" <?php echo in_array('பாதாம் கீர்', $firdaydinner) ? 'checked' : ''; ?>> <span>பாதாம் கீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிஸ்தா கீர்" <?php echo in_array('பிஸ்தா கீர்', $firdaydinner) ? 'checked' : ''; ?>> <span>பிஸ்தா கீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="அவல் மில்க்மெய்டு பாயசம்" <?php echo in_array('அவல் மில்க்மெய்டு பாயசம்', $firdaydinner) ? 'checked' : ''; ?>> <span>அவல் மில்க்மெய்டு பாயசம்</span></li>
                                    <h6 class="px-3 p-3">ஊறுகாய்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மாங்காய் தொக்கு" <?php echo in_array('மாங்காய் தொக்கு', $firdaydinner) ? 'checked' : ''; ?>> <span>மாங்காய் தொக்கு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கட்மாங்காய் ஊறுகாய்" <?php echo in_array('கட்மாங்காய் ஊறுகாய்', $firdaydinner) ? 'checked' : ''; ?>> <span>கட்மாங்காய் ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg ஊறுகாய்" <?php echo in_array('Veg ஊறுகாய்', $firdaydinner) ? 'checked' : ''; ?>> <span>Veg ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பூண்டு - இஞ்சி ஊறுகாய்" <?php echo in_array('பூண்டு - இஞ்சி ஊறுகாய்', $firdaydinner) ? 'checked' : ''; ?>> <span>பூண்டு - இஞ்சி ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="புளி - இஞ்சி ஊறுகாய்" <?php echo in_array('புளி - இஞ்சி ஊறுகாய்', $firdaydinner) ? 'checked' : ''; ?>> <span>புளி - இஞ்சி ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ஆவக்காய் ஊறுகாய்" <?php echo in_array('ஆவக்காய் ஊறுகாய்', $firdaydinner) ? 'checked' : ''; ?>> <span>ஆவக்காய் ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பட்டர் பாத்" <?php echo in_array('பட்டர் பாத்', $firdaydinner) ? 'checked' : ''; ?>> <span>பட்டர் பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மோர் மிளகாய்" <?php echo in_array('மோர் மிளகாய்', $firdaydinner) ? 'checked' : ''; ?>> <span>மோர் மிளகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="வத்தகுழம்பு" <?php echo in_array('வத்தகுழம்பு', $firdaydinner) ? 'checked' : ''; ?>> <span>வத்தகுழம்பு</span></li>
                                    <h6 class="px-3 p-3">Ice Cream And Scoop Ice Cream</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="வெந்நிலா" <?php echo in_array('வெந்நிலா', $firdaydinner) ? 'checked' : ''; ?>> <span>வெந்நிலா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ஸ்ட்ராபெர்ரி" <?php echo in_array('ஸ்ட்ராபெர்ரி', $firdaydinner) ? 'checked' : ''; ?>> <span>ஸ்ட்ராபெர்ரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பட்டர் ஸ்காட்ச்" <?php echo in_array('பட்டர் ஸ்காட்ச்', $firdaydinner) ? 'checked' : ''; ?>> <span>பட்டர் ஸ்காட்ச்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சாக்கோ Chip" <?php echo in_array('சாக்கோ Chip', $firdaydinner) ? 'checked' : ''; ?>> <span>சாக்கோ Chip</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ப்ளாக் கரண்ட்" <?php echo in_array('ப்ளாக் கரண்ட்', $firdaydinner) ? 'checked' : ''; ?>> <span>ப்ளாக் கரண்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ராஜ்போக்" <?php echo in_array('ராஜ்போக்', $firdaydinner) ? 'checked' : ''; ?>> <span>ராஜ்போக்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிஸ்தா" <?php echo in_array('பிஸ்தா', $firdaydinner) ? 'checked' : ''; ?>> <span>பிஸ்தா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ட்யூட்டி Fruity" <?php echo in_array('ட்யூட்டி Fruity', $firdaydinner) ? 'checked' : ''; ?>> <span>ட்யூட்டி Fruity</span></li>
                                    <h6 class="px-3 p-3">Kulfi</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கேசர் குல்பி" <?php echo in_array('கேசர் குல்பி', $firdaydinner) ? 'checked' : ''; ?>> <span>கேசர் குல்பி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பான் குல்பி" <?php echo in_array('பான் குல்பி', $firdaydinner) ? 'checked' : ''; ?>> <span>பான் குல்பி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மலாய் குல்பி" <?php echo in_array('மலாய் குல்பி', $firdaydinner) ? 'checked' : ''; ?>> <span>மலாய் குல்பி</span></li>
                                    <h6 class="px-3 p-3">பால்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மசாலா பால்" <?php echo in_array('மசாலா பால்', $firdaydinner) ? 'checked' : ''; ?>> <span>மசாலா பால்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பனங்கற்கண்டு பால்" <?php echo in_array('பனங்கற்கண்டு பால்', $firdaydinner) ? 'checked' : ''; ?>> <span>பனங்கற்கண்டு பால்</span></li>
                                    <h6 class="px-3 p-3">Beeda</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Pan Beeda" <?php echo in_array('Pan Beeda', $firdaydinner) ? 'checked' : ''; ?>> <span>Pan Beeda</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Sweet Beeda" <?php echo in_array('Sweet Beeda', $firdaydinner) ? 'checked' : ''; ?>> <span>Sweet Beeda</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கல்கத்தா Beeda" <?php echo in_array('கல்கத்தா Beeda', $firdaydinner) ? 'checked' : ''; ?>> <span>கல்கத்தா Beeda</span></li>
                                    <h6 class="px-3 p-3">வெத்தலை</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கும்பகோண வெத்தலை" <?php echo in_array('கும்பகோண வெத்தலை', $firdaydinner) ? 'checked' : ''; ?>> <span>கும்பகோண வெத்தலை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சீவல்" <?php echo in_array('சீவல்', $firdaydinner) ? 'checked' : ''; ?>> <span>சீவல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ரசிகலால் பாக்கு" <?php echo in_array('ரசிகலால் பாக்கு', $firdaydinner) ? 'checked' : ''; ?>> <span>ரசிகலால் பாக்கு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Sweet சோம்பு" <?php echo in_array('Sweet சோம்பு', $firdaydinner) ? 'checked' : ''; ?>> <span>Sweet சோம்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மவுத் Fresh" <?php echo in_array('மவுத் Fresh', $firdaydinner) ? 'checked' : ''; ?>> <span>மவுத் Fresh</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaydinnercou" value="<?= isset($row['firdaydinnercou']) ? $row['firdaydinnercou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 17 -->
            <div class="row align-items-center justify-content-center">
                <h5 class="text-center mt-5">Mugurtham (முகூர்த்தம்) Menu:</h5>

                <div class="col-lg-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="முகூர்த்தம் காலை டிபன்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">ஸ்வீட்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="ட்ரை Fruit அல்வா" <?php echo in_array('ட்ரை Fruit அல்வா', $secdaymor) ? 'checked' : ''; ?>> <span>ட்ரை Fruit அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="பீட்ருட் அல்வா" <?php echo in_array('பீட்ருட் அல்வா', $secdaymor) ? 'checked' : ''; ?>> <span>பீட்ருட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="அசோகா அல்வா" <?php echo in_array('அசோகா அல்வா', $secdaymor) ? 'checked' : ''; ?>> <span>அசோகா அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="காசி அல்வா" <?php echo in_array('காசி அல்வா', $secdaymor) ? 'checked' : ''; ?>> <span>காசி அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="கேரட் அல்வா" <?php echo in_array('கேரட் அல்வா', $secdaymor) ? 'checked' : ''; ?>> <span>கேரட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="தம்ரூட் அல்வா" <?php echo in_array('தம்ரூட் அல்வா', $secdaymor) ? 'checked' : ''; ?>> <span>தம்ரூட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="Coconut அல்வா" <?php echo in_array('Coconut அல்வா', $secdaymor) ? 'checked' : ''; ?>> <span>Coconut அல்வா</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">டிபன்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="இட்லி" <?php echo in_array('இட்லி', $secdaymor) ? 'checked' : ''; ?>> <span>இட்லி (Idly)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="நெய் பொங்கல்" <?php echo in_array('நெய் பொங்கல்', $secdaymor) ? 'checked' : ''; ?>> <span>நெய் பொங்கல் (Nei Pongal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மசால் தோசை - மல்லி சட்னி" <?php echo in_array('மசால் தோசை - மல்லி சட்னி', $secdaymor) ? 'checked' : ''; ?>> <span>மசால் தோசை - மல்லி சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="Plain தோசை - தக்காளி சட்னி" <?php echo in_array('Plain தோசை - தக்காளி சட்னி', $secdaymor) ? 'checked' : ''; ?>> <span>Plain தோசை - தக்காளி சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="கல் தோசை - சாம்பார்" <?php echo in_array('கல் தோசை - சாம்பார்', $secdaymor) ? 'checked' : ''; ?>> <span>கல் தோசை - சாம்பார்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="பூரி மாசலா" <?php echo in_array('பூரி மாசலா', $secdaymor) ? 'checked' : ''; ?>> <span>பூரி மாசலா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="இடியாப்பாம் - குர்மா, தேங்காய் பால்" <?php echo in_array('இடியாப்பாம் - குர்மா, தேங்காய் பால்', $secdaymor) ? 'checked' : ''; ?>> <span>இடியாப்பாம் - குர்மா, தேங்காய் பால்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மினி சாம்பார் இட்லி" <?php echo in_array('மினி சாம்பார் இட்லி', $secdaymor) ? 'checked' : ''; ?>> <span>மினி சாம்பார் இட்லி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="வெஜ் ஊத்தப்பம்" <?php echo in_array('வெஜ் ஊத்தப்பம்', $secdaymor) ? 'checked' : ''; ?>> <span>வெஜ் ஊத்தப்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="ராகி - தோசை" <?php echo in_array('ராகி - தோசை', $secdaymor) ? 'checked' : ''; ?>> <span>ராகி - தோசை</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">வடை</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மெது வடை - தேங்காய் சட்னி" <?php echo in_array('மெது வடை - தேங்காய் சட்னி', $secdaymor) ? 'checked' : ''; ?>> <span>மெது வடை - தேங்காய் சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மினிசாம்பார் வடை - Spl சட்னி" <?php echo in_array('மினிசாம்பார் வடை - Spl சட்னி', $secdaymor) ? 'checked' : ''; ?>> <span>மினிசாம்பார் வடை - Spl சட்னி</span></li>
                                    <h6 class="px-3 p-3">Fresh Juice</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="இஞ்சி லெமன் மின்ட்" <?php echo in_array('இஞ்சி லெமன் மின்ட்', $secdaymor) ? 'checked' : ''; ?>> <span>இஞ்சி லெமன் மின்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="கமலா ஆரஞ்சு" <?php echo in_array('கமலா ஆரஞ்சு', $secdaymor) ? 'checked' : ''; ?>> <span>கமலா ஆரஞ்சு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மாம்பழம்" <?php echo in_array('மாம்பழம்', $secdaymor) ? 'checked' : ''; ?>> <span>மாம்பழம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="க்ரேப்" <?php echo in_array('க்ரேப்', $secdaymor) ? 'checked' : ''; ?>> <span>க்ரேப்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மசாலா மோர்" <?php echo in_array('மசாலா மோர்', $secdaymor) ? 'checked' : ''; ?>> <span>மசாலா மோர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="பானகம்" <?php echo in_array('பானகம்', $secdaymor) ? 'checked' : ''; ?>> <span>பானகம்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdaymorcou" value="<?= isset($row['secdaymorcou']) ? $row['secdaymorcou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 18 -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="முகூர்த்தம் சாப்பாடு" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="px-3 p-3">DISH</h6>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="Fruits Salad" <?php echo in_array('Fruits Salad', $secdayaft) ? 'checked' : ''; ?>> <span>Fruits Salad</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="தக்காளி ஜாம்" <?php echo in_array('தக்காளி ஜாம்', $secdayaft) ? 'checked' : ''; ?>> <span>தக்காளி ஜாம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="Fruits Jam" <?php echo in_array('Fruits Jam', $secdayaft) ? 'checked' : ''; ?>> <span>Fruits Jam</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பழம், சர்க்கரை" <?php echo in_array('பழம், சர்க்கரை', $secdayaft) ? 'checked' : ''; ?>> <span>பழம், சர்க்கரை</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கேரட்கோஸ்மல்லி" <?php echo in_array('கேரட்கோஸ்மல்லி', $secdayaft) ? 'checked' : ''; ?>> <span>கேரட்கோஸ்மல்லி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பருப்புகோஸ்மல்லி" <?php echo in_array('பருப்புகோஸ்மல்லி', $secdayaft) ? 'checked' : ''; ?>> <span>பருப்புகோஸ்மல்லி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="தயிர்பச்சடி" <?php echo in_array('தயிர்பச்சடி', $secdayaft) ? 'checked' : ''; ?>> <span>தயிர்பச்சடி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கல்யாண அவியல்" <?php echo in_array('கல்யாண அவியல்', $secdayaft) ? 'checked' : ''; ?>> <span>கல்யாண அவியல்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மலபார் அவியல்" <?php echo in_array('மலபார் அவியல்', $secdayaft) ? 'checked' : ''; ?>> <span>மலபார் அவியல்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பூசணிக்காய் மொச்சை புளிப்புக்கூட்டு" <?php echo in_array('பூசணிக்காய் மொச்சை புளிப்புக்கூட்டு', $secdayaft) ? 'checked' : ''; ?>> <span>பூசணிக்காய் மொச்சை புளிப்புக்கூட்டு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="சௌசௌகடலை புளிப்புக்கூட்டு" <?php echo in_array('சௌசௌகடலை புளிப்புக்கூட்டு', $secdayaft) ? 'checked' : ''; ?>> <span>சௌசௌகடலை புளிப்புக்கூட்டு</span></li>
                                        

                                        </div>
                                    <div class="col-sm-4">
                                        <h6 class="px-3 p-3">பொறியல்</h6>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="வாழைக்காய்கறமது" <?php echo in_array('வாழைக்காய்கறமது', $secdayaft) ? 'checked' : ''; ?>> <span>வாழைக்காய்கறமது</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="சேனைக்கிழங்கு கறமது" <?php echo in_array('சேனைக்கிழங்கு கறமது', $secdayaft) ? 'checked' : ''; ?>> <span>சேனைக்கிழங்கு கறமது</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பிண்டி Fry" <?php echo in_array('பிண்டி Fry', $secdayaft) ? 'checked' : ''; ?>> <span>பிண்டி Fry</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="உருளைக்கிழங்கு பொடிமாஸ்" <?php echo in_array('உருளைக்கிழங்கு பொடிமாஸ்', $secdayaft) ? 'checked' : ''; ?>> <span>உருளைக்கிழங்கு பொடிமாஸ்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கோஸ் உசிலி" <?php echo in_array('கோஸ் உசிலி', $secdayaft) ? 'checked' : ''; ?>> <span>கோஸ் உசிலி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பீன்ஸ் உசிலி" <?php echo in_array('பீன்ஸ் உசிலி', $secdayaft) ? 'checked' : ''; ?>> <span>பீன்ஸ் உசிலி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="புடலங்காய் உசிலி" <?php echo in_array('புடலங்காய் உசிலி', $secdayaft) ? 'checked' : ''; ?>> <span>புடலங்காய் உசிலி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="தயிர்வடை" <?php echo in_array('தயிர்வடை', $secdayaft) ? 'checked' : ''; ?>> <span>தயிர்வடை</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="உருளை Chips" <?php echo in_array('உருளை Chips', $secdayaft) ? 'checked' : ''; ?>> <span>உருளை Chips</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பருப்பு" <?php echo in_array('பருப்பு', $secdayaft) ? 'checked' : ''; ?>> <span>பருப்பு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="நெய்" <?php echo in_array('நெய்', $secdayaft) ? 'checked' : ''; ?>> <span>நெய்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கல்யாண சாம்பார்" <?php echo in_array('கல்யாண சாம்பார்', $secdayaft) ? 'checked' : ''; ?>> <span>கல்யாண சாம்பார்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மோர்க்குழம்பு தக்காளி ரசம்" <?php echo in_array('மோர்க்குழம்பு தக்காளி ரசம்', $secdayaft) ? 'checked' : ''; ?>> <span>மோர்க்குழம்பு தக்காளி ரசம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மைசூர் ரசம்" <?php echo in_array('மைசூர் ரசம்', $secdayaft) ? 'checked' : ''; ?>> <span>மைசூர் ரசம்</span></li>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6 class="px-3 p-3">பாயசம்</h6>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="அக்கார அடிசில்" <?php echo in_array('அக்கார அடிசில்', $secdayaft) ? 'checked' : ''; ?>> <span>அக்கார அடிசில்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பாசிபருப்பு பாயசம்" <?php echo in_array('பாசிபருப்பு பாயசம்', $secdayaft) ? 'checked' : ''; ?>> <span>பாசிபருப்பு பாயசம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கடலைபருப்பு பாயசம்" <?php echo in_array('கடலைபருப்பு பாயசம்', $secdayaft) ? 'checked' : ''; ?>> <span>கடலைபருப்பு பாயசம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="அடைப்ரதமன்" <?php echo in_array('அடைப்ரதமன்', $secdayaft) ? 'checked' : ''; ?>> <span>அடைப்ரதமன்</span></li>
                                        <h6 class="px-3 p-3">ஸ்வீட்ஸ்</h6>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="முந்திரிகேக்" <?php echo in_array('முந்திரிகேக்', $secdayaft) ? 'checked' : ''; ?>> <span>முந்திரிகேக்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பாதாம்கேக்" <?php echo in_array('பாதாம்கேக்', $secdayaft) ? 'checked' : ''; ?>> <span>பாதாம்கேக்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மில்க்கேக்" <?php echo in_array('மில்க்கேக்', $secdayaft) ? 'checked' : ''; ?>> <span>மில்க்கேக்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பாதுஷா" <?php echo in_array('பாதுஷா', $secdayaft) ? 'checked' : ''; ?>> <span>பாதுஷா</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மினிலட்டு" <?php echo in_array('மினிலட்டு', $secdayaft) ? 'checked' : ''; ?>> <span>மினிலட்டு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மினிஜாங்கிரி" <?php echo in_array('மினிஜாங்கிரி', $secdayaft) ? 'checked' : ''; ?>> <span>மினிஜாங்கிரி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மில்க்மைசூர்பாகு" <?php echo in_array('மில்க்மைசூர்பாகு', $secdayaft) ? 'checked' : ''; ?>> <span>மில்க்மைசூர்பாகு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="காராசேவ்" <?php echo in_array('காராசேவ்', $secdayaft) ? 'checked' : ''; ?>> <span>காராசேவ்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="காராபூந்தி பகளாபாத்" <?php echo in_array('காராபூந்தி பகளாபாத்', $secdayaft) ? 'checked' : ''; ?>> <span>காராபூந்தி பகளாபாத்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="அப்பளம் வத்தகுழம்பு கடாரங்காய் ஊறுகாய்" <?php echo in_array('அப்பளம் வத்தகுழம்பு கடாரங்காய் ஊறுகாய்', $secdayaft) ? 'checked' : ''; ?>> <span>அப்பளம் வத்தகுழம்பு கடாரங்காய் ஊறுகாய்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="லெமன் ஊறுகாய்" <?php echo in_array('லெமன் ஊறுகாய்', $secdayaft) ? 'checked' : ''; ?>> <span>லெமன் ஊறுகாய்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மாவடு" <?php echo in_array('மாவடு', $secdayaft) ? 'checked' : ''; ?>> <span>மாவடு</span></li>
                                    </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdayaftercou" value="<?= isset($row['secdayaftercou']) ? $row['secdayaftercou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 19 -->
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="முகூர்த்தம் மாலை ஸ்நாக்ஸ்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6 class="px-3 p-3">SNACKS</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="ஸ்வீட்" <?php echo in_array('ஸ்வீட்', $secdayeve) ? 'checked' : ''; ?>> <span>ஸ்வீட் (SWEET)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="பஜ்ஜி" <?php echo in_array('பஜ்ஜி', $secdayeve) ? 'checked' : ''; ?>> <span>பஜ்ஜி (Bajji)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="தேங்காய் சட்னி" <?php echo in_array('தேங்காய் சட்னி', $secdayeve) ? 'checked' : ''; ?>> <span>தேங்காய் சட்னி (Coconut Chutney)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="காபி" <?php echo in_array('காபி', $secdayeve) ? 'checked' : ''; ?>> <span>காபி (Coffee)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdayevecou" value="<?= isset($row['secdayevecou']) ? $row['secdayevecou'] : '' ?>">
                </div>
                <!-- long ones 20 -->
                <div class="col-md-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="முகூர்த்தம் டின்னர்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">SWEETS</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="குலோப் ஜாமுன்" <?php echo in_array('குலோப் ஜாமுன்', $secdaydinner) ? 'checked' : ''; ?>> <span>குலோப் ஜாமுன் (Gulab Jamun)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="பாதாம் கேக்" <?php echo in_array('பாதாம் கேக்', $secdaydinner) ? 'checked' : ''; ?>> <span>பாதாம் கேக் (Badam Cake)</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">MAIN DISH</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="மணத்தக்காளி வத்த குழம்பு" <?php echo in_array('மணத்தக்காளி வத்த குழம்பு', $secdaydinner) ? 'checked' : ''; ?>> <span>மணத்தக்காளி வத்த குழம்பு (Manathakali Vaththa Kozhambu)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="தக்காளி ரசம்" <?php echo in_array('தக்காளி ரசம்', $secdaydinner) ? 'checked' : ''; ?>> <span>தக்காளி ரசம் (Thakali Rasam)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="ஜவ்வரிசி கீர்" <?php echo in_array('ஜவ்வரிசி கீர்', $secdaydinner) ? 'checked' : ''; ?>> <span>ஜவ்வரிசி கீர் (Javvarisi Kheer)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="சேமியா கீர்" <?php echo in_array('சேமியா கீர்', $secdaydinner) ? 'checked' : ''; ?>> <span>சேமியா கீர் (Semiya Kheer)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="தயிர்" <?php echo in_array('தயிர்', $secdaydinner) ? 'checked' : ''; ?>> <span>தயிர் (Curd)</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">SIDE DISH</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="தயிர்பச்சடி" <?php echo in_array('தயிர்பச்சடி', $secdaydinner) ? 'checked' : ''; ?>> <span>தயிர்பச்சடி (Thayir Pachadi)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="கத்திரிக்காய் பொறியல்" <?php echo in_array('கத்திரிக்காய் பொறியல்', $secdaydinner) ? 'checked' : ''; ?>> <span>கத்திரிக்காய் பொறியல் (Kathirikai Poriyal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="கேரட் பொரியல்" <?php echo in_array('கேரட் பொரியல்', $secdaydinner) ? 'checked' : ''; ?>> <span>கேரட் பொரியல் (Carrot Poriyal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="நெய் & பருப்பு" <?php echo in_array('நெய் & பருப்பு', $secdaydinner) ? 'checked' : ''; ?>> <span>நெய் & பருப்பு (Ghee & Dhal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="ஊறுகாய்" <?php echo in_array('ஊறுகாய்', $secdaydinner) ? 'checked' : ''; ?>> <span>ஊறுகாய் (Mango Pickle)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="அப்பளம்" <?php echo in_array('அப்பளம்', $secdaydinner) ? 'checked' : ''; ?>> <span>அப்பளம் (Appalam)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdaydinnercou" value="<?= isset($row['secdaydinnercou']) ? $row['secdaydinnercou'] : '' ?>">
                </div>
            </div>
            <!-- long ones 21 -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="சம்மந்தி விருந்து" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-12">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="புரூட் ஜாம்" <?php echo in_array('புரூட் ஜாம்', $guestfood) ? 'checked' : ''; ?>> <span>புரூட் ஜாம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="தயிர்பச்சடி" <?php echo in_array('தயிர்பச்சடி', $guestfood) ? 'checked' : ''; ?>> <span>தயிர்பச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="வெஜ். கூட்டு" <?php echo in_array('வெஜ். கூட்டு', $guestfood) ? 'checked' : ''; ?>> <span>வெஜ். கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="உருளை பொடிமாஸ்" <?php echo in_array('உருளை பொடிமாஸ்', $guestfood) ? 'checked' : ''; ?>> <span>உருளை பொடிமாஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="நெய் & பருப்பு" <?php echo in_array('நெய் & பருப்பு', $guestfood) ? 'checked' : ''; ?>> <span>நெய் & பருப்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="வெஜ். வடை" <?php echo in_array('வெஜ். வடை', $guestfood) ? 'checked' : ''; ?>> <span>வெஜ். வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="அப்பளம் & வத்தல்" <?php echo in_array('அப்பளம் & வத்தல்', $guestfood) ? 'checked' : ''; ?>> <span>அப்பளம் & வத்தல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="மிளகு குழம்பு" <?php echo in_array('மிளகு குழம்பு', $guestfood) ? 'checked' : ''; ?>> <span>மிளகு குழம்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="லெமன் ரசம்" <?php echo in_array('லெமன் ரசம்', $guestfood) ? 'checked' : ''; ?>> <span>லெமன் ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="சர்க்கரை பொங்கல்" <?php echo in_array('சர்க்கரை பொங்கல்', $guestfood) ? 'checked' : ''; ?>> <span>சர்க்கரை பொங்கல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="தயிர்,ஊறுகாய்" <?php echo in_array('தயிர்,ஊறுகாய்', $guestfood) ? 'checked' : ''; ?>> <span>தயிர்,ஊறுகாய்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="guestfoodcou" value="<?= isset($row['guestfoodcou']) ? $row['guestfoodcou'] : '' ?>">
                </div>
                <!-- long ones 22 -->
                <div class="col-lg-4 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="Packet food" data-bs-toggle="dropdown">
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-12">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="packetfood[]" value="சர்க்கரை பொங்கல்" <?php echo in_array('சர்க்கரை பொங்கல்', $packetfood) ? 'checked' : ''; ?>> <span>சர்க்கரை பொங்கல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="packetfood[]" value="புளியோதரை & வத்தல்" <?php echo in_array('புளியோதரை & வத்தல்', $packetfood) ? 'checked' : ''; ?>> <span>புளியோதரை & வத்தல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="packetfood[]" value="தயிர் சாதம் & ஊறுகாய்" <?php echo in_array('தயிர் சாதம் & ஊறுகாய்', $packetfood) ? 'checked' : ''; ?>> <span>தயிர் சாதம் & ஊறுகாய்</span></li>
                                    </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="packetfoodcou" value="<?= isset($row['packetfoodcou']) ? $row['packetfoodcou'] : '' ?>">
                </div>
            </div>
        </div>



        <h5 class="text-center mt-5">Required Items Details:</h5>
        <p class="text-center">Please select the required items!</p>
        <div class="row m-3">
            <!-- long ones 1 -->


            <div class="col-sm-12 col-lg-4 mt-4 align-items-center justify-content-center">
                <div class="dropdown">
                    <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="புஷ்பம், மாலைகள் ஜானவாசம்"  data-bs-toggle="dropdown" >
                
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-12 col-sm-4">
                                    <h6 class="px-3"></h6>
                                    <li class="px-3 m-2">
                                        <input type="checkbox" style="color: black;" id="select-all5" class="select-all" onchange="checkAll(this)" /> 
                                        <label for="select-all5">Select All</label>
                                    </li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="பெருமாள் மாலை-1" <?php echo in_array('பெருமாள் மாலை-1', $malaifirday) ? 'checked' : ''; ?>> <span>பெருமாள் மாலை-1 (Perumal Maalai - 1)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="மாப்பிள்ளை வரவேற்பு மாலை-1" <?php echo in_array('மாப்பிள்ளை வரவேற்பு மாலை-1', $malaifirday) ? 'checked' : ''; ?>> <span>மாப்பிள்ளை வரவேற்பு மாலை-1 (Mappilai Varaverpu Malai -1)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="சரம் - 2 பந்து" <?php echo in_array('சரம் - 2 பந்து', $malaifirday) ? 'checked' : ''; ?>>  <span>சரம் - 2 பந்து (Saram - 2 Ball)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="நிச்சயதார்த்த மாலை - 2" <?php echo in_array('நிச்சயதார்த்த மாலை - 2', $malaifirday) ? 'checked' : ''; ?>> <span>நிச்சயதார்த்த மாலை - 2 (Nichayathartha Malli)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="ஜடை-1" <?php echo in_array('ஜடை-1', $malaifirday) ? 'checked' : ''; ?>> <span>ஜடை-1 (Jadai-1)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="சரம் - 6 பந்து" <?php echo in_array('சரம் - 6 பந்து', $malaifirday) ? 'checked' : ''; ?>> <span>சரம் - 6 பந்து (Saram - 6 Ball)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="ரிசப்ஷன் மாலை - 2" <?php echo in_array('ரிசப்ஷன் மாலை - 2', $malaifirday) ? 'checked' : ''; ?>> <span>ரிசப்ஷன் மாலை - 2 (Reception Malai - 2)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="கைசெண்டு - 2" <?php echo in_array('கைசெண்டு - 2', $malaifirday) ? 'checked' : ''; ?>> <span>கைசெண்டு - 2 (Kaicent - 2)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="ரிசப்ஷன் ப்ளேட் ரோஸ் - 200" <?php echo in_array('ரிசப்ஷன் ப்ளேட் ரோஸ் - 200', $malaifirday) ? 'checked' : ''; ?>> <span>ரிசப்ஷன் ப்ளேட் ரோஸ் - 200 (Reception Plate Rose - 200)</span></li>
                                </div>
                            </div>
                        </ul>
                </div>
            </div>



            <!-- long ones 2 -->



            <div class="col-sm-12 col-lg-4 mt-4 align-items-center justify-content-center">
                <div class="dropdown">
                    <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="முகூர்த்தம்" data-bs-toggle="dropdown">
                
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-12 col-sm-4">
                                    <h6 class="px-3"></h6>
                                    <li class="px-3 m-2">
                                        <input type="checkbox" style="color: black;" id="select-all6" class="select-all" onchange="checkAll(this)" /> 
                                        <label for="select-all6">Select All</label>
                                    </li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="விரத மாலை - 2" <?php echo in_array('விரத மாலை - 2', $wedmalaiset) ? 'checked' : ''; ?>> <span>விரத மாலை - 2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="மாத்து மாலை - 5" <?php echo in_array('மாத்து மாலை - 5', $wedmalaiset) ? 'checked' : ''; ?>> <span>மாத்து மாலை - 2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="முகூர்த்த மாலை - 2" <?php echo in_array('முகூர்த்த மாலை - 2', $wedmalaiset) ? 'checked' : ''; ?>> <span>முகூர்த்த மாலை - 2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="சரம் - 6 பந்து" <?php echo in_array('சரம் - 6 பந்து', $wedmalaiset) ? 'checked' : ''; ?>> <span>சரம் - 6 பந்து</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="உதிரிப்பூ" <?php echo in_array('உதிரிப்பூ', $wedmalaiset) ? 'checked' : ''; ?>> <span>உதிரிப்பூ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="முகூர்த்த மேடை பூ - 3 பந்து" <?php echo in_array('முகூர்த்த மேடை பூ', $wedmalaiset) ? 'checked' : ''; ?>> <span>முகூர்த்த மேடை பூ - 3 பந்து</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="அலங்காரம் ஊஞ்சல் பூ - 3 பந்து" <?php echo in_array('அலங்காரம் ஊஞ்சல் பூ', $wedmalaiset) ? 'checked' : ''; ?>> <span>அலங்காரம் ஊஞ்சல் பூ - 3 பந்து</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="அலங்காரம் நலுங்கு பூ - 3 பந்து" <?php echo in_array('அலங்காரம் நலுங்கு பூ - 3 பந்து', $wedmalaiset) ? 'checked' : ''; ?>> <span>அலங்காரம் நலுங்கு பூ - 3 பந்து</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="சம்மந்தி விருந்து பூ - 2 பந்து" <?php echo in_array('சம்மந்தி விருந்து பூ - 2 பந்து', $wedmalaiset) ? 'checked' : ''; ?>> <span>சம்மந்தி விருந்து பூ - 2 பந்து</span></li>
                                </div>
                            </div>
                        </ul>
                </div> 
            </div>


            <!-- long ones 3 -->


            <div class="col-sm-12 col-lg-4 mt-4 align-items-center justify-content-center">
                <div class="dropdown">
                    <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="காசியாத்திரை செட்" data-bs-toggle="dropdown">
                
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-12 col-sm-4">
                                    <h6 class="px-3"></h6>
                                    <li class="px-3 m-2">
                                        <input type="checkbox" style="color: black;" id="select-all7" class="select-all" onchange="checkAll(this)" /> 
                                        <label for="select-all7">Select All</label>
                                    </li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="பட்டுபாய் (WITH NAME)" <?php echo in_array('பட்டுபாய் (WITH NAME)', $kasiyathiraiset) ? 'checked' : ''; ?>> <span>பட்டுபாய் (WITH NAME)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="Fancy தடி & குடை" <?php echo in_array('Fancy தடி & குடை', $kasiyathiraiset) ? 'checked' : ''; ?>> <span>Fancy தடி & குடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="சுந்தரகாண்டம் புத்தகம்" <?php echo in_array('சுந்தரகாண்டம் புத்தகம்', $kasiyathiraiset) ? 'checked' : ''; ?>>  <span>சுந்தரகாண்டம் புத்தகம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="Fancy விசிறி & மணை -2" <?php echo in_array('Fancy விசிறி & மணை -2', $kasiyathiraiset) ? 'checked' : ''; ?>> <span>Fancy விசிறி & மணை -2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="பிடி சுற்றும் பித்தளை பாத்திரங்கள்" <?php echo in_array('பிடி சுற்றும் பித்தளை பாத்திரங்கள்', $kasiyathiraiset) ? 'checked' : ''; ?>> <span>பிடி சுற்றும் பித்தளை பாத்திரங்கள்</span></li>
                                </div>
                            </div>
                        </ul>
                </div>
            </div>


            <!-- long ones 4 -->


            <div class="col-sm-12 col-lg-6 mt-4 align-items-center justify-content-center">
                <div class="dropdown">
                    <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="ஷேம தண்டல சாமான்கள்" data-bs-toggle="dropdown">
                
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-12 col-sm-4">
                                    <h6 class="px-3"></h6>
                                    <li class="px-3 m-2">
                                        <input type="checkbox" style="color: black;" id="select-all8" class="select-all" onchange="checkAll(this)" /> 
                                        <label for="select-all8">Select All</label>
                                    </li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="குண்டு மஞ்சள் - 200 கிராம்" <?php echo in_array('குண்டு மஞ்சள் - 200 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>குண்டு மஞ்சள் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="சர்க்கரை - 5 கிலோ" <?php echo in_array('சர்க்கரை - 5 கிலோ', $samangalset) ? 'checked' : ''; ?>> <span>சர்க்கரை - 5 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="வெல்லம் - 1 கிலோ" <?php echo in_array('வெல்லம் - 1 கிலோ', $samangalset) ? 'checked' : ''; ?>> <span>வெல்லம் - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="துவரம் பருப்பு - 2 கிலோ" <?php echo in_array('துவரம் பருப்பு - 2 கிலோ', $samangalset) ? 'checked' : ''; ?>> <span>துவரம் பருப்பு - 2 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="கடலை பருப்பு - 1 கிலோ" <?php echo in_array('கடலை பருப்பு - 1 கிலோ', $samangalset) ? 'checked' : ''; ?>> <span>கடலை பருப்பு - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="அரிசி 10 கிலோ" <?php echo in_array('அரிசி 10 கிலோ', $samangalset) ? 'checked' : ''; ?>> <span>அரிசி 10 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="மைதா - 1 கிலோ" <?php echo in_array('மைதா - 1 கிலோ', $samangalset) ? 'checked' : ''; ?>> <span>மைதா - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="ரவை - 1 கிலோ" <?php echo in_array('ரவை - 1 கிலோ', $samangalset) ? 'checked' : ''; ?>> <span>ரவை - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="முந்திரி - 500 கிராம்" <?php echo in_array('முந்திரி - 500 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>முந்திரி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="உலர்ந்த திராட்சை - 500 கிராம்" <?php echo in_array('உலர்ந்த திராட்சை - 500 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>உலர்ந்த திராட்சை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="பாதாம் பருப்பு 250 கிராம்" <?php echo in_array('பாதாம் பருப்பு 250 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>பாதாம் பருப்பு - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="ஏலக்காய் - 100 கிராம்" <?php echo in_array('ஏலக்காய் - 100 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>ஏலக்காய் - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="மிளகு - 200 கிராம்" <?php echo in_array('மிளகு - 200 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>மிளகு - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="சீரகம் - 200 கிராம்" <?php echo in_array('சீரகம் - 200 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>சீரகம் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="நெய் - 500 கிராம்" <?php echo in_array('நெய் - 500 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>நெய் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="காபி பவுடர் - 500 கிராம்" <?php echo in_array('காபி பவுடர் - 500 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>காபி பவுடர் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="மஞ்சள் பொடி - 100 கிராம்" <?php echo in_array('மஞ்சள் பொடி - 100 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>மஞ்சள் பொடி - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="வேர்க்கடலை - 500 கிராம்" <?php echo in_array('வேர்க்கடலை - 500 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>வேர்க்கடலை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="ஹார்லிக்ஸ் - 500 கிராம்" <?php echo in_array('ஹார்லிக்ஸ் - 500 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>ஹார்லிக்ஸ் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="டீ பவுடர் - 1 கிராம்" <?php echo in_array('டீ பவுடர் - 1 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>டீ பவுடர் - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="ஜவ்வரிசி - 500 கிராம்" <?php echo in_array('ஜவ்வரிசி - 500 கிராம்', $samangalset) ? 'checked' : ''; ?>> <span>ஜவ்வரிசி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="காய்கறிகள்" <?php echo in_array('காய்கறிகள்', $samangalset) ? 'checked' : ''; ?>> <span>காய்கறிகள்</span></li>
                                </div>
                            </div>
                        </ul>
                </div>
            </div>
            <!-- long ones 5 -->
            <div class="col-sm-12 col-lg-6 mt-4 align-items-center justify-content-center">
                <div class="dropdown">
                    <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="நிச்சயதார்த்த தட்டுகள்" data-bs-toggle="dropdown">
                
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-12 col-sm-4">
                                    <h6 class="px-3"></h6>
                                    <li class="px-3 m-2">
                                        <input type="checkbox" style="color: black;" id="select-all9" class="select-all" onchange="checkAll(this)" /> 
                                        <label for="select-all9">Select All</label>
                                    </li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="குண்டு மஞ்சள் - 200 கிராம்" <?php echo in_array('குண்டு மஞ்சள் - 200 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>குண்டு மஞ்சள் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="சர்க்கரை - 5 கிலோ" <?php echo in_array('சர்க்கரை - 5 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>சர்க்கரை - 5 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="வெல்லம் - 1 கிலோ" <?php echo in_array('வெல்லம் - 1 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>வெல்லம் - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="துவரம் பருப்பு - 2 கிலோ" <?php echo in_array('துவரம் பருப்பு - 2 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>துவரம் பருப்பு - 2 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="கடலை பருப்பு - 1 கிலோ" <?php echo in_array('கடலை பருப்பு - 1 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>கடலை பருப்பு - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="அரிசி 10 கிலோ" <?php echo in_array('அரிசி 10 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>அரிசி 10 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="மைதா - 1 கிலோ" <?php echo in_array('மைதா - 1 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>மைதா - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="ரவை - 1 கிலோ" <?php echo in_array('ரவை - 1 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>ரவை - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="முந்திரி - 500 கிராம்" <?php echo in_array('முந்திரி - 500 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>முந்திரி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="உலர்ந்த திராட்சை - 500 கிராம்" <?php echo in_array('உலர்ந்த திராட்சை - 500 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>உலர்ந்த திராட்சை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="பாதாம் பருப்பு 250 கிராம்" <?php echo in_array('பாதாம் பருப்பு 250 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>பாதாம் பருப்பு - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="கடலை பருப்பு - 1 கிலோ" <?php echo in_array('கடலை பருப்பு - 1 கிலோ', $wedplateset) ? 'checked' : ''; ?>> <span>ஏலக்காய் - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="மிளகு - 200 கிராம்" <?php echo in_array('மிளகு - 200 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>மிளகு - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="சீரகம் - 200 கிராம்" <?php echo in_array('சீரகம் - 200 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>சீரகம் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="நெய் - 500 கிராம்" <?php echo in_array('நெய் - 500 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>நெய் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="காபி பவுடர் - 500 கிராம்" <?php echo in_array('காபி பவுடர் - 500 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>காபி பவுடர் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="மஞ்சள் பொடி - 100 கிராம்" <?php echo in_array('மஞ்சள் பொடி - 100 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>மஞ்சள் பொடி - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="வேர்க்கடலை - 500 கிராம்" <?php echo in_array('வேர்க்கடலை - 500 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>வேர்க்கடலை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="ஹார்லிக்ஸ் - 500 கிராம்" <?php echo in_array('ஹார்லிக்ஸ் - 500 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>ஹார்லிக்ஸ் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="டீ பவுடர் - 1 கிராம்" <?php echo in_array('டீ பவுடர் - 1 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>டீ பவுடர் - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="ஜவ்வரிசி - 500 கிராம்" <?php echo in_array('ஜவ்வரிசி - 500 கிராம்', $wedplateset) ? 'checked' : ''; ?>> <span>ஜவ்வரிசி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="காய்கறிகள்" <?php echo in_array('காய்கறிகள்', $wedplateset) ? 'checked' : ''; ?>> <span>காய்கறிகள்</span></li>
                                </div>
                            </div>
                        </ul>
                </div>
            </div>
            <!-- long ones 6 -->
            <div class="col-sm-12 col-lg-6 mt-4 align-items-center justify-content-center">
                <div class="dropdown">
                    <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="TOILET SET (with Plastic Tray)" data-bs-toggle="dropdown">
                
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 class="px-3"></h6>
                                    <li class="px-3 m-2">
                                        <input type="checkbox" style="color: black;" id="select-all10" class="select-all" onchange="checkAll(this)" /> 
                                        <label for="select-all10"><span>Select All</span></label>
                                    </li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Shaving Brush" <?php echo in_array('Shaving Brush', $toiletset) ? 'checked' : ''; ?>> <span>Shaving Brush</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Racer" <?php echo in_array('Racer', $toiletset) ? 'checked' : ''; ?>> <span>Racer</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Foam" <?php echo in_array('Foam', $toiletset) ? 'checked' : ''; ?>> <span>Foam</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Lotion" <?php echo in_array('Lotion', $toiletset) ? 'checked' : ''; ?>> <span>Lotion</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Bath Soap" <?php echo in_array('Bath Soap', $toiletset) ? 'checked' : ''; ?>> <span>Bath Soap</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Shampoo" <?php echo in_array('Shampoo', $toiletset) ? 'checked' : ''; ?>> <span>Shampoo</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Mirror" <?php echo in_array('Mirror', $toiletset) ? 'checked' : ''; ?>> <span>Mirror</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Comb" <?php echo in_array('Comb', $toiletset) ? 'checked' : ''; ?>> <span>Comb</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Hair Oil" <?php echo in_array('Hair Oil', $toiletset) ? 'checked' : ''; ?>> <span>Hair Oil</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Tooth Brush" <?php echo in_array('Tooth Brush', $toiletset) ? 'checked' : ''; ?>> <span>Tooth Brush</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Tooth Paste" <?php echo in_array('Tooth Paste', $toiletset) ? 'checked' : ''; ?>> <span>Tooth Paste</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Hand Towel" <?php echo in_array('Hand Towel', $toiletset) ? 'checked' : ''; ?>> <span>Hand Towel</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Thiruman Petti" <?php echo in_array('Thiruman Petti', $toiletset) ? 'checked' : ''; ?>> <span>Thiruman Petti</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Silver Kuchi" <?php echo in_array('Silver Kuchi', $toiletset) ? 'checked' : ''; ?>> <span>Silver Kuchi</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Body Spray" <?php echo in_array('Body Spray', $toiletset) ? 'checked' : ''; ?>> <span>Body Spray</span></li>
                                </div>    
                            </div>
                        </ul>
                </div>
            </div>
            <!-- long ones 7 -->
            <div class="col-sm-12 col-lg-6 mt-4 align-items-center justify-content-center">
                <div class="dropdown">
                    <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="வைதீக சாமான்கள்" data-bs-toggle="dropdown">
                
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-lg-12 col-sm-4">
                                    <h6 class="px-3"></h6>
                                    <li class="px-3 m-2">
                                        <input type="checkbox" style="color: black;" id="select-all11" class="select-all" onchange="checkAll(this)" /> 
                                        <label for="select-all11">Select All</label>
                                    </li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="மஞ்சள் பொடி" <?php echo in_array('மஞ்சள் பொடி', $vedicset) ? 'checked' : ''; ?>> <span>மஞ்சள் பொடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="விரளி மஞ்சள்" <?php echo in_array('விரளி மஞ்சள்', $vedicset) ? 'checked' : ''; ?>> <span>விரளி மஞ்சள்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="களி பாக்கு" <?php echo in_array('களி பாக்கு', $vedicset) ? 'checked' : ''; ?>> <span>களி பாக்கு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="சந்தனம்" <?php echo in_array('சந்தனம்', $vedicset) ? 'checked' : ''; ?>> <span>சந்தனம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="வெற்றிலை" <?php echo in_array('வெற்றிலை', $vedicset) ? 'checked' : ''; ?>> <span>வெற்றிலை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="நவதான்யம்" <?php echo in_array('நவதான்யம்', $vedicset) ? 'checked' : ''; ?>> <span>நவதான்யம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="நெல்பொறி" <?php echo in_array('நெல்பொறி', $vedicset) ? 'checked' : ''; ?>> <span>நெல்பொறி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="வாழைப்பழம்" <?php echo in_array('வாழைப்பழம்', $vedicset) ? 'checked' : ''; ?>> <span>வாழைப்பழம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="திரிநூல்" <?php echo in_array('திரிநூல்', $vedicset) ? 'checked' : ''; ?>> <span>திரிநூல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="அரிசி - 15 கிலோ" <?php echo in_array('அரிசி - 15 கிலோ', $vedicset) ? 'checked' : ''; ?>> <span>அரிசி - 15 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="நெய் -1 கிலோ" <?php echo in_array('நெய் -1 கிலோ', $vedicset) ? 'checked' : ''; ?>> <span>நெய் -1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="குங்குமம்" <?php echo in_array('குங்குமம்', $vedicset) ? 'checked' : ''; ?>> <span>குங்குமம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="கற்பூரம்" <?php echo in_array('கற்பூரம்', $vedicset) ? 'checked' : ''; ?>> <span>கற்பூரம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="வறட்டி" <?php echo in_array('வறட்டி', $vedicset) ? 'checked' : ''; ?>> <span>வறட்டி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="சுள்ளி" <?php echo in_array('சுள்ளி', $vedicset) ? 'checked' : ''; ?>> <span>சுள்ளி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="பாலிகை செட்" <?php echo in_array('பாலிகை செட்', $vedicset) ? 'checked' : ''; ?>> <span>பாலிகை செட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="விளக்கு எண்ணை" <?php echo in_array('விளக்கு எண்ணை', $vedicset) ? 'checked' : ''; ?>> <span>விளக்கு எண்ணை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="தேங்காய் - 20" <?php echo in_array('தேங்காய் - 20', $vedicset) ? 'checked' : ''; ?>> <span>தேங்காய் - 20</span></li>
                                </div>
                            </div>
                        </ul>
                </div>
            </div>         
        </div>
            <div class="pb-5 text-center p-5">
            <input type="submit" name="submit" value="Submit" class="btn  px-5 py-3 btn-primary text-center rounded-pill">
            </div>
    </form>
</div>
<script>
            document.getElementById('loginLink').addEventListener('click', function() {
  document.getElementById('loginFormPopup').style.display = 'block';
});

document.getElementById('closeBtn').addEventListener('click', function() {
  document.getElementById('loginFormPopup').style.display = 'none';
});

window.addEventListener('click', function(event) {
  var popup = document.getElementById('loginFormPopup');
  if (event.target == popup) {
    popup.style.display = 'none';
  }
});

        </script>
        
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle (including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Additional Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/counterup2@1.0.4/dist/index.min.js"></script>

<!-- Tempus Dominus (Date Time Picker) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.34/moment-timezone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Owl Carousel (Comment out local library link if needed) -->
<!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   
     
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get all the spans containing the text
    var spans = document.querySelectorAll('.dropdown-menu li span');

    // Loop through each span
    spans.forEach(function(span) {
        // Add a click event listener
        span.addEventListener('click', function() {
            // Find the checkbox associated with the span
            var checkbox = this.parentNode.querySelector('input[type="checkbox"]');
            // Toggle the checkbox
            checkbox.checked = !checkbox.checked;
        });

        // Add a click event listener to prevent the dropdown from closing
        span.addEventListener('click', function(event) {
            // Prevent the dropdown from closing
            event.stopPropagation();
        });
    });
});
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function checkAll(source) {
            $(source).closest('.dropdown-menu').find('input[type="checkbox"]').prop('checked', source.checked);
        }
    </script>
    
    <!-- Template Javascript --> 
    <script src="../js/main.js"></script>
</body>
</html>
