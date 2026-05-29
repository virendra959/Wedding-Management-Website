<?php
$conn = new mysqli("localhost","root","work","wedding_db");

if($conn->connect_error){
    die("Database Connection Failed");
}

$name  = $_POST['name'];
$phone = $_POST['phone'];
$date  = $_POST['wedding_date'];
$type  = $_POST['wedding_type'];
$msg   = $_POST['message'];

$sql = "INSERT INTO bookings 
(name,phone,wedding_date,wedding_type,message)
VALUES 
('$name','$phone','$date','$type','$msg')";

if($conn->query($sql)){
    header("Location: success.html"); // redirect
}else{
    echo "Error while saving data";
}
?>
