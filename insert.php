<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "pkm_catering");

if(isset($_POST['submit'])) {
    $uname = mysqli_real_escape_string($connection, $_POST['uname']);
    $unumber = mysqli_real_escape_string($connection, $_POST['unumber']);
    $umail = mysqli_real_escape_string($connection, $_POST['umail']);
    $ucity = mysqli_real_escape_string($connection, $_POST['ucity']);
    $udate = mysqli_real_escape_string($connection, $_POST['udate']);
    $uguests = mysqli_real_escape_string($connection, $_POST['uguests']);

    // Check if the checkboxes are set before serializing
    $breakfast = isset($_POST['breakfast']) ? serialize($_POST['breakfast']) : '';
    $lunch = isset($_POST['lunch']) ? serialize($_POST['lunch']) : '';
    $dinner = isset($_POST['dinner']) ? serialize($_POST['dinner']) : '';

    $query = "INSERT INTO orders VALUES (null, '$uname', '$unumber', '$umail', '$ucity', '$udate', '$uguests', '$breakfast', '$lunch', '$dinner')";
    
    $result = mysqli_query($connection, $query);

    if($result) {
        echo "<script type='text/javascript'>
              alert('Order submitted successfully...'); 
              window.location.href = 'book.html';
              </script>";
    } else {
        echo "<script type='text/javascript'>
              alert('Error... Please try again.'); 
              window.location.href = 'index.html';
              </script>";
    }
}

mysqli_close($connection);
?>