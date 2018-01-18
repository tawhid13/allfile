<?php 
$con = mysqli_connect('localhost','root','','college');
$students= $con->query("select * from students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
   <div class="container">
   <?php require 'nav.php' ; ?>
   <h1>All students form</h1>
   <table class="table table-bordered">
   <tr>
   <th>Id</th>
   <th>Name</th>
   <th>Email</th>
   <th>Address</th>
   <th>Action</th>
   </tr>
   <?php while ($student=$students->fetch_object()): ?>
   <tr>
   <td><?php echo $student->id ?> </td>
   <td><?php echo $student->name ?> </td>
   <td><?php echo $student->email ?> </td>
   <td><?php echo $student->address ?> </td>
   <td>
   <a href="edit.php?id=<?php echo $student->id ?>" class="btn btn-success">edit</a> | 
   <a href="delete.php?id=<?php echo $student->id ?>" class="btn btn-danger">delete</a>
   
   </td>
   </tr>
   <?php endwhile ; ?>
   </table> 
   
   </div> 
</body>
</html>
