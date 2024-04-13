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
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="மைசூர் பாக்" <?php echo in_array('', $carrybag) ? 'checked' : ''; ?>> மைசூர் பாக் (Mysorepak)</li>
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
<?php
            if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM order_details WHERE id = $order_id");
    $row = mysqli_fetch_assoc($result);

    // Unserialize the carrybag data
    $carrybag = !empty($row['carrybag']) ? unserialize($row['carrybag']) : [];
    $carrybagweat = !empty($row['carrybagweat']) ? unserialize($row['carrybagweat']) : [];
}



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
?>