<?php
$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
if (!empty($username) || !empty($email) || !empty($gender)  || !empty($password) || !empty($confirmpassword)) {
$host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "youtube";
  //create connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if (mysqli_connect_error()) {
   die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else {
   $SELECT = "SELECT email From register Where email = ? Limit 1";
   $INSERT = "INSERT INTO register (username, email, gender,password) values(?, ?, ?, ?)";
   if($password != $confirmpassword){
     echo "passwords do not match";
   }

   $stmt = $conn->prepare($SELECT);
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $stmt->bind_result($email);
   $stmt->store_result();
   $stmt->store_result();
   $stmt->fetch();
   $rnum = $stmt->num_rows;
   if ($rnum==0) {
    $stmt->close();
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssss", $username, $email, $gender,$password);
    $stmt->execute();
    echo "<center><strong>REGISTRATION SUCCESSFUL</strong></center>";
   } else {
    echo "USER ALREADY EXISTS";
  }

      echo "<center><br><a href=login.html>LOGIN</a></br></center>";




   $stmt->close();
   $conn->close();
  }
} else {
echo "All field are required";
die();

}
?>
