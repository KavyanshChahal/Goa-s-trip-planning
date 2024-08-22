<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "my first database";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}
if(isset($_POST['submit'])) {
    $Firstname=$_POST['Firstname'];
    $numberofpeoplegoing=$_POST['numberofpeoplegoing'];
    $password = $_POST['password'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $query = "INSERT INTO 'fuffa form' (Firstname, numberofpeoplegoing, password, mobilenumber, email)
    VALUES ('$Firstname', '$numberofpeoplegoing', '$password', '$mobilenumber', 'email' )";
    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.";
    }
}
?>