<?php 
$con = mysqli_connect('localhost','root','','college');
$con->query(
    "create table students(
        id int(11) auto_increment primary key,
        name varchar(30) not null,
        email varchar(35) not null,
        address text
        )"
);