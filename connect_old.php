<?php
$Firstname = $_POST['Firstname'];
$numberofpeoplegoing = $_POST['numberofpeoplegoing'];
$password = $_POST['password'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
//database connection
$conn = new mysqli('localhost','root','','my first database');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into 'fuffa form'(Firstname, numberofpeoplegoing, password, mobilenumber, email)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sisis", $Firstname, $numberofpeoplegoing, $password, $mobilenumber, $email);
    $stmt->execute();
    echo "aapka kat chuka hai hum goa nahi jayenge thank you...";
    $stmt->close();
    $conn->close();
}
?>