<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$con = mysqli_connect('localhost','root','','college');
$con->query("insert into teachers(name,email) values('$name','$email')"

);
header("Location:create.php");