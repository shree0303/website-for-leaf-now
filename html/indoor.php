<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce plants and seeds platform</title>
    <link rel="stylesheet" href="../css/styleindoor.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

?>
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
   <br />


           <span class="name"><?php echo "<strong>$username &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>"; ?></span>
             <br />
               <br />



             </div>
            </nav>
            <div class="row">
                <div class="col-2">
                        <h1>Docorate your Home with pretty One!</h1>
                        <p>Shop online for Indoor Plants at leafnow.com Decorate your office spaces, corners with these lush green indoor plants.<br> These premium quality indoor plants will boost your mood
                        </p>
                    </div>
                    <div class="col-2">
                        <img src="../images/indoorplant/spider.jpg">
                     </div>
                </div>
             <div class="outplants">
                 <div class="small-container">
                 <div class="row">
                     <div class="col-3">
                         <img src="../images/indoorplant/african violets.jpg" alt="violets" height="200px">
                         <h4>african violets</h4>
                         <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                         </div>
                         <p>$70.00</p>
                         <center><button class="GFG"onclick="window.location.href = 'pdf.php';">
       BUY NOW
   </button></center>
                     </div>

                     <div class="col-3">
                        <img src="../images/indoorplant/betel.jpg" alt="betel" height="200px">
                        <h4>Betel</h4>
                         <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                         </div>
                         <p>$50.00</p>
                         <center><button class="GFG"
   onclick="window.location.href = 'pdf.php';">
       BUY NOW
   </button></center>
                     </div>
                     <div class="col-3">
                        <img src="../images/indoorplant/calathea.jpg" alt="calathea" height="200px">
                        <h4>calathea</h4>
                        <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>$70.00</p0>
                          <center><button class="GFG"
    onclick="window.location.href = 'pdf.php';">
        BUY NOW
    </button></center>
                        </div>
                </div>
                  </div>

                  <div class="small-container">
                    <div class="row">
                        <div class="col-3">
                            <img src="../images/indoorplant/crotona.jpg" alt="crotona" height="200px">
                            <h4>crotona</h4>
                            <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                       <i class="fa fa-star-o"></i>
                            </div>
                            <p>$45.00</p>
                            <center><button class="GFG"
      onclick="window.location.href = 'pdf.php';">
          BUY NOW
      </button></center>
                        </div>
                        <div class="col-3">
                           <img src="../images/indoorplant/philedendron.jpg" alt="philedendron" height="200px">
                           <h4>philedendron</h4>
                            <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>$55.00</p>
                            <center><button class="GFG"
      onclick="window.location.href = 'pdf.php';">
          BUY NOW
      </button></center>
                        </div>
                        <div class="col-3">
                           <img src="../images/indoorplant/zamia.jpg" alt="spider" height="200px">
                        <h4>zamia</h4>
                           <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                           </div>
                           <p>$70.00</p0>
                             <center><button class="GFG"
       onclick="window.location.href = 'pdf.php';">
           BUY NOW
       </button></center>
                           </div>
                   </div>
                     </div>

            </body>
</html>
