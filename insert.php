<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "pkm_catering");

// if(isset($_POST['submit'])) {
//     $uname = mysqli_real_escape_string($connection, $_POST['uname']);
//     $unumber = mysqli_real_escape_string($connection, $_POST['unumber']);
//     $umail = mysqli_real_escape_string($connection, $_POST['umail']);
//     $ucity = mysqli_real_escape_string($connection, $_POST['ucity']);
//     $udate = mysqli_real_escape_string($connection, $_POST['udate']);
//     $uguests = mysqli_real_escape_string($connection, $_POST['uguests']);

//     // Check if the checkboxes are set before serializing
//     $breakfast = isset($_POST['breakfast']) ? serialize($_POST['breakfast']) : '';
//     $lunch = isset($_POST['lunch']) ? serialize($_POST['lunch']) : '';
//     $dinner = isset($_POST['dinner']) ? serialize($_POST['dinner']) : '';

//     $query = "INSERT INTO orders VALUES (null, '$uname', '$unumber', '$umail', '$ucity', '$udate', '$uguests', '$breakfast', '$lunch', '$dinner')";
    
//     $result = mysqli_query($connection, $query);

//     if($result) {
//         echo "<script type='text/javascript'>
//               alert('Order submitted successfully...'); 
//               window.location.href = 'book.html';
//               </script>";
//     } else {
//         echo "<script type='text/javascript'>
//               alert('Error... Please try again.'); 
//               window.location.href = 'index.html';
//               </script>";
//     }
// }

if(isset($_POST['submit'])) {
    $uname = mysqli_real_escape_string($connection, $_POST['uname']);
    $unumber = mysqli_real_escape_string($connection, $_POST['unumber']);
    $uemail = mysqli_real_escape_string($connection, $_POST['uemail']);
    $ucity = mysqli_real_escape_string($connection, $_POST['ucity']);
    $usdate = mysqli_real_escape_string($connection, $_POST['usdate']);
    $uedate = mysqli_real_escape_string($connection, $_POST['uedate']);
    $upartydetails = mysqli_real_escape_string($connection, $_POST['upartydetails']);
    $uhalldetails = mysqli_real_escape_string($connection, $_POST['uhalldetails']);
    // large value count
    $carrybagcou = mysqli_real_escape_string($connection, $_POST['carrybagcou']);
    $carrybagsweatcou = mysqli_real_escape_string($connection, $_POST['carrybagsweatcou']);
    $carrybagcookiecou = mysqli_real_escape_string($connection, $_POST['carrybagcookiecou']);
    $firdaymorcou = mysqli_real_escape_string($connection, $_POST['firdaymorcou']);
    $firdayaftcou = mysqli_real_escape_string($connection, $_POST['firdayaftcou']);
    $firdayevecou = mysqli_real_escape_string($connection, $_POST['firdayevecou']);
    $firdaycooldrinkcou = mysqli_real_escape_string($connection, $_POST['firdaycooldrinkcou']);
    $firdaysnackcou = mysqli_real_escape_string($connection, $_POST['firdaysnackcou']);
    $firdaydinnercou = mysqli_real_escape_string($connection, $_POST['firdaydinnercou']);
    $secdaymorcou = mysqli_real_escape_string($connection, $_POST['secdaymorcou']);
    $secdayaftercou = mysqli_real_escape_string($connection, $_POST['secdayaftercou']);
    $secdayevecou = mysqli_real_escape_string($connection, $_POST['secdayevecou']);
    $secdaydinnercou = mysqli_real_escape_string($connection, $_POST['secdaydinnercou']);
    $guestfoodcou = mysqli_real_escape_string($connection, $_POST['guestfoodcou']);
    $packetfoodcou = mysqli_real_escape_string($connection, $_POST['packetfoodcou']);

    // Check if the checkboxes are set before serializing
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
    $firdayaft = isset($_POST['firdayaft']) ? serialize($_POST['firdayaft']) : '';
    $firdayeve = isset($_POST['firdayeve']) ? serialize($_POST['firdayeve']) : '';
    $firdaycooldrink = isset($_POST['firdaycooldrink']) ? serialize($_POST['firdaycooldrink']) : '';
    $firdaysnack = isset($_POST['firdaysnack']) ? serialize($_POST['firdaysnack']) : '';
    $firdaydinner = isset($_POST['firdaydinner']) ? serialize($_POST['firdaydinner']) : '';
    $secdaymor = isset($_POST['secdaymor']) ? serialize($_POST['secdaymor']) : '';
    $secdayafter = isset($_POST['secdayafter']) ? serialize($_POST['secdayafter']) : '';
    $secdayeve = isset($_POST['secdayeve']) ? serialize($_POST['secdayeve']) : '';
    $secdaydinner = isset($_POST['secdaydinner']) ? serialize($_POST['secdaydinner']) : '';
    $guestfood = isset($_POST['guestfood']) ? serialize($_POST['guestfood']) : '';
    $packetfood = isset($_POST['packetfood']) ? serialize($_POST['packetfood']) : '';


    $query = "INSERT INTO order_details VALUES (null, '$uname', '$unumber', '$uemail', '$ucity', '$usdate', '$uedate', '$upartydetails', '$uhalldetails', '$malaifirday', '$wedmalaiset', '$kasiyathiraiset', '$samangalset', '$wedplateset', '$toiletset', '$vedicset', '$carrybag', '$carrybagcou', '$carrybagweat', '$carrybagsweatcou', '$carrybagcookie', '$carrybagcookiecou', '$firdaymor', '$firdaymorcou', ' $firdayaft', '$firdayaftcou', '$firdayeve', '$firdayevecou', '$firdaycooldrink', '$firdaycooldrinkcou', '$firdaysnack', '$firdaysnackcou', '$firdaydinner', '$firdaydinnercou', '$secdaymor', '$secdaymorcou', ' $secdayafter', '$secdayaftercou', '$secdayeve', '$secdayevecou', '$secdaydinner', '$secdaydinnercou', '$guestfood', '$guestfoodcou', '$packetfood', '$packetfoodcou')";
    
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