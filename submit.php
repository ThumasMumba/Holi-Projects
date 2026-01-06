<!-- Handles form data -->
 <?php
//Load and run connect.php
require "connect.php";

//Get all the supplied input from the  HTML form
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$address = $_POST["address"];
 
//Create an SQL template (table name and columns)
     $sql = "INSERT INTO user(fname, lname, password, email, phone, gender, address)
     VALUES (?,?,?,?,?,?,?)";
//sends the SQL created template to MySQL
     $stmt = $conn->prepare($sql);
    //Checks for edge cases if the prepare() throws an error or returns falls
 if(!$stmt){
     die("Prepare failed: ". $conn->error);
 }
 else{
    //else attach the php variables to ? placeholders
 $stmt -> bind_param("sssssss", $fname, $lname, $password, $email, $phone, $gender, $address);
 //sends the bound data to MySQL
    $stmt->execute();
//Displays the ui on the screen to show that the information has being submitted successfully
    header("Location: success.html");
 }
 ?>

