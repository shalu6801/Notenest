<?php

$servername = "localhost";
$username = "root";
$password = ""; // default XAMPP password
$database = "notenest"; // replace with your actual DB name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

   $db_name = 'mysql:host=localhost;dbname=course_db';
   $user_name = 'root';
   $user_password = '';

   $conn = new PDO($db_name, $user_name, $user_password);

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);
          $rand[] = $str[$n];
      }
      return implode($rand);
   }

?>