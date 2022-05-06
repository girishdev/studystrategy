<?php

    // echo gethostname(); exit; 
    // error_reporting(0);
    // mysqli_report(MYSQLI_REPORT_OFF);

    $Host = '127.0.0.1';
    // $Host = 'http://192.168.1.3';
    // $Host = gethostname();
    $DB_Username = 'study';
    $DB_Password = 'study123';
    $Database = 'studystrategy';
    $db = new mysqli($Host,$DB_Username,$DB_Password,$Database);
    if($db->connect_errno){
        echo 'Error: ' . $db->connect_error;
        die();
    }

?>