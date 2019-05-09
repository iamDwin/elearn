<?php

    // Declare two dates
    $start_date = strtotime(date("Y-m-d"));
    $end_date = strtotime("2019-05-07");

    // Get the difference and divide into
    // total no. seconds 60/60/24 to get
    // number of days
    $datdif =  ($end_date - $start_date)/60/60/24;

    if($datdif == 0){
        echo "Due Date is Today";
    }elseif($datdif < 0){
        echo "Date is past.";
    }else{
        echo "Difference between two dates: " .$datdif." Day(s) more";
    }

?>
