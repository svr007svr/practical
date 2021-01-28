<?php
include("db.php");
if(isset($_POST["login"])){
	$email = $_POST["email"];
	$pwd   = $_POST["pwd"];
	 $pwd   = hash("sha1",$pwd);
	$sql = "select * from users where email='$email'";
	$result = $conn -> query($sql);
	$row=$result->fetch_assoc();
	if($row["email"] == NULL){
		echo "<div class='alert alert-danger'>You are not registered with this Email id</div>";
	}
	elseif($row['pwd']!= $pwd){
		echo "<div class='alert alert-danger'>wrong password !!</div>".$pwd;
	}
	elseif($email == $row["email"] && $pwd == $row["pwd"]){
		if($row['role']=='admin'){
			setcookie("uid",$row['uid']);
			header('Location:admin.php');
		}else{
		setcookie("uid",$row["uid"]);
		header("Location:index.php");
		}
	}
	
}

?>