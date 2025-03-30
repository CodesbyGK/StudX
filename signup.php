
<?php

    $mysqli = new mysqli('localhost', 'root','', 'goa');

    if (isset($_POST['submit'])) {
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $contact = htmlentities($_POST['contact']);
        $password = htmlentities($_POST['password']);
        $confirm = htmlentities($_POST['confirm']);

        $sql = "INSERT INTO `customer`(`name`,`email`, `contact`,`password`,`confirm`) VALUES ('$name','$email','$contact','$password','$confirm')";
    
    if($password == $confirm) {
        $mysqli->query($sql);

        header("Location: login.php");
        exit();
      }

      else {
        echo '<script> alert("Passwords Does Not match"); </script> ';
     }

    }
?>
<!DOCTYPE html>
<html>
<head>
<title>StudX</title>
    <link rel="icon" href="Images/logo1.png">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="stylephp.css">
  <script src="https://kit.fontawesome.com/b7c859e0e4.js" crossorigin="anonymous"></script>

</head>
<body>
  <div class="center">
    <h2 id="title">Sign Up</h2>
    <form method="POST">
      <div class="txt_field">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="name" required>
        <span></span>
        <label>Name</label>
      </div>
      <div class="txt_field">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" name="email" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <i class="fa-solid fa-phone"></i>
        <input type="number" name="contact" required min="7000000000" max="9999999999">
        <span></span>
        <label>Phone</label>
      </div>
      <div class="txt_field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="txt_field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="confirm" required>
        <span></span>
        <label>Confirm</label>
      </div>
    
      <input type="submit" name="submit" value="Create Account">
      <div class="signup_link">
        <center>Already have an account? <a href="login.php">SignIn</a></center>
      </div>
    </form>
  </div>

</body>
</html>

</html>