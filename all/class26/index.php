<?php 
if (isset ($_POST['name']) && isset ($_POST['email']) && isset ($_POST['address'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $con = mysqli_connect('localhost','root','','college');
    $con->query("insert into students(name,email,address) values('$name', '$email', '$address' )");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

</head>
<body class="bg-info">
    <div class="container">
    <?php require 'nav.php'; ?>
    <div class="card mt-5">
    <div class="card-header">
    <h1>add student</h1>
    </div>
    <div class="card-body">
    <form action="" method="post">
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" class="form-control">
    </div>
    <div class="form-group">
    <button class="btn btn-info" type="submit">add student</button>
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>