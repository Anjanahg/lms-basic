<?php

    session_start();//start a new session or resume if exsist.


    // check the session
    if(isset($_SESSION['email']))
    
    {
        echo "Welcome ".$_SESSION['email'];
        echo "Welcome ".$_SESSION['id'];

        //check is admin true
        if($_SESSION['isAdmin']==1){

            // if he login as admin
            header("Location: http://localhost/lesson1/adminhome.php");
            exit;
        
        }else{

            // if he login as normal user
            header("Location: http://localhost/lesson1/home.php");
            exit;
            
        }
        
    }
    else
    {   
        // if no user redirect to login.php
        header("Location: http://localhost/lesson1/login.php");
        exit;
        
    }

?>

<?php 

?>