<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="icon" type="image/png" href="icon.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
  <h4><font color="white">RAJAGIRI</font></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Department
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="mca.php">MCA</a></li>
            <li><a class="dropdown-item" href="msccsda.php">MSC CS-DA</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <h3><b>GALLERY</b></h3>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
  </ol>
</nav>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 18rem;">
  <img src="clsrm1.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Class Rooms</p>
    <h5 class="card-title"><a href="class_rooms.php"><button class="btn btn-outline-dark">Class Rooms</button></a></h5>
  </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 18rem;">
  <img src="lab1.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Labs</p>
    <h5 class="card-title"><a href="labs.php"><button class="btn btn-outline-dark">Labs</button></a></h5>
  </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <div class="card" style="width: 18rem;">
  <img src="lib1.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Library</p>
    <h5 class="card-title"><a href="lib.php"><button class="btn btn-outline-dark">Library</button></a></h5>
  </div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 18rem;">
  <img src="spfaculty1.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Sports Faculty</p>
    <h5 class="card-title"><a href="spfaculty.php"><button class="btn btn-outline-dark">Sports Faculty</button></a></h5>
  </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <div class="card" style="width: 18rem;">
  <img src="rfaculty1.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Recreational Faculty</p>
    <h5 class="card-title"><a href="rfaculty.php"><button class="btn btn-outline-dark">Recreational Faculty</button></a></h5>
  </div>
</div>
        </div>
    </div>
    <hr>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>