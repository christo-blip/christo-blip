<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-3 mb-3">
<h1 align=center><b>ALL COURSE VIDEOS</b></h1>
<BR>
<hr>
<a href ="frontup.php" class="btn btn-primary mt-3">upload a New video</a>
<br>
<div class="row">
<br>
<hr>
<?php
include 'database.php';

$q="SELECT *FROM class";

$query = mysqli_query($conn,$q);

While($row=mysqli_fetch_array($query)) {
$class = $row['class'];
$session_name = $row['session_name'];
$Batch= $row['Batch'];
?>
<div class="col-md-4">
<video id="myvideo" width="100%" title="YouTube video player" controls>
<source src="<?php echo 'upload/' .$class;?>">
</video>
<?php echo $session_name;?>
<?php echo '<br>'?>
<?php echo $Batch?>
<?php echo '<hr>'?>
</div>

<?php } ?>
</div>



</div>


<div>
<a href="http://localhost/upload side/frontup.php">upload page</a>
</div>
</body>
</html>





