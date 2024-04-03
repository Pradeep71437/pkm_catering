<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pkm_catering";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize $row variable
$row = [];

// Fetch specific order data based on the passed ID
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $sql = "SELECT * FROM order_details WHERE id = $order_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No results found.";
    }
}

// Close connection
$conn->close();
?>

<!-- Your HTML code here -->
<h5 class="text-center mt-4">Viratha Patchanangal (விரத பட்சணங்கள்) Menu:</h5>
<div class="row align-items-center justify-content-center">
    <div class="col-lg-8 mt-4 align-items-center justify-content-center">
        <div class="dropdown">
            <input type="button" class="btn btn-primary form-control dropdown-toggle" style="color: black;" value="விரத பட்சணங்கள்" data-bs-toggle="dropdown">

            <ul class="dropdown-menu" style="height: 250px; width: 100%; overflow: auto;">
                <div class="row">
                    <li class="px-3 m-2">
                        <input type="checkbox" style="color: black;" id="select-all" class="select-all" onchange="checkAll(this)" />
                        <label for="select-all">Select All</label>
                    </li>
                    <!-- Checkbox inputs with PHP to mark them as checked if needed -->
                    <div class="col-sm-4">
                        <li class="px-3 m-2"><input type="checkbox" style="color: black;" name="carrybag[]" value="லட்டு" <?php echo in_array('லட்டு', $carrybag) ? 'checked' : ''; ?>> லட்டு (Laddu)</li>
                        <!-- Add more checkbox inputs here -->
                    </div>
                    <!-- Add more columns here -->
                </div>
            </ul>
        </div>
    </div>
</div>
