<!--includes the connection string-->
<?php 
    include 'connection.php'; 
    session_start();//start a new session or resume if exsist.
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>



    <!--navigation bar-->
    <div class="w3-bar w3-light-grey">
        <a href="adminhome.php" class="w3-bar-item w3-button">Home</a>
        <a href="available.php" class="w3-bar-item w3-button">Available books</a>
        <a href="reserved.php" class="w3-bar-item w3-button">Reserved Books</a>
        <a href="addbooks.php" class="w3-bar-item w3-button">Add Books</a>
        <a href="delete.php" class="w3-bar-item w3-button">Delete books</a>
        <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
</body>
</html>

<!--getting data from db -->
<?php
    

            //sql select query for available books
            $sql_get_available="SELECT * FROM book WHERE isavailable = '1' ";
          
            //executing the query 
            $res=mysqli_query($connection, $sql_get_available);

            //checking the availability. "num_row" is an atribute of the responce


            
            if($res->num_rows){


                echo "
                <br>
                <br>
                <br>
                <div class=' container'>
                    <div class='col-md-12 '>
                        <table class='table' border='1'>
                            <thead class='thead-dark'>
                                <tr>
    
                                    <th scope='col'>Book Name</th>
                                    <th scope='col'>Author</th>
                                    <th scope='col'>Delete</th>
                
                                 </tr>
                            </thead>";

                        while($row = $res->fetch_assoc())
                            {
                                echo "<tr>";
                                echo "<td>" . $row['bookname'] . "</td>";
                                echo "<td>" . $row['author'] . "</td>";
                                echo "  <td>
                                            <form action='itemdelete.php' method='post' align='center'>
                                                <input type='hidden' id='bookid' name='bookid' value=".$row['id']."/>
                                                <input type='submit' class='btn btn-danger' value = 'DELETE' name='submit'>
                                            </form>
                                                
                                    
                                        </td>";
                                echo "</tr>";
                            }
                echo "
                        </table>
                    </div>
                </div>";
              
                
            }else{
                echo "<br>
                      <br>
                      <br>
                          <h1>No books Available</h1>";
            }   
            
            

        

?>