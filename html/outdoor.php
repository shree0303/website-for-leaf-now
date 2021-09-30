<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce plants and seeds platform</title>
    <link rel="stylesheet" href="../css/styleoutdoor.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar">
        <ul class="nav-list">
        <div class="logo">
            <img src="..\images\logo\logo.png" alt="logo">
        </div>
         <li class="item"><a  href="index.php">Home</a></li>
             <li class="item"><a  href="shopnow.php"> plants</a></li>
             <li class="item"><a  href="seeds.html"> Seeds</a></li>
              </ul>
             <div class="rightNav">

               <?php
   session_start();

   $username = $_SESSION['username'];

   ?>
   <br />

           <span class="name"><?php echo "<strong>$username &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>"; ?></span>
             <br />
               <br />

             </div>
            </nav>
            <div class="row">
                <div class="col-2">
                        <h1>plant trees make your garden beautiful !</h1>
                        <p>The garden suggests there might be a place<br> where we can meet nature halfway</p>
                    </div>
                    <div class="col-2">
                        <img src="../images/outdoorplant/lemongrass.jpg">
                     </div>
                </div>
             <div class="outplants">
                 <div class="small-container">
                 <div class="row">
                     <div class="col-3">
                         <img src="../images/outdoorplant/chameli.jpg" alt="chameli">
                         <h4>chameli</h4>
                         <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                         </div>
                         <p>$60.00</p>
                         <center><button class="GFG"onclick="window.location.href = 'pdf.php';"> BUY NOW</button></center>
                     </div>
                     <div class="col-3">
                        <img src="../images/outdoorplant/gardenia.jpg" alt="gardenia">
                        <h4>gardenia</h4>
                         <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                         </div>
                         <p>$50.00</p>
                            <center><button class="GFG"onclick="window.location.href = 'pdf.php';"> BUY NOW</button></center>
                     </div>
                     <div class="col-3">
                        <img src="../images/outdoorplant/ixora.jpg" alt="ixora">

                        <h4>gardenia</h4>
                        <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>$70.00</p0>
                             <center><button class="GFG"onclick="window.location.href = 'pdf.php';"> BUY NOW</button></center>
                        </div>
                </div>
                  </div>

                  <div class="small-container">
                    <div class="row">
                        <div class="col-3">
                            <img src="../images/outdoorplant/lemongrass.jpg" alt="lemongrass">
                            <h4>lemongrass</h4>
                            <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                       <i class="fa fa-star-o"></i>
                            </div>
                            <p>$45.00</p>
                               <center><button class="GFG"onclick="window.location.href = 'pdf.php';"> BUY NOW</button></center>
                        </div>
                        <div class="col-3">
                           <img src="../images/outdoorplant/thoja.jpg" alt="thoja" height="200px">
                           <h4>thoja</h4>
                            <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>$55.00</p>
                               <center><button class="GFG"onclick="window.location.href = 'pdf.php';"> BUY NOW</button></center>
                        </div>
                        <div class="col-3">
                           <img src="../images/indoorplant/calathea.jpg" alt="calathea">
                        <h4>calathea</h4>
                           <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                           </div>
                           <p>$70.00</p0>
                                <center><button class="GFG"onclick="window.location.href = 'pdf.php';"> BUY NOW</button></center>
                           </div>
                   </div>
                     </div>

</body>
</html>
