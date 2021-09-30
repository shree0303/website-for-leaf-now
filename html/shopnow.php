<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce plants and seeds platform</title>
    <link rel="stylesheet" href="../css/styleshop.css">
</head>
<body>

<nav class="navbar">
    <ul class="nav-list">
    <div class="logo">
        <img src="..\images\logo\logo.png" alt="logo">
    </div>
     <li class="item"><a  href="index.php">Home</a></li>
         <li class="item"><a  href="shopnow.php">Plants</a></li>
         <li class="item"><a  href="seeds.html"> Seeds</a></li>
         <li class="item"><a  href="discuss.html">Forem</a></li>
          </ul>
         <div class="rightNav">
          <br />

            <?php
session_start();

$username = $_SESSION['username'];

?>
        <span class="name"><?php echo "<strong>$username &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>"; ?></span>
          <br />
            <br />
            
         </div>
        </nav>
             <div><h1>shop here</h1>
            <p>Make Your Home Nature Friendly</p></div>
             <div>
                 <img src="..\images\logo\home2.jpg" width="100%" height="400px">
                             </div>
    <div class="indoor">
            <h2>Indoor plant</h2><img src="..\images/indoorplant/zamia.jpg" width="500px" height="200px" alt="zamaia image"><br>
        <p><a href="indoor.php" class="button">Explore here</a><p></div>
        <div class="outdoor">
            <h2>Outdoor plant</h2><img src="..\images\outdoorplant\gardenia.jpg" width="500px" height="200px" alt="zamaia image"><br>
<p><a href="outdoor.php" class="button">explore here</a></p></div>
        <div class="cactus">
            <h2>Cactus plant</h2><img src="..\images\cactus\crassula captitella red.jpg" width="500px" height="200px" alt="zamaia image"><br>
        <p><a href="cactus.php" class="button">explore here</a></p></div>
        <div class="flower">
            <h2>flower plant</h2><img src="..\images\flowerplant\daffodil.jpg" width=" 500px" height="200px" alt="zamaia image"><br>
        <p><a href="flower.html" class="button">explore here</a></p></div>
        <div class="lucky">
            <h2>Lucky plant</h2><img src="..\images\lucky plant\peacelily.jpg" width="500px" height="200px" alt="zamaia image"><br>
        <p><a href="lucky.html" class="button">explore here</a></p></div>
        <div class="note">
            <h2>Sava Tree and Save Planet</h2>
            <h3>Trees produces oxygen that is life line of all living beings. In the hot summer we usually plan trips in the hilly areas. But if the rate of cutting Trees remains same then we don’t have enough Trees to plan a trip, seasonal raining and amount of fresh oxygen will no longer be available. Trees helps to clean the air, soil and water,  making the earth a beautiful livable place. Living close to trees makes us healthier and happier. Its time to SAVE Trees, protect forests and spread awareness. If you want to save trees, you can help by protecting those that grow around your home, and planting more Trees. Reduce the use of  paper products, too. According to our little understanding we have found few ways to protect Trees, you can also follow them ,motivate your friends and family members to join hands together to save our beautiful earth or you can join an organization working to save Tress around your home town.</h3>
       <img src="../images/logo/tree.gif" width="100%" height="50%">
        </div>
</body>
</html>
