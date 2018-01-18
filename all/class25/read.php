<?php
$con = mysqli_connect('localhost','root','','college');
$teachers = $con->query("select * from teachers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td {
        border:2px solid #ccc;
        border-collapse: collapse;
    }
    th, td {
        padding:10px;
    }
    tr:nth-child(even){
        background: teal;
        color: #fff;
    }
    tr:nth-child(odd){
        background: salmon;
        color:#fff;
    }
    </style>
</head>
<body>
    <table>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    </tr>
    <?php while($teacher = $teachers->fetch_object()): ?>

    <tr>
    <td><?php echo $teacher->id; ?></td>
    <td><?php echo $teacher->name; ?></td>
    <td><?php echo $teacher->email; ?></td>
    <td><?php echo $teacher->address; ?></td>
    </tr>
<?php endwhile; ?>
    </table>
</body>
</html>