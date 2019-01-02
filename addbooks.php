<!--includes the connection string-->
<?php 
    include 'connection.php'; 
    session_start();//start a new session or resume if exsist.
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Books</title>
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



    <!--Book adding form-->
    <form class="form-horizontal" method="POST" name="addbook">
        <fieldset>

            <!-- Form Name -->
            <legend class="align-center">ADD BOOKS</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Book Name</label>
                <div class="col-md-4">
                    <input id="textinput" name="bookName" type="text" placeholder="Book Name" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="author">Author</label>
                <div class="col-md-4">
                    <input id="author" name="author" type="text" placeholder="Author" class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group align-center">
                <label class="col-md-4 control-label" for="add"></label>
                <div class="col-md-4">
                    <button id="add" name="add" class="btn btn-success">ADD</button>
                </div>
            </div>

        </fieldset>
    </form>



</body>

</html>

<?php

//check the button is clicked
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //getting data from feilds
    $bookName=$_POST['bookName'];
    $author=$_POST['author'];
   
    
    


        if($bookName=='' || $author=='')
        {

            echo "<script type='text/javascript'>alert('Please fill the empty feilds.');</script>";
        }
        else
        {   
            
            //sql insert query
            $sql="INSERT INTO book(bookname,author,isavailable)
            values( '$bookName','$author','1')";


            $res=mysqli_query($connection, $sql);
            
                if($res)
                    {
                        echo "<script type='text/javascript'>alert('Record successfully inserted');</script>";
                        exit();
            

                    }
                else
                    {
                        echo "<script type='text/javascript'>alert('There is some problem in inserting record');</script>";

                        
                    }

        }
}
?>