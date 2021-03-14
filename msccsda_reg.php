<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSC CS - DA Registration</title>
    <link rel="icon" type="image/png" href="icon.png">
    <style>
        h3{
            font-family:calibri;
            font-size:35px;
        }
    </style>
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
<br>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="msccsda.php">MSC CS - DA</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registration</li>
    
  </ol>
</nav>
<br>
                <center><h3><u><b>Register Here</b></u></h3></center>
                <br>
                <table class="table table-borderless">
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" class="form-control" require></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" class="form-control" require></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input type="radio" name="flexRadioDefault" class="form-check-input"> Male&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="flexRadioDefault" class="form-check-input"> Female</td>
                    </tr>
                    <tr>
                      <td>Date of Birth</td>
                      <td><input type="date" class="form-control" require></td>
                    </tr>
                    <tr>
                      <td>Father's Name</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Occupation</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Mother's Name</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Occupation</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Religion</td>
                      <td><select class="form-select">
                            <option value="--Select--">--select--</option>
                            <option value="">Islam</option>
                            <option value="">Hindu</option>
                            <option value="">Christian</option>
                            <option value="">Sikhim</option>
                            <option value="">Buddhist</option>
                            <option value="">Jainist</option>
                            <option value="">Unaffiliated</option>
                            <option value="">Others</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Caste</td>
                      <td><select class="form-select">
                        <option value="">--select--</option>
                        <option value="">Muslim</option>
                        <option value="">Brahmins</option>
                        <option value="">Kshatriyas</option>
                        <option value="">Vaishyas</option>
                        <option value="">Shudras</option>
                        <option value="">Dalits</option>
                        <option value="">Nayar</option>
                        <option value="">Pulayar</option>
                        <option value="">Others</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Communication Address</td>
                      <td><textarea name="cadd" cols="10" rows="5" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type="checkbox" name="sadd" class="form-check-input">&nbsp;&nbsp;&nbsp;Same as Communication Address</td>
                    </tr>
                    <tr>
                      <td>Permanent Address</td>
                      <td><textarea name="padd"cols="10" rows="5" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Username</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td><input type="password" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>Confirm Password</td>
                      <td><input type="password" class="form-control"></td>
                    </tr>
                </table>
                <br>
                <h4>10th / SSLC</h4>
                <br>
                <table class="table table-borderless">
                  <tr>
                    <td>Year of Pass</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>School / College</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>University / Board</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Score (in Percentage)</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                </table>
                <br>
                <h4>Plus Two</h4>
                <br>
                <table class="table table-borderless">
                <tr>
                    <td>Year of Pass</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>School / College</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>University / Board</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Score (in Percentage)</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                </table>
                <br>
                <h4>Under Graduation</h4>
                <br>
                <table class="table table-borderless">
                <tr>
                    <td>Year of Pass</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>School / College</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>University / Board</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Score (in Percentage)</td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><button class="btn btn-outline-success">Register</button></td>
                  </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <br>
            <br>
            <center><h3><u><b>Sign in</b></u></h3></center>
            <br>
            <div class="alert alert-warning">If you are already registerd !</div>
            <table class="table table-borderless">
              <tr>
                <td>Username</td>
                <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                <td></td>
                <td><button class="btn btn-outline-primary">Sign in</button> &nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;<a href="">Forgot Pasword</a></td>
              </tr>
            </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>