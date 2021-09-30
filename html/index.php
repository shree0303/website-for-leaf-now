<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce plants and seeds platform</title>
    <link rel="stylesheet" href="../css/style.css">
   </head>
<body>

<nav class="navbar">
    <ul class="nav-list">
    <div class="logo">
        <img src="..\images\logo\logo.png" alt="logo">
    </div>
     <li class="item"><a  href="index.php">Home</a></li>
         <li class="item"><a  href="shopnow.html"> plants</a></li>
         <li class="item"><a  href="seeds.html"> Seeds</a></li>
          </ul>
         <div class="rightNav">

           <?php
session_start();

$username = $_SESSION['username'];

?>
       <span class="name"><?php echo "<strong> WELCOME $username &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>"; ?></span>
         <br />
           <br />
             <button class=" btn"><a href="login.html">login</a></button>
             <button class=" btn"><a href="logout.html">logout</a></button>

         </div>
        </nav>
            <div class="row">
                <h1>Start Fresh Everyday</h1>
                <p>LET'S ROOT FOR EACH OTHER AND WATCH EACH OTHER GROW</p>
             </div>
         <div class="image">
             <img src="../images/logo/home1.jpg" alt="image">
</div>
<center><a href="shopnow.php" class="button">SHOP NOW </a></center>
</body>
</html>
