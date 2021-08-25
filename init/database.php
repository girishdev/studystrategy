<?php

    $Host = '127.0.0.1';
    $DB_Username = 'root';
    $DB_Password = '';
    $Database = 'studystrategy';
    $db = new mysqli($Host,$DB_Username,$DB_Password,$Database);
    if($db->connect_errno){
        echo 'Error: ' . $db->connect_error;
        die();
    }

?>