<?php 
DEFINE('dhost', 'localhost');
DEFINE('dbase', 'medika');
DEFINE('duser', 'root');
DEFINE('dpassword', '');
      $conn = new mysqli(dhost, duser, dpassword, dbase);

function getDBConnection ()
{
      $conn = new mysqli(dhost, duser, dpassword, dbase);

     if($conn->connect_error){
          die("Connection Failed!");
     }
     else{
          echo "Connection successfully✅";
     }
}

?>