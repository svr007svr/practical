<?php
include("db.php");
if(isset($_COOKIE['uid']))
{
	header("Location:index.php");
}
elseif(isset($_COOKIE['admin']))
{
	header("Location:admin.php");
}
elseif(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mob   = $_POST['mob'];
	$email = $_POST['email'];
	$pwd   = $_POST['pwd'];
	$pwd   = hash('sha1',$pwd);
	
	
	function valid_email($email)
	{
		$check_email = 0;
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$check_email = 1;
		}
		return $check_email;
	}

	function valid_mob($mob)
	{
		$check_mob = 0;
		if(preg_match('/^[0-9]{10}+$/',$mob))
			{
				$check_mob = 1;
			}
			return $check_mob;
	}
	
	$check_email = valid_email($email);
	$check_mob = valid_mob($mob);
	
	if($check_email == 1  && $check_mob == 1)
	{
		
		$sql = "SELECT email,mob FROM users WHERE email='$email' OR mob='$mob'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		if($row == NULL){
			$stmt = $conn -> prepare("insert into users(fname,lname,mob,email,pwd) values ('".$fname."','".$lname."','".$mob."','".$email."','".$pwd."')");
			$stmt -> execute();
			echo '<div class="alert alert-success">Registration successfully...</div>';
			header("Location:login.php");
		}
		elseif($row['email'] == $email && $row['mob']==$mob){
			echo '<div class="alert alert-danger">Already Registered...</div>';
		}
		elseif($row['email']==$email){
			echo '<div class="alert alert-div">Email already Registred...</div>';
		}
		elseif($row[mob]==$mob){
			echo '<div class="alert alert-danger">mobile no. already registered</div>';
		}
	}
		elseif($check_email == 0  && $check_mob == 0){
			echo '<div class="alert alert-danger">please enter valid mobile no. and email</div>';
		}
		elseif($check_email == 0){
			echo '<div class="alert alert-danger">please enter valid email</div>';
		}
		elseif($check_mob == 0){
			echo '<div class="alert alert-danger">please enter valid mobile number</div>';
		}
}
else{
	header("Location:login.php");
}

	
?>