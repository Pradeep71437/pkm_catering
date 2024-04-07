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
    $first_name = $_POST['uname'];
    $email = $_POST['uemail'];

    // Serialize the carrybag data if it exists in the form submission


    // Construct and execute the SQL query
    $sql = "UPDATE order_details SET  
        uname='$first_name', 
        uemail='$email'
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="லட்டு"> <span>லட்டு (Laddu)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="மைசூர் பாக்"> <span>மைசூர் பாக் (Mysorepak)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="பாதாம் கேக்"> <span>பாதாம் கேக் (Badam Cake)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="முந்திரி கேக்"> <span>முந்திரி கேக் (Cashew Cake)</span></li>

                                </div>
                                <div class="col-sm-4">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="நுக்கல்"> <span>நுக்கல் (Nookol)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="சோன்பப்டி"> <span>சோன்பப்டி (Soan Papdi)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="நேஷனல் கேக்"> <span>நேஷனல் கேக் (National Cake)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="திரட்டிப்பால்"> <span>திரட்டிப்பால் (Thirattipal)</span></li>

                                </div>
                                <div class="col-sm-4">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="அப்பம்"> <span>அப்பம் (Appam)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="தேங்காய் பர்பி"> <span>தேங்காய் பர்பி (Coconut Burfi)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="கைமுறுக்கு"> <span>கைமுறுக்கு (Kai Murukku)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="மணோப்பு"> <span>மணோப்பு (Manoppu)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="carrybagcou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="லட்டு "> <span>லட்டு (Laddu)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="பாதுஷா"> <span>பாதுஷா (Badusha)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="மில்க் கேக்"> <span>மில்க் கேக் (Milk Cake)</span></li>

                                </div>
                                <div class="col-lg-4">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="போர்ன்விடா கேக்"> <span>போர்ன்விடா கேக் (Bournvita Cake)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagweat[]" value="மிக்ஸர்"> <span>மிக்ஸர் (Mixture)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="carrybagsweatcou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagcookie[]" value="லட்டு"> <span>லட்டு (Laddu)</span></li>
                                </div>
                                <div class="col-6">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybagcookie[]" value="மணோகரம்"> <span>மணோகரம் (Manogaram)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="carrybagcookiecou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="பைனாப்பிள் புட்டிங்"> <span>Pineapple Pudding (பைனாப்பிள் புட்டிங்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="அசோகா அல்வா"> <span>Ashoka Alva(அசோகா அல்வா)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="அவல் கேசரி"> <span>Aval Kesari (அவல் கேசரி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="மினி இட்லி"> <span>Mini idli(மினி இட்லி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="தட்டு இட்லி"> <span>Plate idli(தட்டு இட்லி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="கல் தோசை"> <span>Kal dosa(கல் தோசை)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="பொங்கல்"> <span>Pongal (பொங்கல்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="ஊத்தப்பம்"> <span>Uttapam (ஊத்தப்பம்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="வெஜ். கிச்சடி"> <span>Veg Kichadi (வெஜ். கிச்சடி)</span></li>
                                </div>
                                <div class="col-sm-6">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="மெது வடை"> <span>Medhu Vadai (மெது வடை)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="தேங்காய் சட்னி"> <span>Coconut Chutney (தேங்காய் சட்னி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="சாம்பார்"> <span>Sambaar (சாம்பார்)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="காபி"> <span>Coffee (காபி)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="டீ"> <span>Tea (டீ)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaymor[]" value="பால்"> <span>Milk (பால்)</span></li>
                                </div>
                                
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaymorcou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="மைசூர்பாகு"> <span>மைசூர்பாகு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ஜாங்கிரி"> <span>ஜாங்கிரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அஜ்மீர் கேக்"> <span>அஜ்மீர் கேக்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="மோகன்டால்"> <span>மோகன்டால்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாக்கோ கேக்"> <span>சாக்கோ கேக்</span></li>
                                    <h6 class="px-3 p-3">வடை</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாம்பார் வடை"> <span>சாம்பார் வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ரசவடை"> <span>ரசவடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வாழைப்பூ வடை"> <span>வாழைப்பூ வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ஆமவடை"> <span>ஆமவடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தயிர்வடை"> <span>தயிர்வடை</span></li>
                                    <h6 class="px-3 p-3">சிப்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வாழை சிப்ஸ்"> <span>வாழை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="நேந்திரம் சிப்ஸ்"> <span>நேந்திரம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேனை சிப்ஸ்"> <span>சேனை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சர்க்கரை வல்லிகிழங்கு சிப்ஸ்"> <span>சர்க்கரை வல்லிகிழங்கு</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">தயிர் பச்சடி</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="காரபூந்தி தயிர்பச்சடி"> <span>காரபூந்தி தயிர்பச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தக்காளி தயிர்பச்சடி"> <span>தக்காளி தயிர்பச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வெண்டைக்காய் தயிர்பச்சடி"> <span>வெண்டைக்காய் தயிர்பச்சடி</span></li>
                                    <h6 class="px-3 p-3">கூட்டு</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="கத்திரிக்காய் கடலை புளிப்புக்கூட்டு"> <span>கத்திரிக்காய் கடலை புளிப்புக்கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="செளசெள கடலை புளிப்புக்கூட்டு"> <span>செளசெள கடலை புளிப்புக்கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேனை தயிர்கூட்டு"> <span>சேனை தயிர்கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="எரிசேரி"> <span>எரிசேரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தக்காளிக்காய் கூட்டு"> <span>தக்காளிக்காய் கூட்டு</span></li>
                                    <h6 class="px-3 p-3">பொறியல்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="வெண்டைக்காய் காரகறமது"> <span>வெண்டைக்காய் காரகறமது</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேனைகாரகறமது or Fry"> <span>சேனைகாரகறமது or Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சேம்பு Fry"> <span>சேம்பு Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="கோவக்காய் காரகறமது"> <span>கோவக்காய் காரகறமது</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="கோஸ்பட்டாணி பொறியல்"> <span>கோஸ்பட்டாணி பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அவரைக்காய் பொறியல்"> <span>அவரைக்காய் பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="பீன்ஸ் பொறியல்"> <span>பீன்ஸ் பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="குடமிளகாய் உசிலி"> <span>குடமிளகாய் உசிலி</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">பாயசம்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="இளநீர் பாயசம்"> <span>இளநீர் பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="பால் பாயசம்"> <span>பால் பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அடைப்பிரதமன்"> <span>அடைப்பிரதமன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="திருப்புல்லாணி பாயசம்"> <span>திருப்புல்லாணி பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சக்கை பிரதமன்"> <span>சக்கை பிரதமன்</span></li>
                                    <h6 class="px-3 p-3">ஊறுகாய்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தக்காளி"> <span>தக்காளி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="நெல்லிக்காய்"> <span>நெல்லிக்காய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="மாங்காய்"> <span>மாங்காய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="இஞ்சி"> <span>இஞ்சி</span></li>
                                    <h6 class="px-3 p-3">list</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="பருப்பு"> <span>பருப்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="நெய்"> <span>நெய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாதம்"> <span>சாதம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="சாம்பார்"> <span>சாம்பார்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="ரசம்"> <span>ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தயிர்"> <span>தயிர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="அப்பளம்"> <span>அப்பளம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayaft[]" value="தாம்பூலம்"> <span>தாம்பூலம்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdayevecou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="காசி அல்வா"> <span>காசி அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="பாதாம் அல்வா"> <span>பாதாம் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="கேரட் அல்வா"> <span>கேரட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Dry Fruit அல்வா"> <span>Dry Fruit அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Coconut அல்வா"> <span>Coconut அல்வா</span></li>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="px-3 p-3">டிபன்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="காஞ்சீபுரம் இட்லி"> <span>காஞ்சீபுரம் இட்லி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="ரவா பொங்கல்"> <span>ரவா பொங்கல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Veg கிச்சடி"> <span>Veg கிச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="அடை அவியல்"> <span>அடை அவியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="தேங்காய் சேவை"> <span>தேங்காய் சேவை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Lemon சேவை"> <span>Lemon சேவை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Veg சேவை"> <span>Veg சேவை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="செட்தோசை வடகறி"> <span>செட்தோசை வடகறி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="ரவா இட்லி"> <span>ரவா இட்லி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="கோதுமை தோசை"> <span>கோதுமை தோசை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="ரவா தோசை"> <span>ரவா தோசை</span></li>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="px-3 p-3">போண்டா</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="மைசூர் போண்டா"> <span>மைசூர் போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="Veg போண்டா"> <span>Veg போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="உருளை போண்டா"> <span>உருளை போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="சமோசா"> <span>சமோசா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="பனீர் போண்டா"> <span>பனீர் போண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="தேங்காய் சட்னி"> <span>தேங்காய் சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="புதினா சட்னி"> <span>புதினா சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="சாம்பார்"> <span>சாம்பார்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="காபி"> <span>காபி (Coffee)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="டீ"> <span>டீ (Tea)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdayeve[]" value="பால்"> <span>பால் (Milk)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdayevecou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="பைனாப்பிள்"> <span>பைனாப்பிள்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="க்ரேப்"> <span>க்ரேப்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Water Melon"> <span>Water Melon</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Musk Melon"> <span>Musk Melon</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Lemon மொஜிட்டோ"> <span>Lemon மொஜிட்டோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Green Apple Mint மொஜிட்டோ"> <span>Green Apple Mint மொஜிட்டோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Mango"> <span>Mango</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="ஜிகர்தண்டா"> <span>ஜிகர்தண்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Sugarcane juice"> <span>Sugarcane juice</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydrink[]" value="Fresh லஸ்ஸி"> <span>Fresh லஸ்ஸி</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaycooldrinkcou" >
                </div>
                <!-- long ones 15 -->
                <div class="col-lg-4 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="Snacks" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="px-3 p-3">சாட்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பேல்பொறி"> <span>பேல்பொறி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பானிபூரி"> <span>பானிபூரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="தஹிபூரி"> <span>தஹிபூரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="சமுசா - சாஸ்"> <span>சமுசா - சாஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பாவ்பாஜி"> <span>பாவ்பாஜி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="சென்னா மசாலா"> <span>சென்னா மசாலா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="Veg Roll"> <span>Veg Roll</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="Veg கட்லட் - சாஸ்"> <span>Veg கட்லட் - சாஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="கச்சோடி"> <span>கச்சோடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="சாக்லெட் Fountain"> <span>சாக்லெட் Fountain</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="குழிப்பணியாரம்"> <span>குழிப்பணியாரம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="French Fry"> <span>French Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="Sweet corn"> <span>Sweet corn</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பனீர் டிக்கா"> <span>பனீர் டிக்கா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaysnack[]" value="பாப்கான் பஞ்சுமிட்டாய்"> <span>பாப்கான் பஞ்சுமிட்டாய்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaysnackcou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ரசமலாய்"> <span>ரசமலாய் (Rasamalai)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பதிர்பேனி"> <span>பதிர்பேனி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சீரோட்டி"> <span>சீரோட்டி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மலாய் சான்ட்விட்ச்"> <span>மலாய் சான்ட்விட்ச்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="குலோப் ஜாமூன்"> <span>குலோப் ஜாமூன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Dry ஜாமூன்"> <span>Dry ஜாமூன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மலாய் சம் சம்"> <span>மலாய் சம் சம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="காஜு கசாட்டா"> <span>காஜு கசாட்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="காஜு கத்திலி"> <span>காஜு கத்திலி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பாதாம் ரோல்"> <span>பாதாம் ரோல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிஸ்தா ரோல்"> <span>பிஸ்தா ரோல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ட்ரை Fruits கேக்"> <span>ட்ரை Fruits கேக்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ரப்டி ஜிலேபி"> <span>ரப்டி ஜிலேபி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பாசந்தி"> <span>பாசந்தி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கற்கண்டு பாத்"> <span>கற்கண்டு பாத்</span></li>
                                    <h6 class="px-3 p-3">ஸ்டார்டர்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg கட்லெட்"> <span>Veg கட்லெட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg வடை"> <span>Veg வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கீரை வடை"> <span>கீரை வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg Spring Roll"> <span>Veg Spring Roll</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Paneer Roll"> <span>Paneer Roll</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கோபி Fry"> <span>கோபி Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ருமானி ரொட்டி"> <span>ருமானி ரொட்டி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ஆலு பரோட்டா"> <span>ஆலு பரோட்டா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பூரி"> <span>பூரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சப்பாத்தி"> <span>சப்பாத்தி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பட்டர் நான்"> <span>பட்டர் நான்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="புல்கா"> <span>புல்கா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg ஊத்தப்பம்"> <span>Veg ஊத்தப்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பொடி ஊத்தப்பம்"> <span>பொடி ஊத்தப்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பனீர் சப்ஜி"> <span>பனீர் சப்ஜி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மட்டர் பனீர்"> <span>மட்டர் பனீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கோபி மஞ்சூரியன்"> <span>கோபி மஞ்சூரியன்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சென்னா"> <span>சென்னா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg குர்மா"> <span>Veg குர்மா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சட்னி,கொச்சு"> <span>சட்னி,கொச்சு</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">Rice Items</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg புலாவ்"> <span>Veg புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Fried ரைஸ்"> <span>Fried ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="தந்துரி புலாவ்"> <span>தந்துரி புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பனீர் புலாவ்"> <span>பனீர் புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="காஷ்மீரி புலாவ்"> <span>காஷ்மீரி புலாவ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Ghee ரைஸ்"> <span>Ghee ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சீரக ரைஸ்"> <span>சீரக ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="வாங்கி பாத்"> <span>வாங்கி பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="டால் பாத்"> <span>டால் பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிசிபேளா பாத்"> <span>பிசிபேளா பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கதம்பம்"> <span>கதம்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="புதினா ரைஸ்"> <span>புதினா ரைஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value=""> <span>மல்லி ரைஸ்</span></li>
                                    <h6 class="px-3 p-3">Raithas</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Onion Raitha"> <span>Onion Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Cucumber Raitha"> <span>Cucumber Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg Raitha"> <span>Veg Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Boondhi Raitha"> <span>Boondhi Raitha</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Tomato Raitha"> <span>Tomato Raitha</span></li>
                                    <h6 class="px-3 p-3">சிப்ஸ்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="நேந்திரம் சிப்ஸ்"> <span>நேந்திரம் சிப்ஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Finger Chips"> <span>Finger Chips</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மினி வத்தல்"> <span>மினி வத்தல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மினி பப்பட்"> <span>மினி பப்பட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="அப்பளம்"> <span>அப்பளம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பப்படம்"> <span>பப்படம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="இலை வடாம்(மினி)"> <span>இலை வடாம் (மினி)</span></li>
                                    <h6 class="px-3 p-3">ரசம்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="இஞ்சி லெமன் ரசம்"> <span>இஞ்சி லெமன் ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="அன்னாசி ரசம்"> <span>அன்னாசி ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="லெமன் சீரக ரசம்"> <span>லெமன் சீரக ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மைசூர் ரசம்"> <span>மைசூர் ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="தக்காளி ரசம் (SPL)"> <span>தக்காளி ரசம் (SPL)</span></li>
                                    <h6 class="px-3 p-3">பொறியல்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="உருளை ரோஸ்ட்"> <span>உருளை ரோஸ்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மிக்ஸ் வெஜ் பொறியல்"> <span>மிக்ஸ் வெஜ் பொறியல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சேனை ரோஸ்ட்"> <span>சேனை ரோஸ்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கத்திரிக்காய் சாப்ஸ்"> <span>கத்திரிக்காய் சாப்ஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிண்டி Fry"> <span>பிண்டி Fry</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சேம்பு ரோஸ்ட்"> <span>சேம்பு ரோஸ்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கோஸ் பட்டாணி பொறியல்"> <span>கோஸ் பட்டாணி பொறியல்</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">பாயசம்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="இளநீர் பாயசம்"> <span>இளநீர் பாயசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மில்க்மெய்டு கேரட்கீர்"> <span>மில்க்மெய்டு கேரட்கீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பாதாம் கீர்"> <span>பாதாம் கீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிஸ்தா கீர்"> <span>பிஸ்தா கீர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="அவல் மில்க்மெய்டு பாயசம்"> <span>அவல் மில்க்மெய்டு பாயசம்</span></li>
                                    <h6 class="px-3 p-3">ஊறுகாய்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மாங்காய் தொக்கு"> <span>மாங்காய் தொக்கு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கட்மாங்காய் ஊறுகாய்"> <span>கட்மாங்காய் ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Veg ஊறுகாய்"> <span>Veg ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பூண்டு - இஞ்சி ஊறுகாய்"> <span>பூண்டு - இஞ்சி ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="புளி - இஞ்சி ஊறுகாய்"> <span>புளி - இஞ்சி ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ஆவக்காய் ஊறுகாய்"> <span>ஆவக்காய் ஊறுகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பட்டர் பாத்"> <span>பட்டர் பாத்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மோர் மிளகாய்"> <span>மோர் மிளகாய்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="வத்தகுழம்பு"> <span>வத்தகுழம்பு</span></li>
                                    <h6 class="px-3 p-3">Ice Cream And Scoop Ice Cream</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="வெந்நிலா"> <span>வெந்நிலா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ஸ்ட்ராபெர்ரி"> <span>ஸ்ட்ராபெர்ரி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பட்டர் ஸ்காட்ச்"> <span>பட்டர் ஸ்காட்ச்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சாக்கோ Chip"> <span>சாக்கோ Chip</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ப்ளாக் கரண்ட்"> <span>ப்ளாக் கரண்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ராஜ்போக்"> <span>ராஜ்போக்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பிஸ்தா"> <span>பிஸ்தா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ட்யூட்டி Fruity"> <span>ட்யூட்டி Fruity</span></li>
                                    <h6 class="px-3 p-3">Kulfi</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கேசர் குல்பி"> <span>கேசர் குல்பி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பான் குல்பி"> <span>பான் குல்பி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மலாய் குல்பி"> <span>மலாய் குல்பி</span></li>
                                    <h6 class="px-3 p-3">பால்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மசாலா பால்"> <span>மசாலா பால்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="பனங்கற்கண்டு பால்"> <span>பனங்கற்கண்டு பால்</span></li>
                                    <h6 class="px-3 p-3">Beeda</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Pan Beeda"> <span>Pan Beeda</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Sweet Beeda"> <span>Sweet Beeda</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கல்கத்தா Beeda"> <span>கல்கத்தா Beeda</span></li>
                                    <h6 class="px-3 p-3">வெத்தலை</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="கும்பகோண வெத்தலை"> <span>கும்பகோண வெத்தலை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="சீவல்"> <span>சீவல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="ரசிகலால் பாக்கு"> <span>ரசிகலால் பாக்கு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="Sweet சோம்பு"> <span>Sweet சோம்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="firdaydinner[]" value="மவுத் Fresh"> <span>மவுத் Fresh</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="firdaydinnercou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="ட்ரை Fruit அல்வா"> <span>ட்ரை Fruit அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="பீட்ருட் அல்வா"> <span>பீட்ருட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="அசோகா அல்வா"> <span>அசோகா அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="காசி அல்வா"> <span>காசி அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="கேரட் அல்வா"> <span>கேரட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="தம்ரூட் அல்வா"> <span>தம்ரூட் அல்வா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="Coconut அல்வா"> <span>Coconut அல்வா</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">டிபன்</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="இட்லி"> <span>இட்லி (Idly)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="நெய் பொங்கல்"> <span>நெய் பொங்கல் (Nei Pongal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மசால் தோசை - மல்லி சட்னி"> <span>மசால் தோசை - மல்லி சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="Plain தோசை - தக்காளி சட்னி"> <span>Plain தோசை - தக்காளி சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="கல் தோசை - சாம்பார்"> <span>கல் தோசை - சாம்பார்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="பூரி மாசலா"> <span>பூரி மாசலா</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="இடியாப்பாம் - குர்மா, தேங்காய் பால்"> <span>இடியாப்பாம் - குர்மா, தேங்காய் பால்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மினி சாம்பார் இட்லி"> <span>மினி சாம்பார் இட்லி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="வெஜ் ஊத்தப்பம்"> <span>வெஜ் ஊத்தப்பம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value=""> <span>ராகி - தோசை</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">வடை</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மெது வடை - தேங்காய் சட்னி"> <span>மெது வடை - தேங்காய் சட்னி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மினிசாம்பார் வடை - Spl சட்னி"> <span>மினிசாம்பார் வடை - Spl சட்னி</span></li>
                                    <h6 class="px-3 p-3">Fresh Juice</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="இஞ்சி லெமன் மின்ட்"> <span>இஞ்சி லெமன் மின்ட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="கமலா ஆரஞ்சு"> <span>கமலா ஆரஞ்சு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மாம்பழம்"> <span>மாம்பழம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="க்ரேப்"> <span>க்ரேப்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="மசாலா மோர்"> <span>மசாலா மோர்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaymor[]" value="பானகம்"> <span>பானகம்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdaymorcou" >
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
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="Fruits Salad"> <span>Fruits Salad</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="தக்காளி ஜாம்"> <span>தக்காளி ஜாம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="Fruits Jam"> <span>Fruits Jam</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பழம், சர்க்கரை"> <span>பழம், சர்க்கரை</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கேரட்கோஸ்மல்லி"> <span>கேரட்கோஸ்மல்லி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பருப்புகோஸ்மல்லி"> <span>பருப்புகோஸ்மல்லி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="தயிர்பச்சடி"> <span>தயிர்பச்சடி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கல்யாண அவியல்"> <span>கல்யாண அவியல்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மலபார் அவியல்"> <span>மலபார் அவியல்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பூசணிக்காய் மொச்சை புளிப்புக்கூட்டு"> <span>பூசணிக்காய் மொச்சை புளிப்புக்கூட்டு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="சௌசௌகடலை புளிப்புக்கூட்டு"> <span>சௌசௌகடலை புளிப்புக்கூட்டு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="புளியோதரை"> <span>புளியோதரை</span></li>

                                        </div>
                                    <div class="col-sm-4">
                                        <h6 class="px-3 p-3">பொறியல்</h6>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="வாழைக்காய்கறமது"> <span>வாழைக்காய்கறமது</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="சேனைக்கிழங்கு கறமது"> <span>சேனைக்கிழங்கு கறமது</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பிண்டி Fry"> <span>பிண்டி Fry</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="உருளைக்கிழங்கு பொடிமாஸ்"> <span>உருளைக்கிழங்கு பொடிமாஸ்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கோஸ் உசிலி"> <span>கோஸ் உசிலி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பீன்ஸ் உசிலி"> <span>பீன்ஸ் உசிலி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="புடலங்காய் உசிலி"> <span>புடலங்காய் உசிலி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="தயிர்வடை"> <span>தயிர்வடை</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="உருளை Chips"> <span>உருளை Chips</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பருப்பு"> <span>பருப்பு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="நெய்"> <span>நெய்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கல்யாண சாம்பார்"> <span>கல்யாண சாம்பார்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மோர்க்குழம்பு தக்காளி ரசம்"> <span>மோர்க்குழம்பு தக்காளி ரசம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மைசூர் ரசம்"> <span>மைசூர் ரசம்</span></li>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6 class="px-3 p-3">பாயசம்</h6>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="அக்கார அடிசில்"> <span>அக்கார அடிசில்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பாசிபருப்பு பாயசம்"> <span>பாசிபருப்பு பாயசம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="கடலைபருப்பு பாயசம்"> <span>கடலைபருப்பு பாயசம்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="அடைப்ரதமன்"> <span>அடைப்ரதமன்</span></li>
                                        <h6 class="px-3 p-3">ஸ்வீட்ஸ்</h6>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="முந்திரிகேக்"> <span>முந்திரிகேக்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பாதாம்கேக்"> <span>பாதாம்கேக்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மில்க்கேக்"> <span>மில்க்கேக்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பாதுஷா"> <span>பாதுஷா</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மினிலட்டு"> <span>மினிலட்டு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மினிஜாங்கிரி"> <span>மினிஜாங்கிரி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மில்க்மைசூர்பாகு"> <span>மில்க்மைசூர்பாகு</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="காராசேவ்"> <span>காராசேவ்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="காராபூந்தி"> <span>காராபூந்தி</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="பகளாபாத்"> <span>பகளாபாத்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="அப்பளம் வத்தகுழம்பு கடாரங்காய் ஊறுகாய்"> <span>அப்பளம் வத்தகுழம்பு கடாரங்காய் ஊறுகாய்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="லெமன் ஊறுகாய்"> <span>லெமன் ஊறுகாய்</span></li>
                                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayaft[]" value="மாவடு"> <span>மாவடு</span></li>
                                    </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdayaftercou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="ஸ்வீட்"> <span>ஸ்வீட் (SWEET)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="பஜ்ஜி"> <span>பஜ்ஜி (Bajji)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="தேங்காய் சட்னி"> <span>தேங்காய் சட்னி (Coconut Chutney)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdayeve[]" value="காபி"> <span>காபி (Coffee)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdayevecou" >
                </div>
                <!-- long ones 20 -->
                <div class="col-md-8 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="முகூர்த்தம் டின்னர்" data-bs-toggle="dropdown">
        
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">SWEETS</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="குலோப் ஜாமுன்"> <span>குலோப் ஜாமுன் (Gulab Jamun)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="பாதாம் கேக்"> <span>பாதாம் கேக் (Badam Cake)</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">MAIN DISH</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="மணத்தக்காளி வத்த குழம்பு"> <span>மணத்தக்காளி வத்த குழம்பு (Manathakali Vaththa Kozhambu)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="தக்காளி ரசம்"> <span>தக்காளி ரசம் (Thakali Rasam)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="ஜவ்வரிசி கீர்"> <span>ஜவ்வரிசி கீர் (Javvarisi Kheer)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="சேமியா கீர்"> <span>சேமியா கீர் (Semiya Kheer)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="தயிர்"> <span>தயிர் (Curd)</span></li>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="px-3 p-3">SIDE DISH</h6>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="தயிர்பச்சடி"> <span>தயிர்பச்சடி (Thayir Pachadi)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="கத்திரிக்காய் பொறியல்"> <span>கத்திரிக்காய் பொறியல் (Kathirikai Poriyal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="கேரட் பொரியல்"> <span>கேரட் பொரியல் (Carrot Poriyal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="நெய் & பருப்பு"> <span>நெய் & பருப்பு (Ghee & Dhal)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="ஊறுகாய்"> <span>ஊறுகாய் (Mango Pickle)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="secdaydinner[]" value="அப்பளம்"> <span>அப்பளம் (Appalam)</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="secdaydinnercou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="புரூட் ஜாம்"> <span>புரூட் ஜாம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="தயிர்பச்சடி"> <span>தயிர்பச்சடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="வெஜ். கூட்டு"> <span>வெஜ். கூட்டு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="உருளை பொடிமாஸ்"> <span>உருளை பொடிமாஸ்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="நெய் & பருப்பு"> <span>நெய் & பருப்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="வெஜ். வடை"> <span>வெஜ். வடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="அப்பளம் & வத்தல்"> <span>அப்பளம் & வத்தல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="மிளகு குழம்பு"> <span>மிளகு குழம்பு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="லெமன் ரசம்"> <span>லெமன் ரசம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="சர்க்கரை பொங்கல்"> <span>சர்க்கரை பொங்கல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="guestfood[]" value="தயிர்,ஊறுகாய்"> <span>தயிர்,ஊறுகாய்</span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="guestfoodcou" >
                </div>
                <!-- long ones 22 -->
                <div class="col-lg-4 mt-4 align-items-center justify-content-center">
                    <div class="dropdown">
                        <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="Packet food" data-bs-toggle="dropdown">
                        <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                            <div class="row">
                                <div class="col-12">
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="packetfood[]" value="சர்க்கரை பொங்கல்"> <span>சர்க்கரை பொங்கல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="packetfood[]" value="புளியோதரை & வத்தல்"> <span>புளியோதரை & வத்தல்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="packetfood[]" value="தயிர் சாதம் & ஊறுகாய்"> <span>தயிர் சாதம் & ஊறுகாய்</span></li>
                                    </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  pt-4 ">
                    <input type="number" placeholder="எண்ணிக்கை" class="form-control" id="number" name="packetfoodcou" >
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="பெருமாள் மாலை-1"> <span>பெருமாள் மாலை-1 (Perumal Maalai - 1)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="மாப்பிள்ளை வரவேற்பு மாலை-1"> <span>மாப்பிள்ளை வரவேற்பு மாலை-1 (Mappilai Varaverpu Malai -1)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="சரம் - 2 பந்து">  <span>சரம் - 2 பந்து (Saram - 2 Ball)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="நிச்சயதார்த்த மாலை - 2"> <span>நிச்சயதார்த்த மாலை - 2 (Nichayathartha Malli)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="ஜடை-1"> <span>ஜடை-1 (Jadai-1)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="சரம் - 6 பந்து"> <span>சரம் - 6 பந்து (Saram - 6 Ball)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="ரிசப்ஷன் மாலை - 2"> <span>ரிசப்ஷன் மாலை - 2 (Reception Malai - 2)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="கைசெண்டு - 2"> <span>கைசெண்டு - 2 (Kaicent - 2)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="malaifirday[]" value="ரிசப்ஷன் ப்ளேட் ரோஸ் - 200"> <span>ரிசப்ஷன் ப்ளேட் ரோஸ் - 200 (Reception Plate Rose - 200)</span></li>
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="விரத மாலை - 2"> <span>விரத மாலை - 2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="மாத்து மாலை - 5"> <span>மாத்து மாலை - 2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="முகூர்த்த மாலை - 2"> <span>முகூர்த்த மாலை - 2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="சரம் - 6 பந்து"> <span>சரம் - 6 பந்து</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value=" உதிரிப்பூ"> <span>உதிரிப்பூ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="முகூர்த்த மேடை பூ"> <span>முகூர்த்த மேடை பூ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="அலங்காரம் ஊஞ்சல் பூ"> <span>அலங்காரம் ஊஞ்சல் பூ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="அலங்காரம் நலுங்கு பூ - 3 பந்து"> <span>அலங்காரம் நலுங்கு பூ - 3 பந்து</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedmalaiset[]" value="சரம் - 6 பந்து"> <span>சம்மந்தி விருந்து பூ - 2 பந்து</span></li>
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="பெருமாள் மாலை-1"> <span>பட்டுபாய் (WITH NAME)</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="Fancy தடி & குடை"> <span>Fancy தடி & குடை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="சுந்தரகாண்டம் புத்தகம்">  <span>சுந்தரகாண்டம் புத்தகம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="Fancy விசிறி & மணை -2"> <span>Fancy விசிறி & மணை -2</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="kasiyathiraiset[]" value="பிடி சுற்றும் பித்தளை பாத்திரங்கள்"> <span>பிடி சுற்றும் பித்தளை பாத்திரங்கள்</span></li>
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="குண்டு மஞ்சள் - 200 கிராம்"> <span>குண்டு மஞ்சள் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="சர்க்கரை - 5 கிலோ"> <span>சர்க்கரை - 5 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="வெல்லம் - 1 கிலோ"> <span>வெல்லம் - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="துவரம் பருப்பு - 2 கிலோ"> <span>துவரம் பருப்பு - 2 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="கடலை பருப்பு - 1 கிலோ"> <span>கடலை பருப்பு - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="அரிசி 10 கிலோ"> <span>அரிசி 10 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="மைதா - 1 கிலோ"> <span>மைதா - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="ரவை - 1 கிலோ"> <span>ரவை - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="முந்திரி - 500 கிராம்"> <span>முந்திரி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="உலர்ந்த திராட்சை - 500 கிராம்"> <span>உலர்ந்த திராட்சை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="பாதாம் பருப்பு 250 கிராம்"> <span>பாதாம் பருப்பு - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="கடலை பருப்பு - 1 கிலோ"> <span>ஏலக்காய் - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="மிளகு - 200 கிராம்"> <span>மிளகு - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="சீரகம் - 200 கிராம்"> <span>சீரகம் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="நெய் - 500 கிராம்"> <span>நெய் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="காபி பவுடர் - 500 கிராம்"> <span>காபி பவுடர் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="மஞ்சள் பொடி - 100 கிராம்"> <span>மஞ்சள் பொடி - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="வேர்க்கடலை - 500 கிராம்"> <span>வேர்க்கடலை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="ஹார்லிக்ஸ் - 500 கிராம்"> <span>ஹார்லிக்ஸ் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="டீ பவுடர் - 1 கிராம்"> <span>டீ பவுடர் - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="ஜவ்வரிசி - 500 கிராம்"> <span>ஜவ்வரிசி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="samangalset[]" value="காய்கறிகள்"> <span>காய்கறிகள்</span></li>
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="குண்டு மஞ்சள் - 200 கிராம்"> <span>குண்டு மஞ்சள் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="சர்க்கரை - 5 கிலோ"> <span>சர்க்கரை - 5 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="வெல்லம் - 1 கிலோ"> <span>வெல்லம் - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="துவரம் பருப்பு - 2 கிலோ"> <span>துவரம் பருப்பு - 2 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="கடலை பருப்பு - 1 கிலோ"> <span>கடலை பருப்பு - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="அரிசி 10 கிலோ"> <span>அரிசி 10 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="மைதா - 1 கிலோ"> <span>மைதா - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="ரவை - 1 கிலோ"> <span>ரவை - 1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="முந்திரி - 500 கிராம்"> <span>முந்திரி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="உலர்ந்த திராட்சை - 500 கிராம்"> <span>உலர்ந்த திராட்சை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="பாதாம் பருப்பு 250 கிராம்"> <span>பாதாம் பருப்பு - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="கடலை பருப்பு - 1 கிலோ"> <span>ஏலக்காய் - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="மிளகு - 200 கிராம்"> <span>மிளகு - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="சீரகம் - 200 கிராம்"> <span>சீரகம் - 200 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="நெய் - 500 கிராம்"> <span>நெய் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="காபி பவுடர் - 500 கிராம்"> <span>காபி பவுடர் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="மஞ்சள் பொடி - 100 கிராம்"> <span>மஞ்சள் பொடி - 100 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="வேர்க்கடலை - 500 கிராம்"> <span>வேர்க்கடலை - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="ஹார்லிக்ஸ் - 500 கிராம்"> <span>ஹார்லிக்ஸ் - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="டீ பவுடர் - 1 கிராம்"> <span>டீ பவுடர் - 250 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="ஜவ்வரிசி - 500 கிராம்"> <span>ஜவ்வரிசி - 500 கிராம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="wedplateset[]" value="காய்கறிகள்"> <span>காய்கறிகள்</span></li>
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Shaving Brush"> <span>Shaving Brush</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Racer"> <span>Racer</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Foam"> <span>Foam</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Lotion"> <span>Lotion</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Bath Soap"> <span>Bath Soap</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Shampoo"> <span>Shampoo</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Mirror"> <span>Mirror</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Comb"> <span>Comb</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Hair Oil"> <span>Hair Oil</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Tooth Brush"> <span>Tooth Brush</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Tooth Paste"> <span>Tooth Paste</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Hand Towel"> <span>Hand Towel</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Thiruman Petti"> <span>Thiruman Petti</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Silver Kuchi"> <span>Silver Kuchi</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="toiletset[]" value="Body Spray"> <span>Body Spray</span></li>
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
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="மஞ்சள் பொடி"> <span>மஞ்சள் பொடி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="விரளி மஞ்சள்"> <span>விரளி மஞ்சள்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="களி பாக்கு"> <span>களி பாக்கு</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="சந்தனம்"> <span>சந்தனம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="வெற்றிலை"> <span>வெற்றிலை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="நவதான்யம்"> <span>நவதான்யம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="நெல்பொறி"> <span>பாலிகை செட்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="வாழைப்பழம்"> <span>விளக்கு எண்ணை</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="திரிநூல்"> <span>தேங்காய் - 20</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="அரிசி - 15 கிலோ"> <span>அரிசி - 15 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="நெய் -1 கிலோ"> <span>நெய் -1 கிலோ</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="குங்குமம்"> <span>குங்குமம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="கற்பூரம்"> <span>கற்பூரம்</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="வறட்டி"> <span>வறட்டி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="சுள்ளி"> <span>சுள்ளி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="நெல்பொறி"> <span>நெல்பொறி</span></li>
                                    <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="vedicset[]" value="வாழைப்பழம்"> <span>வாழைப்பழம்</span></li>
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
