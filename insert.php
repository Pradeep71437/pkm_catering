<?php
include 'admin/db_connection.php';

if(isset($_POST['submit'])) {
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

    // Check if the checkboxes are set before serializing
    $malaifirday = isset($_POST['malaifirday']) ? serialize($_POST['malaifirday']) : '';
    $wedmalaiset = isset($_POST['wedmalaiset']) ? serialize($_POST['wedmalaiset']) : '';
    $kasiyathiraiset = isset($_POST['kasiyathiraiset']) ? serialize($_POST['kasiyathiraiset']) : '';
    $samangalset = isset($_POST['samangalset']) ? serialize($_POST['samangalset']) : '';
    $wedplateset = isset($_POST['wedplateset']) ? serialize($_POST['wedplateset']) : '';
    $toiletset = isset($_POST['toiletset']) ? serialize($_POST['toiletset']) : '';
    $vedicset = isset($_POST['vedicset']) ? serialize($_POST['vedicset']) : '';
    // long data with count
    //1.d.ayfirafter
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
    
    

    $query = "INSERT INTO order_details VALUES (null, '$uname', '$unumber', '$uemail', '$ucity', '$usdate', '$uedate', '$upartydetails', '$uhalldetails', '$malaifirday', '$wedmalaiset', '$kasiyathiraiset', '$samangalset', '$wedplateset', '$toiletset', '$vedicset', '$carrybag', '$carrybagcou', '$carrybagweat', '$carrybagsweatcou', '$carrybagcookie', '$carrybagcookiecou', '$firdaymor', '$firdaymorcou', '$firdayaftcou', '$firdayeve', '$firdayevecou', '$firdaydrink', '$firdaycooldrinkcou', '$firdaysnack', '$firdaysnackcou', '$firdaydinner', '$firdaydinnercou', '$secdaymor', '$secdaymorcou', '$secdayaftercou', '$secdayeve', '$secdayevecou', '$secdaydinner', '$secdaydinnercou', '$guestfood', '$guestfoodcou', '$packetfood', '$packetfoodcou', '$firdayaft' ,'$secdayaft')";
    
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "<script type='text/javascript'>
              alert('Order submitted successfully...'); 
              window.location.href = 'book.html';
              </script>";
    } else {
        echo "<script type='text/javascript'>
              alert('Error... Please try again.'); 
              window.location.href = 'book.html';
              </script>";
    }
}

mysqli_close($conn);
?>