<?php 
$con = mysqli_connect('localhost','root','','college');
$students = $con->query('select * from students');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table,tr,td,th{ 
        border: 1px solid #333;
        border-collapse: collapse;


    }
    td, th {
        padding: 10px;
    }
    tr:nth-child(odd) {
        background: #333;
        color: white;
      }
    
    
    </style>
</head>
<body>
<h1>showig table from php</h1>
    <table>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    </tr>
    <?php while($student = $students->fetch_object()): ?>
    <tr>
    <td><?php echo $student->id?> </td>
    <td><?php echo $student->name?> </td>
    <td><?php echo $student->email?> </td>
    </tr>
<?php endwhile; ?>
    </table>
</body>
</html>