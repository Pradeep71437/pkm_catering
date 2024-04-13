<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php
// Your database connection code here
$conn = mysqli_connect("localhost", "root", "", "pkm_catering");

// Check if the form is submitted
if (count($_POST) > 0) {
    // Update the order details with the submitted data
    $order_id = $_GET['id']; // Get the order ID from the URL parameter
    $userid = $_POST['userid'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];

    // Serialize the carrybag data if it exists in the form submission
    $carrybag = isset($_POST['carrybag']) ? serialize($_POST['carrybag']) : '';

    // Construct and execute the SQL query
    $sql = "UPDATE order_details SET 
        userid='$userid', 
        first_name='$first_name', 
        last_name='$last_name', 
        city_name='$city_name', 
        email='$email',
        carrybag='$carrybag'
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

    // Unserialize the carrybag data
    $carrybag = isset($row['carrybag']) ? unserialize($row['carrybag']) : [];
}
?>
</head>
<body>
<div class="container text-center">
    <h2  >Kindly Fill The Details For Your Order</h2>
</div>
<div class="container">

    <form class="mt-5 container">
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
                <input type="date" class="form-control m-3" id="date" name="usdate">
            </div>
            <div class="col-md-6">
                <label for="date" class="mx-3"><b>Event Ending Date</b></label>
                <input type="date" class="form-control m-3" id="date" name="uedate">
            </div>
            <div class="col-md-6">
                <label for="city" class="mx-3"><b>Party Details</b></label>
                <textarea type="textarea" placeholder="Enter Your City" class="form-control m-3" id="city" name="upartydetails" style="height: 100px;"></textarea>
            </div>
            <div class="col-md-6">
                <label for="city" class="mx-3"><b>DATE & MANDAPAM DETAILS</b></label>
                <textarea type="textarea" placeholder="Enter Your City" class="form-control m-3" id="city" name="uhalldetails" style="height: 100px;"></textarea>
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
                        <input type="checkbox" style="color: black;" id="select-all" class="select-all" onchange="checkAll(this)" />
                        <label for="select-all">Select All</label>
                    </li>
                    <div class="col-sm-4">
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="லட்டு" <?php echo in_array('லட்டு', $carrybag) ? 'checked' : ''; ?>> லட்டு (Laddu)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="மைசூர் பாக்" <?php echo in_array('மைசூர் பாக்', $carrybag) ? 'checked' : ''; ?>> மைசூர் பாக் (Mysorepak)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="பாதாம் கேக்" <?php echo in_array('பாதாம் கேக்', $carrybag) ? 'checked' : ''; ?>> பாதாம் கேக் (Badam Cake)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="முந்திரி கேக்" <?php echo in_array('முந்திரி கேக்', $carrybag) ? 'checked' : ''; ?>> முந்திரி கேக் (Cashew Cake)</li>
                    </div>
                    <div class="col-sm-4">
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="நுக்கல்" <?php echo in_array('நுக்கல்', $carrybag) ? 'checked' : ''; ?>> நுக்கல் (Nookol)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="சோன்பப்டி" <?php echo in_array('சோன்பப்டி', $carrybag) ? 'checked' : ''; ?>> சோன்பப்டி (Soan Papdi)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="நேஷனல் கேக்" <?php echo in_array('நேஷனல் கேக்', $carrybag) ? 'checked' : ''; ?>> நேஷனல் கேக் (National Cake)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="திரட்டிப்பால்" <?php echo in_array('திரட்டிப்பால்', $carrybag) ? 'checked' : ''; ?>> திரட்டிப்பால் (Thirattipal)</li>
                    </div>
                    <div class="col-sm-4">
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="அப்பம்" <?php echo in_array('அப்பம்', $carrybag) ? 'checked' : ''; ?>> அப்பம் (Appam)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="தேங்காய் பர்பி" <?php echo in_array('தேங்காய் பர்பி', $carrybag) ? 'checked' : ''; ?>> தேங்காய் பர்பி (Coconut Burfi)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="கைமுறுக்கு" <?php echo in_array('கைமுறுக்கு', $carrybag) ? 'checked' : ''; ?>> கைமுறுக்கு (Kai Murukku)</li>
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="மணோப்பு" <?php echo in_array('மணோப்பு', $carrybag) ? 'checked' : ''; ?>> மணோப்பு (Manoppu)</li>
                    </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="carrybagcou" >
                </div>
            </div>

            <input type="submit" name="submit" value="Submit" class="buttom">

            <!-- JavaScript Libraries -->
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
    <script>
        function checkAll(myCheckbox) {
    var checkboxes = myCheckbox.parentNode.parentNode.querySelectorAll(".dropdown-menu input[type='checkbox']");
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = myCheckbox.checked;
    });
}
    </script>
    <script src="js/selector.js"></script>
    
    <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>
</html>


<!-- <form class="mt-5 container">
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
</div> -->


$conn = mysqli_connect("localhost", "root", "", "pkm_catering");

// Check if the form is submitted
if (count($_POST) > 0) {
    // Update the order details with the submitted data
    $order_id = $_GET['id']; // Get the order ID from the URL parameter
    $first_name = $_POST['uname'];
    $email = $_POST['uemail'];


    // Serialize the carrybag data if it exists in the form submission
    // $carrybag = isset($_POST['carrybag']) ? serialize($_POST['carrybag']) : '';
    

    // Construct and execute the SQL query
    $sql = "UPDATE order_details SET  
    uname='$first_name', 
    uemail='$email',
    carrybag='$carrybag'
    WHERE id='$order_id'";
    
    mysqli_query($conn, $sql);

    // Check if the query was successful
    if (mysqli_affected_rows($conn) > 0) {
        $message = "Record Modified Successfully";
    } else {
        $message = "Failed to modify record";
    }
}


//correct code

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