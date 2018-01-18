<?php 
$con= mysqli_connect('localhost','root','','college');
$con->query("update students set name='Dr.yesmin' where id=3"  );