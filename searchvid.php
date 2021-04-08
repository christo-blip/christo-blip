<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>


<?php  

$conn= mysqli_connect('localhost','root','','video-upload');


 
$Batch=$_POST['Batch'];
$conn = mysqli_connect("localhost","root","","video-upload");
$q= "SELECT class,session_name,Batch FROM class WHERE Batch in('$Batch')";
$query=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($query)) {
    $class = $row['class'];
   $session_name = $row['session_name'];
     $Batch = $row['Batch'];
?> 
        <div class="col-md-4">
<video width="100%" controls>
        <source src="<?php echo  $class;?>" >
        </video>
        <?php echo $session_name;?>
        <?php echo '<br>'?>
        <?php echo $Batch;?>
        <?php echo '<hr>'?>

        
</div>

        
        <?php } ?>



</body>
</html>











