<?php
session_start();
// Load the connect.php file
require "connect.php";

$email = $_POST["email"]; 
$password = $_POST["password"]; 

$sql = "SELECT * FROM admin WHERE email = ? OR password = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt ->get_result()
;
if($result -> num_rows === 1){
     $admin = $result->fetch_assoc();
     if(password_verify($password, $admin['password'])){
          $_SESSION['admin_id'] = $admin['id'];
          $_SESSION['admin-username'] = $admin['email'];
          header("Location: admin-dashboard.php");
     }
}

?>