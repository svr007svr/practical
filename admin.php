<?php
include("db.php");

?>
<html>
<head>
<title>Admin</title>
<style>
.success
{
	text-align:center;
	color:darkgreen;
}
thead{
    margin:30px;
}
.alert
{
	text-align:center;
	color:darkred;
}
</style>


<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</head>
<body>
<fieldset style="background-color:yellow;">
<table align="center">
<tr>
<td><font size="25">Welcome To Admin Panel</font></td>
</tr>
</table>
</fieldset>
<div class=containet>
<center><a href='logout.php' class='btn btn-danger float-right'>Logout</a></center>
</div>
<?php
 $sql = 'select * from users';
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
?>

<div class='container'>
<div class='row justify-content-center'>

<table class='table'>
<thead>
<tr>

<th >First Name </th>
<th >First Name </th>
<th >Email </th>
<th >Mobile no.</th>
<th colspan='2' >Action<th>

</tr>
</thead>
<?php
// $sql = 'select * from users';
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
while($row = $result->fetch_assoc()):
?>
<tr>
<td><?php echo $row['fname'];  ?></td>
<td><?php echo $row['lname'];  ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mob']; ?></td>
<td>
<a href='editdetails.php?edit=<?php echo $row['uid'];?>' class='btn btn-sm btn-info'>Edit</a>
<a href='process.php?delete=<?php echo $row['uid']; ?>' class='btn btn-sm btn-danger'>Delete</a>
</td>
</tr>
<?php echo '<br>'; ?>
 
<?php endwhile;?>
</table>
</div>
</div>

<?php

$sql = 'select * from users';
$result = $conn->query($sql);
$row = $result->fetch_assoc();




?>





</body>
</html>