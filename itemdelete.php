<?php
     include 'connection.php'; 


    $bookId = (int)($_POST["bookid"]);


    // sql to delete a record
    $sql_delete = "DELETE FROM book WHERE id =$bookId";

    $res=mysqli_query($connection, $sql_delete);
            
                if($res)
                    {
                        echo "<script type='text/javascript'>alert('Record successfully Deleted');</script>";
                       
        
                    }
                else
                    {
                        echo "<script type='text/javascript'>alert('There is some problem in deleting record');</script>";

                        
                    }

    $connection->close();
    header("Location: http://localhost/lesson1/delete.php");
    exit;


?>
