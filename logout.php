<?php
include('assets/core/connection.php');
session_unset();
session_destroy();
echo "<script>window.location='index';</script>";
?>
