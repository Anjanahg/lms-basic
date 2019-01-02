<!--includes the connection string-->
<?php include 'connection.php'; ?>




<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>

        <br><br><br><br>
		<form class="form-horizontal" method="POST" name="register">
			<fieldset>

				<!-- Form Name -->
				<legend class="align-center" >REGISTER FORM</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="fname">First Name</label>  
					<div class="col-md-4">
						<input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md">
					
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="lname">Last Name</label>  
					<div class="col-md-4">
						<input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md">
					
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="email">Email</label>  
					<div class="col-md-4">
						<input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
					
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="address">Home Address</label>  
					<div class="col-md-4">
						<input id="address" name="address" type="text" placeholder="Address" class="form-control input-md">
					
					</div>
				</div>


				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="phone">Phone</label>  
					<div class="col-md-4">
						<input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md">
					
					</div>
				</div>


				<!-- Password input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="password">Password </label>
					<div class="col-md-4">
						<input id="password" name="password" type="password" placeholder="Password " class="form-control input-md">
					
					</div>
				</div>


				<!-- Button -->
				<div class="form-group align-center">
					<label class="col-md-4 control-label" for="submit"></label>
					<div class="col-md-4">
					<input type="submit" class="btn btn-primary" value = "submit" name="submit">

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
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		
		


			if($fname=='' || $lname=='' || $email==''|| $address==''|| $phone==''|| $password=='')
			{

				echo "<script type='text/javascript'>alert('Please fill the empty feilds.');</script>";
			}
			else
			{   

				//sql insert query
				$sql="INSERT INTO user(fname,lname,email,address,phone,password)
				values( '$fname','$lname','$email','$address','$phone','$password')";


				$res=mysqli_query($connection, $sql);
					if($res)
						{
							echo "<script type='text/javascript'>alert('Record successfully inserted');</script>";

					
							//Redirect to login
							header("Location: http://localhost/lesson1/login.php"); 
							exit();

						}
					else
						{
							echo "<script type='text/javascript'>alert('There is some problem in inserting record');</script>";

                            
						}

			}
	}
?>