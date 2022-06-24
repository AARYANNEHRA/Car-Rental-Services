<?php
include 'C:\xampp\htdocs\project\UID-PROJ-FINAL-REVIEW\0-BASE\connection.php';
echo "hello5";
$login = false; 
if(isset($_POST["login"])) {
  echo "hello6";
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
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN FORM</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Login Form</header>
    <form action="/project/UID-PROJ-FINAL-REVIEW/2-LoginPage/login.php" method="POST">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address" name="username">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="password"  maxlength="10">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <!-- <div class="pass-txt"><a href="#">Forgot password?</a></div> -->
      <input type="submit" name="login" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="../signup/signup.php">Signup now</a></div>
  </div>
  <script src="login.js"></script>
</body>
</html>