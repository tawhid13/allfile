<?php 

  $con = mysqli_connect('localhost', 'root', '', 'college');
  $teachers = $con->query('select * from teachers');

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
    <h1> all teachers</h1>
    
    <table class="table table-bordered">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Action</th>
      </tr>
      <?php while($teacher = $teachers->fetch_object()): ?>
        <tr>
          <td><?= $teacher->id ?></td>
          <td><?= $teacher->name ?></td>
          <td><?= $teacher->email ?></td>
          <td>
           <a class="btn btn-info" href="edit.php?id=<?= $teacher->id ?>">edit</a> 
           <a class="btn btn-danger" href="delete.php?id=<?= $teacher->id ?>">delete</a>
          </td>

        </tr>
      <?php endwhile; ?>
    </table>
  </div>

  
</body>
</html>