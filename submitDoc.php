<?php
require "connect.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$doctor_id = $_POST["doctor_id"];
$middle_name = $_POST["middle_name"];
$gender = $_POST["gender"];
$dob = $_POST["date_of_birth"];
$special = $_POST["specialization"];
$qualify = $_POST["qualification"];
$licNumber = $_POST["license_number"];
$licenAuth = $_POST["license_authority"];
$password = $_POST["password"];
$email = $_POST["email_address"];
$experience = $_POST["years_experience"];
$phone = $_POST["phone_number"];
$address = $_POST["address"];

$sql = "INSERT INTO doctor(first_name, last_name, doctor_id, middle_name, gender, date_of_birth, specialization, qualification, license_number, password, email_address, 
years_experience,license_authority, phone_number, address) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
if(!$stmt){
     die("Prepare failed: ". $conn->error);
}
else{
     $stmt -> bind_param("sssssssssssssss",$first_name,$last_name, $doctor_id,$middle_name,$gender,$dob ,$special,$qualify, $licNumber,$password, $email, $experience, $phone, $address,$licenAuth);

     $stmt -> execute();
     header("Location: success.html");
}
?>