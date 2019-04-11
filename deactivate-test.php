<?php
include 'assets/core/connection.php';

if(isset($_GET['tid'])){
    $tid = $_GET['tid'];
    $cid = $_GET['cid'];
}

//update test row..
$deactivate = update("UPDATE test SET status='' WHERE testID='$tid'");
if($deactivate){
        echo "<script>alert('TEST DEACTIVATED.!');window.location.href='set-test?cid=$cid';</script>";
//     header("Location:". $_SESSION['current_page']);
}else{
    echo "<script>alert('TEST DEACTIVATION FAILED.');window.location.href='set-test?cid=$cid';</script>";
//     header("Location:". $_SESSION['current_page']);
}

?>
