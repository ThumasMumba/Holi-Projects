<?php
require "connect.php";
$password = password_hash("admin123", PASSWORD_DEFAULT);
$email = "test123@gaminl.com";

$sql = "INSERT INTO admin(password, email) VALUES(?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $password,$email);
$stmt->execute();
if($stmt ->affected_rows === 1){
     echo "Admin insert successfully";
}
else{
     echo "Error inserting admin";
}
?>