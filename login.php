<?php

$mysqli = new mysqli("localhost", "root", '', "goa");

session_start();

// if (isset($_SESSION['email'])) {
//     header("Location: index.html");
//     exit();
// }

if (isset($_POST['submit'])) {


    $email = mysqli_real_escape_string($mysqli, htmlentities($_POST['email']));
    $password = mysqli_real_escape_string($mysqli, htmlentities($_POST['password']));

    $sql = "SELECT * FROM `customer` WHERE `email`='$email' AND `password`='$password'";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_row();

        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row[1] . " " . $row[2];

         "Welcome! Login Successful";

        header("Location: index.html");
        exit();
    } else {
       echo '<script> alert("Incorrect username or password"); </script> ';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>StudX</title>
    <link rel="icon" href="Images/logo1.png">  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/b7c859e0e4.js" crossorigin="anonymous"></script>
        <link href="stylephp.css" rel="stylesheet">
    </head>
    <body>
        <div class="center">
            <h2 id="title">Sign In</h2>
            <form method="post" >
              <div class="txt_field">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
              </div>
              <div class="txt_field">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
              </div>
              <diV class="signup_link">
                <a href="signup.php">Forgot Password?</a>
              </diV>
              <input type="submit" name="submit" value="Login">
              <div class="signup_link">
                <center>Not have an account? <a href="signup.php">SignUp</a></center>
              </div>
            </form>
          </div>
    </body>
</html>