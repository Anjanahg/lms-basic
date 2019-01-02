<?php
     include 'connection.php'; 


    $bookId = (int)($_POST["bookid"]);


    // sql to delete a record
    $sql_update = "UPDATE book SET isavailable='0' WHERE id=$bookId";

    $res=mysqli_query($connection, $sql_update);
            
                if($res)
                    {
                        echo "<script type='text/javascript'>alert('Successfuly reserved');</script>";
                       
        
                    }
                else
                    {
                        echo "<script type='text/javascript'>alert('There is some problem in reserving');</script>";

                        
                    }

    $connection->close();
    header("Location: http://localhost/lesson1/userbooks.php");
    exit;


?>
