<?php

session_start();


$con = mysqli_connect("localhost", "root", "", "sign up"); 

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($con, $_POST['ffirst']);
    $lastname = mysqli_real_escape_string($con, $_POST['flast']);
    $email = mysqli_real_escape_string($con, $_POST['femail']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $phone = mysqli_real_escape_string($con, $_POST['fphone']);
    $destination = mysqli_real_escape_string($con, $_POST['fdesti']);

    
    $sql = "INSERT INTO booking (ffirst, flast, femail, city, fphone, fdesti) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

   
    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $city, $phone, $destination);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect to booking.html
        header('Location: booking.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="css/booking.css">
	<script>
		function validateForm() {
			if (isEmpty(document.getElementById('data_3').value.trim())) {
				alert('First name is required!');
				return false;
			}
			if (isEmpty(document.getElementById('data_4').value.trim())) {
				alert('Last name is required!');
				return false;
			}
			if (!validateEmail(document.getElementById('data_5').value.trim())) {
				alert('Email must be a valid email address!');
				return false;
			}
			return true;
		}
		function isEmpty(str) { return (str.length == 0 || !str.trim()); }
		function validateEmail(email) {
			var re = "";
			return isEmpty(email) || re.test(email);
		}
	</script>
</head>
<body>
	<div class="main">
		<ul>
			<ul class="list">
			<li class="logo"><a href="mainPage.php"><img src="logo.png" alt="Logo" style="width:36px;height:36px"></a></li>
			<div class="search">
                <form method="POST" action="info.php">
                  <input type="text" name="search_p" placeholder="Search.." size="50">
              
                  <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
                </form>
            </div>
			</ul>
			<ul class="list2">
			<li><a href="mainPage.php">Home</a></li>
			<li><a id="long" href="destination.php">Destination</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			<li><a href="signin.php">Logout</a></li>
			</ul>
		</ul>
	</div>
	<h1>Tour Booking</h1>
	<div class="container">
		<form method="POST" action="booking.php" name="form" onsubmit="return validateForm()">
			<div class="textbox">
				<input type="text" placeholder="First Name" name="ffirst" value=""  onkeypress="return /[a-zA-Z]/i.test(event.key)" required>  
			</div>

			<div class="textbox">
				<input type="text" placeholder="Last Name" name="flast" value="" onkeypress="return /[a-zA-Z]/i.test(event.key)" required> 
			</div>

			<div class="textbox">
				<input type="text" placeholder="Email" name="femail" value="" required pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email">
			</div>

			<div class="textbox">
				<input type="text" placeholder="City" name="city" value="" onkeypress="return /[a-zA-Z]/i.test(event.key)" required>
			</div>

			<div class="textbox">
				<input type="text" placeholder="Phone" name="fphone" value="" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}" required>
			</div>

			<div class="textbox">
				<input type="text" placeholder="Destination" name="fdesti" value="" required>
			</div>
			<div class="btn">
				<input name="submit" value="Submit" type="submit">
			</div>
		</form>
	</div>

</body>
</html>