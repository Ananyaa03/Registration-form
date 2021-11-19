<?php
if(isset($_POST['insert'])){
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$details=$_POST["details"];
$charge=$_POST["charge"];

if (!empty($name) || !empty($email) || !empty($number) || !empty($age) || !empty($gender) || !empty($detail) || !empty($charge)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "db2";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $SELECT = "SELECT email From mytable2 Where email = ? Limit 5";
     $INSERT = "INSERT Into mytable2 (name, email, number, age, gender, details, charge) values(?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum>-1) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssiisss",$name, $email, $number, $age, $gender, $details, $charge);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 
 die();
}
}
?>
