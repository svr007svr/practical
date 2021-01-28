<?php
if(isset($_COOKIE["uid"]))
{
	header("Location:index.php");
}
elseif(isset($_COOKIE["admin"]))
{
	header("Location:admin.php");
}
elseif(isset($_POST["submit"]))
{
	include("reguser.php");
}
?>



<html>
<head>
<title>registraion form </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.btn{
	width : 50%;
}
#fname,#lname,#email,#pwd,#mob{
	width : 50%;
}
label{
	padding : 6px,6px,6px,0;
	display : inline-block;
}
</style>



</head>
<body>
<h1 align="center">Sign In</h1><br>
<div class="container" align="center">
<form method="post">
<div class="oi">
		<div class="outer">
		<label for="name" >First Name</label>
		</div>
		<div class="inner">
		<input type="text" name="fname" id="fname"  placeholder="Enter your first name" required="true">
		</div>
</div>
<div class="oi">
		<div class="outer">
		<label for="name">Last Name</label>
		</div>
		<div class="inner">
		<input type="text" name="lname" id="lname"  placeholder="Enter your last name" required="true">
		</div>
</div>
<div class="oi">
		<div class="outer">
		<label for="name">Mobile Number</label>
		</div>
		<div class="inner">
		<input type="text" name="mob" id="mob" placeholder="Enter your mobile number"  required="true">
		</div>
</div>
<div class="oi">
		<div class="outer">
		<label for="name">Email Id</label>
		</div>
		<div class="inner">
		<input type="text" name="email" id="email" placeholder="Enter your email"  required="true">
		</div>
</div>
<div class="oi">
		<div class="outer">
		<label for="name">Password</label>
		</div>
		<div class="inner">
		<input type="password" name="pwd" id="pwd" placeholder="Enter your password"  required="true">
		</div>
</div>
<br>
		<div class="oi" align="center">
			<input type="submit" name="submit" value="submit" class="btn btn-success" >
		</div>
		<h6 font-color='red'>OR</h6>
		<a href='login.php' class='btn btn-success'>Login</a>
</form>
</div>



</body>
</html>