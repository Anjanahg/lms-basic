<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'library_system';

    // Creating Connection
    $connection = new mysqli($dbhost, $dbuser ,$dbpass, $dbname );


    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>
