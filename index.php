
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  
  
</head>



<body>
<h1 align='center' class='bg-success'>Welcome...</h1><br>
<?php require_once "process.php";?>
<?php
include('db.php');
$sql = "select * from users where uid = ".$_COOKIE["uid"]."";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<div class='i1' align='center'>
<h3>welcome <?php echo $row['fname'];?></h3>
</div>
<br>

<center><a href='logout.php' class='btn btn-danger'>Logout</a></center>


<script>



</script>
</body>

</html>