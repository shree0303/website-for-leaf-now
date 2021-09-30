<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce plants and seeds platform</title>
    <link rel="stylesheet" href="../css/stylecactus.css">
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
                        <h1> Prickly pear cactus is also used for medicine.</h1>
                        <p>Prickly pear cactus is used for type 2 diabetes, high cholesterol, obesity, alcohol hangover, colitis, diarrhea, and benign prostatic hypertrophy (BPH). It is also used to fight viral infections.

                            In foods,<br> the prickly pear juice is used in jellies and candies.</p>
                    </div>
                    <div class="col-2">
                        <img src="../images/cactus/prickly.jpg">
                     </div>
                </div>
             <div class="outplants">
                 <div class="small-container">
                 <div class="row">
                     <div class="col-3">
                         <img src="../images/cactus/crassula captitella red.jpg" alt="captitella" height="200px">
                         <h4>crassula captitella</h4>
                         <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                         </div>
                         <p>$90.00</p>
                            <center><button class="GFG"onclick="window.location.href = 'pdf.php';"> BUY NOW</button></center>
                     </div>
                     <div class="col-3">
                        <img src="../images/cactus/jade.jpg" alt="jade" height="200px">
                        <h4>jade</h4>
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
                        <img src="../images/cactus/kalanchoe.jpg" alt="kalanchoe" height="200px">
                        <h4>kalanchoe</h4>
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
                            <img src="../images/cactus/moon cactus.jpg" alt="mooncactus" height="200px">
                            <h4>moon cactus</h4>
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
                           <img src="../images/cactus/prickly.jpg" alt="prickly" height="200px">
                           <h4>prickly cactus</h4>
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
                           <img src="../images/cactus/snake.jpg" alt="spider" height="200px">
                        <h4>snake cactus</h4>
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
