<?php error_reporting(E_ALL^E_NOTICE); ?>
<?php
session_start();
$con=mysqli_connect('localhost','root','','youtube');
if(!$con){
  echo  " connection error";
  }
  mysqli_select_db($con,'youtube');


  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql=" SELECT * FROM register WHERE username='$username'AND password='$password'";
  $result=mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);
  flush();
  if($num==1){
    $_SESSION['name']=$username;
    echo "<script>window.location='index.php'</script>";
  }else{
    echo "user not registered";
  }



  session_start();

  $con=mysqli_connect('localhost','root','','plants');
  if(!$con){
    echo  "no connection ";
  }
    mysqli_select_db($con,'plants');

    if(isset($_POST['username'])){

    $username=$_POST['username'];
  }


    $_SESSION['username']=$username;

    $result=mysqli_query($con,$q);
    $num = mysqli_num_rows($result);

?>
