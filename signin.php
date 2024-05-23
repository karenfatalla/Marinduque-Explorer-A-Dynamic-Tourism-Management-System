<?php
// Establish database connection
$db = mysqli_connect("localhost", "root", "", "sign up");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Check credentials
    $sql = "SELECT username, password FROM `web` WHERE username='$username'";
    $result2 = mysqli_query($db, $sql);

    if ($username == 'admin' && $password == 'ad123') {
        $d = date("Y-m-d h:i:sa");
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $que = "INSERT INTO `login` (`user`, `password`, `date_time`) VALUES ('$username', '$hashed_password', '$d')";
        mysqli_query($db, $que);
        header('location:admin.php');
    } elseif ($result2 && mysqli_num_rows($result2) > 0) {
        $rows = mysqli_fetch_assoc($result2);
        $stored_password = $rows['password'];

        // Verify password
        if (password_verify($password, $stored_password)) {
            $d = date("Y-m-d h:i:sa");
            $que = "INSERT INTO `login` (`user`, `password`, `date_time`) VALUES ('$username', '$stored_password', '$d')";
            mysqli_query($db, $que);
            header("location:mainPage.php");
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" type="text/css" href="css/signin.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Century+Gothic:wght@300;400;500;600;700;800;900&display=swap">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="signin.php" method="POST">
        <h2>Login</h2>
        <div class="input-group">
          <input type="text" name="username" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" name="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="signup.php" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
