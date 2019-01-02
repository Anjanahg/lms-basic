<!--includes the connection string-->
<?php
    session_start();  //start a new session or resume if exsist.
    include 'connection.php';
  ?>




<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>

<br><br><br><br>
<form class="form-horizontal" method="POST" name="login">
	<fieldset>

		<!-- Form Name -->
		<legend class="align-center" >Login</legend>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="fname">Email</label>  
			<div class="col-md-4">
				<input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
			
			</div>
		</div>

		<!-- Password input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="password">Password </label>
			<div class="col-md-4">
				<input id="password" name="password" type="password" placeholder="Password " class="form-control input-md">
			
			</div>
		</div>

		

		<!-- Button sign in -->
		<div class="form-group align-center">
  			<label class="col-md-4 control-label" for="submit"></label>
  			<div class="col-md-4">
			  <input type="submit" class="btn btn-success" value = "Sign In" name="submit">

  			</div>
        </div>
        
        <!-- register -->
		<div class="form-group align-center">
  			
              <a class="btn btn-danger" href="register.php">Register</a>

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
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		


			if( $email==''||$password=='')
			{

				echo "<script type='text/javascript'>alert('Please fill the empty feilds.');</script>";
			}
			else
			{   

				//sql select query
				$sql_login="SELECT * FROM user WHERE email = '$email' AND password = '$password'";
              
                //executing the query 
                $res=mysqli_query($connection, $sql_login);

                //checking the availability. "num_row" is an atribute of the responce
                if($res->num_rows){

                    //if  there is a matching row, then fetch it.
                    $row=$res->fetch_row();
                    //print_r($row);
                    

                    //adding email and user type to the session. email exsists in the 8th index of the array and user type is on 5th
                    $_SESSION['email']=$row[7];
                    $_SESSION['isAdmin']=$row[4];

                    //Redirect to index
							header("Location: http://localhost/lesson1/index.php"); 
							exit();
                   
                }else{

                    //alert for invalid creditial.
                    echo "<script type='text/javascript'>alert('Invalid credintials');</script>";
                }
                

			}
	}
?>