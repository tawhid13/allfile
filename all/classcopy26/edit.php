<?php 
$id = $_GET['id'];

$con = mysqli_connect('localhost', 'root', '', 'college');

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $con = mysqli_connect('localhost', 'root', '', 'college');
  $con->query("update teachers set name='$name', email='$email' where id=$id");
}
$teachers = $con->query("select * from teachers where id=$id");
$teacher = $teachers->fetch_object();

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2>update teachers</h2>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
              <label for="name">Name</label>
              <input value="<?= $teacher->name ?>" type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input value="<?= $teacher->email ?>"  type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-outline-info" type="submit">update teacher</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>