<?php
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include('./include/db_connect.php');
$a_email = $_POST["a_email"];
$a_pass = $_POST["a_pass"];
$exists = false;

$sql = "SELECT * FROM `admin` WHERE a_email='$a_email' AND a_pass='$a_pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);
if ($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true; 
    $_SESSION['email'] = $a_email;
    header("location: ./index.php");  
}
else {
    echo'<script>alert("Wrong email and password")</script>';
}
if($login) {
    echo '<script>alert(" You are now login")</script>';
}
}
?>






<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>Blackdash - Bootstrap5 Admin Template</title>
</head>

<body class="bg-white">

  <!--start wrapper-->
  <div class="wrapper">
    <div class="">
      <div class="row g-0 m-0">
        <div class="col-xl-6 col-lg-12">
          <div class="login-cover-wrapper">
            <div class="card shadow-none">
              <div class="card-body">
                <div class="text-center">
                  <h4>Sign In</h4>
                  <p>Sign In to your account</p>
                </div>
                <form class="form-body row g-3" method="post">
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="a_email" class="form-control" id="inputEmail">
                  </div>
                  <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="a_pass" class="form-control" id="inputPassword">
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-dark">Sign In</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img">
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </div>
  <!--end wrapper-->


</body>

</html>