<?php
$db = mysqli_connect("localhost", "root", "", "sign up");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>