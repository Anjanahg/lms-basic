<?php

    //logout process destroy the loged in session
    session_start();
    session_unset();
    session_destroy();
    
    //Redirect to Index page
    header("Location: http://localhost/lesson1/index.php"); 
    exit();

?>