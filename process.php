<?php
include("db.php");


if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$sql=$conn->query("DELETE FROM users WHERE uid=$id");
	echo '<div class="alert alert-danger">data deleted successfully</div>';
	header("location:admin.php");
}



?>