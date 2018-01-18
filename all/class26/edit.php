<?php 
$id = $_GET['id'];
$con= mysqli_connect('localhost','root','','college');
if (isset ($_POST['name']) && isset ($_POST['email']) && isset ($_POST['address'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $con = mysqli_connect('localhost','root','','college');
    $con->query("update students set name='$name', email='$email', address='$address' where id=$id");
}
$students = $con->query("select * from students where id=$id");
$student = $students->fetch_object();
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
<body class="bg-info">
    <div class="container">
    <?php require 'nav.php'; ?>
    <div class="card mt-5">
    <div class="card-header">
    <h1>Edit student</h1>
    </div>
    <div class="card-body">
    <form action="" method="post">
    <div class="form-group">
    <label for="name">Name</label>
    <input value="<?php echo $student->name ?>" type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input value="<?php echo $student->email ?>" type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input value="<?php echo $student->address ?>" type="text" name="address" id="address" class="form-control">
    </div>
    <div class="form-group">
    <button class="btn btn-info" type="submit">Update student</button>
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>