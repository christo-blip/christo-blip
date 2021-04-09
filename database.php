<?php
$msg="";
$css_class="";

$conn =mysqli_connect('localhost','root','','video-upload');


if(isset($_POST['upload'])) {
 echo"<pre>", print_r($_FILES['file']['name']), "</pre>";
 
$session_name=$_POST['n1'];
$Batch=$_POST['n2'];
$className = time() .'_' . $_FILES['file']['name'];


$target='upload/' . $className;  

 if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
$sql="INSERT INTO class(class,session_name,Batch) VALUES('$className','$session_name','$Batch')";
if (mysqli_query($conn, $sql)) {

    $msg="video uploaded and saved to database";
    $css_class ="alert-success";

}else{
    $msg="database Error: Failed to save in database";
    $css_class ="alert-danger";

}


   
 }else {

    $msg="uploded to be failed";
   $css_class ="alert-danger";
    
 }
    

}
