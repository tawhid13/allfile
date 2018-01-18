<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item <?php echo $page==='home'? 'active': ''; 
    ?>">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
      <li class="nav-item <?php echo $page==='about'? 'active': '';?>">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item <?php echo $page==='contact'? 'active': '';?>">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>