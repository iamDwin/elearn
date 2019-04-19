<?php
include('assets/core/connection.php');
//set offline status
$updateonline = update("UPDATE users SET onlinestatus='0' WHERE userID='".$_SESSION['userID']."'");
if($updateonline){
    session_unset();
    session_destroy();
    echo "<script>window.location='index';</script>";
}
?>
