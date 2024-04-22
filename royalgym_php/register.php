<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign-UP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/registerutil.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/register.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="GET" enctype="multipart/form-data">
                        <a href="index.html" >Royal Gym</a>
                        <?php echo @$msg; ?>
								<br><br> 
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="First Name is required">
							<span class="label-input100">First Name</span>
							<input class="input100" type="text" name="firstname" placeholder="First Name...">
							<span class="focus-input100"></span>
						</div>

					<div class="wrap-input100 validate-input" data-validate="Last Name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lastname" placeholder="Last Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Moblie Number is required">
						<span class="label-input100">Mobile Number</span>
						<input class="input100" type="number" name="phn" placeholder="Phone Number...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Gender is required">
						<span class="label-input100">Select Your Gender</span><br>
							Male<input type="radio" name="g" value="m"/>
							Female<input type="radio" name="g" value="f"/>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "DOB is required">
                        <span class="label-input100">Select your DOB</span>
                        <br>
                        <select name="dd">
								<option value="">Date</option>
								<?php 
								for($i=1;$i<=31;$i++)
								{
								echo "<option value='$i'>".$i."</option>";
								}
								?>
                            </select>
                            
						<select name="mm">
								<option value="">Month</option>
								<?php 
								for($i=1;$i<=12;$i++)
								{
								echo "<option value='$i'>".$i."</option>";
								}
								?>
							</select>
							
							<select name="yy">
								<option value="">Year</option>
								<?php 
								for($i=2019;$i>=1900;$i--)
								{
								echo "<option value='$i'>".$i."</option>";
								}
								?>
							</select>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Address is required">
						<span class="label-input100">Address</span><br>
                        <textarea name="address"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
										Terms & Conditions!
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>

						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Login
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/register.js"></script>

<?php
 $db = mysqli_connect('localhost','root','','royalgym')
 or die('Error connecting to MySQL server.');

 $firstname=$db->real_escape_string($_REQUEST["firstname"]);
$lastname=$db->real_escape_string($_REQUEST["lastname"]);
 $email=$db->real_escape_string($_REQUEST["email"]);
 $phone=$db->real_escape_string($_REQUEST["phn"]);
 $gender=$db->real_escape_string($_REQUEST["g"]);
 $password=$db->real_escape_string($_REQUEST["password"]);
 $address=$db->real_escape_string($_REQUEST["address"]);
$yy=$db->real_escape_string($_REQUEST["yy"]);  $mm=$db->real_escape_string($_REQUEST["mm"]);  $dd=$db->real_escape_string($_REQUEST["dd"]); 
 $dob=$yy."/".$mm."/".$dd;
$sql=mysqli_query($db,"select email from accounts where email='$email'");
$return=mysqli_num_rows($sql);
if($return)
{
    echo '<script type="text/javascript">
   alert("Email Already Exist! Try Again with new Email"); 
   </script>';
}
else
{
$query="insert into accounts values('','$firstname','$lastname','$email','$password','$phone', '$gender','$dob','$address',now())";
mysqli_query($db,$query);

echo '<script type="text/javascript">
   confirm("Successfully Registered! Please Login"); 
   </script>';

}

?>
</body>
</html>