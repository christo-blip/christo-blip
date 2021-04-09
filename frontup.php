<?php include 'database.php'?>

<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-3">
<h1 class="text-center mb-5">UPLOAD THE COURSE VIDEO</h1>
<div class="col-lg-12 m-auto">

<Table width="100%">
<form action="frontup.php" method="POST" enctype="multipart/form-data">

<tr>
<td align="center"><strong>session-name</strong></td>
<td><input type="text" class="form-control" name="n1" id="t1"></td>
</tr>

<tr>
<td><br></td>
</tr>

<tr>
<td align="center"> <strong>Batch </strong></td>
<td><input type="text" class="form-control" name="n2" id="t2"></td>
</tr>

<tr>
<td><br></td>
</tr>

<tr>
<td colspan="6" align="center">

<?php if (!empty($msg)):?>
<div class="alert<?php echo $css_class;?>">
  <?php echo $msg;?>
</div>
  <?php endif; ?>

</td>
</tr>

<tr>
<td><br></td>
</tr>

<tr>
<div class="form-group">
<td align="center"><label><strong> upload a Video</strong></label></td>
<td><input type="file" name="file" class="form-control"></td>
</div>
</td>
</tr>

<tr>
<td><br></td>
</tr>

<tr>
<td colspan="4" align="center">
<input type="submit" name="upload" value="upload" class="btn btn-success ml-3">
</td>
</tr>
</form>
</div>
</table>

</div>
<br>
<br>
<div class="text-center">
<button class="btn btn-success ml-3"><a href="http://localhost/upload side/backup.php">display page</a>
</button>
</div>
</body>
</html>
 








