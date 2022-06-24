<?php
include 'C:\xampp\htdocs\project\UID-PROJ-FINAL-REVIEW\0-BASE\connection.php';
$login = false; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  echo "hello";
  $sql = "SELECT * from user where username = '$username' AND password = '$password'";
  echo "hello2";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  echo "hello3";
  if ($num == 1) {
    // session_start();
    // $_SESSION['username'] = $username;
    echo "<script>window.open('../3-WhereFrom/2-WhereFrom.php','_self')</script>";
  }
  
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>sign up</title>
</head>

<body>
    <?php
if($login)
{
  echo '
  <div class="alert alert-success alert-success fade show" role="alert">
    <strong>Success!</strong> Account created.
    </div>
  ';
}
else
{
  echo '
  <div class="alert alert-warning alert-danger fade show" role="alert">
    <strong>Error!</strong> account not created.
  </div>
  ';
}
?>
  <div class="container my-4">
    <h1 class="text-center">Sign up to our website</h1>
    <form action="/project/UID-PROJ-FINAL-REVIEW/melogin/melogin.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>


      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>