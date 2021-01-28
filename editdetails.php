





<?php

include('db.php');

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
    $sql= "select fname,lname,mob,email FROM users WHERE uid=$id";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
//	header("location:admin.php");
}

?>







<html>
<head>
<title>
Edit Details
</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
<h1 align="center">Edit Details</h1><br>
<div class="container" align="center">
<form method="post">
<div class="oi">
		<div class="outer">
		<label for="name" >First Name</label>
		</div>
		<div class="inner">
		<input type="text" name="fname" id="fname"  value='<?php echo $row['fname'];?>' placeholder="Enter your first name" required="true">
		</div>
</div>
<div class="oi">
		<div class="outer">
		<label for="name">Last Name</label>
		</div>
		<div class="inner">
		<input type="text" name="lname" id="lname" value='<?php echo $row['lname'];?>' placeholder="Enter your last name" required="true">
		</div>
</div>
<div class="oi">
		<div class="outer">
		<label for="name">Mobile Number</label>
		</div>
		<div class="inner">
		<input type="text" name="mob" id="mob" placeholder="Enter your mobile number" value='<?php echo $row['mob'];?>'  required="true">
		</div>
</div>
<div class="oi">
		<div class="outer">
		<label for="name">Email Id</label>
		</div>
		<div class="inner">
		<input type="text" name="email" id="email" placeholder="Enter your email" value='<?php echo $row['email'];?>' required="true">
		</div>
</div>
<br>

<input type='submit' name='update' value='update' class='btn btn-success'>

</div>
</body>
</html>

<?php

if(isset($_POST['update'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mob  = $_POST['mob'];
$email = $_POST['email'];


$stmt =$conn->prepare( "update users set fname='$fname',lname='$lname',mob='$mob',email='$email' where uid=$id");
$data = $stmt->execute();
header("location:admin.php");
if($data){
    echo '<div class="alert atert-success">Records updated successfully</div>';
}else{
    echo '<div class="alert alert-danger">Records not updated</div>';
}
}

?>