<!--includes the connection string-->
<?php 
    include 'connection.php'; 
    session_start();//start a new session or resume if exsist.
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
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
        <a href="home.php" class="w3-bar-item w3-button">Home</a>
        <a href="userbooks.php" class="w3-bar-item w3-button">Available books</a>
        <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
        
    </div>


      <div class="container ">
          <br><br><br>
          <div>
                <h1 align="center">Welcome to Library Management System</h1>
          </div>
         
     </div>

</body>

</html>