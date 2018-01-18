<?php 
$con = mysqli_connect('localhost','root','','college');
$con->query("insert into students(name,email) values('ikbal','ikb@gmail.com')");
$con->query("insert into students(name,email) values('tahmi','tahmi@gmail.com')");
$con->query("insert into students(name,email) values('sakib','saki@gmail.com')");
$con->query("insert into students(name,email) values('Rakib','raki@gmail.com')");
$con->query("insert into students(name,email) values('sumon','sumon@gmail.com')");
$con->query("insert into students(name,email) values('kazi','kazi@gmail.com')");
$con->query("insert into students(name,email) values('Nill','nill@gmail.com')");

