<?php 
$con= mysqli_connect('localhost','root','','college');
$con->query("delete from students where id=2" );