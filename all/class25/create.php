<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body class="bg-info">
 <div class="container">
 <div class="card mt-5">
 <div class="card-header">
 <h1>Add a teacher</h1>
 </div>
 <div class="card-body">
 <form action="controler.php" method="post">
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" class="form-control" name="name" id="name">
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input type="email" class="form-control" name="email" id="email">
 </div>
 <div class="form-group">
 <button type="submit" class="btn btn-outline-primary">Add a teacher</button>
 </div>
 </form>
 </div>
 </div>
 </div>   
</body>
</html>