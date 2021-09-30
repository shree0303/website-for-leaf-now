<?php error_reporting(E_ALL^E_NOTICE); ?>
<!doctype html>

<html>
<head>
<title>Welcome</title>
<style>
body{
background-image: url("images/photo.jpg");
margin-top: 90px;
    margin-bottom: 90px;
    margin-right: 100px;
    margin-left: 100px;
    background-size: 100%;
    background-attachment: fixed;
}
</style>
<a href="login.html" class="btn brand z-depth-0">HOME</a>&nbsp; &nbsp; &nbsp; &nbsp;<a href="#" class="btn brand z-depth-0">CONTACT US</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="#" class="btn brand z-depth-0">ABOUT US</a>
</head>
<body>
 <br><center><h1><u> AIRLINE BOOKING </u></h1></center></br>
    <center><p> Thank you.. Successfully Logged In..</p></center>

<center><h2>Welcome,</h2><br></center>

<div class="right">
</div><br><br>
<div class="right"><button class="button">
	<a href="logout1.php"  style="color:black">Logout</a></button>
</div><br>

<form method="POST" action="booking.php" >
	<legend>

	<center>
	<br><br>
<b> Depart On: </b>
<input type="date" name="depdate" value="Today"/><br><br>

<!-- <tr>
<td>
 <select name="date" required>
  <option selected hidden value="">Select date</option>
  <option value="10/01/2021">10/01/2021</option>
  <option value="12/01/2021">12/01/2021</option>
  <option value="15/01/2021">15/01/2021</option>
  <option value="17/01/2021">17/01/2021</option>
 </select>
</td>
</tr> --></br></br>
<b> From: </b><input type="text" name="from"> &nbsp; &nbsp; &nbsp; &nbsp; <b> To: </b><input type="text" name="to"><br>

<br><br><input type="submit" value="Proceed" name="proceed"></br></br>
</center>


</legend>
</form>

<?php

session_start();

$con=mysqli_connect('localhost','root','','youtube');
if(!$con){
  echo  "no connection ";
}
  mysqli_select_db($con,'youtube');

  if(isset($_POST['from'])){

  $from=$_POST['from'];
}

  if(isset($_POST['to'])){
  $to=$_POST['to'];
  }
  if(isset($_POST['depdate'])){
  $depdate=$_POST['depdate'];
}

  $_SESSION['from']=$from;
  $_SESSION['to']=$to;
  $_SESSION['depdate']=$depdate;
  $q=" SELECT * FROM plane WHERE from1 ='$from' and to1='$to' ";
  $result=mysqli_query($con,$q);
  $num = mysqli_num_rows($result);

  if($num==1){
  echo "<script>window.location='booking1.php'</script>";
  }else{
    echo "No flight available";
  }




 ?>
</body>
</html>
