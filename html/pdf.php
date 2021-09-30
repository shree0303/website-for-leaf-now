<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
      <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
  <div class="topnav">
    <a class="active" href="home.html">Home</a>
    <a href="shopnow.php">Plants</a>

    <nav>
 <li><button class="GFG"onclick="window.location.href = 'index.php';">LOG OUT</button></li>
 </nav>


    </div>
    <br />

    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
                    <div class="card-header bg-transparent header-elements-inline">
                        <h6 class="card-title text-primary">Sale invoice</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4 pull-left">

                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>#2269 Indranagar</li>
                                        <li>Bangalore</li>
                                        <li>+1 474 44737 47 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <h4 class="invoice-color mb-2 mt-md-2">Invoice #BBB1243</h4>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Date: <span class="font-weight-semibold">March 15, 2020</span></li>
                                            <li>Due date: <span class="font-weight-semibold">March 30, 2020</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            <div class="mb-4 mb-md-2 text-left"> <span class="text-muted">Invoice To:</span>
                                <ul class="list list-unstyled mb-0">
                                    <li>
                                      <?php
                                      session_start();


                          $username = $_SESSION['username'];

                          ?>
                                        <h5 class="my-2">  <?php echo "<strong>$username</strong>"?></h5>
                                    </li>
                                    <li><span class="font-weight-semibold">ABC Mutual funds Ltd</span></li>
                                    <li>Gurung Street</li>
                                    <li>23 BB Lane</li>
                                    <li>Mumbai</li>
                                    <li>234 456 5678</li>
                                    <li><a href="#" data-abc="true">tibco@samantha.com</a></li>
                                </ul>
                            </div>
                            <div class="mb-2 ml-auto"> <span class="text-muted">Payment Details:</span>
                                <div class="d-flex flex-wrap wmin-md-400">
                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>
                                            <h5 class="my-2">Total Due:</h5>
                                        </li>

                                        <li>Country:</li>
                                        <li>IBAN:</li>
                                        <li>SWIFT code:</li>
                                    </ul>
                                    <ul class="list list-unstyled text-right mb-0 ml-auto">
                                        <li>
                                            <h5 class="font-weight-semibold my-2">$1,090</h5>
                                        </li>

                                        <li>India</li>
                                        <li><span class="font-weight-semibold">98574959485</span></li>
                                        <li><span class="font-weight-semibold">BHDHD98273BER</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">plants</h5> <span class="text-muted">
                                            </span>
                                    </td>
                                    <td>1</td>
                                    <td>$120</td>
                                    <td><span class="font-weight-semibold">$120</span></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <h5 class="mb-0">Plant seeds</h5> <span class="text-muted">
                                          </span>
                                    </td>
                                    <td>1</td>
                                    <td>$250</td>
                                    <td><span class="font-weight-semibold">$250</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="d-md-flex flex-md-wrap">
                            <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                <h6 class="mb-3 text-left">Total due</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="text-left">Subtotal:</th>
                                                <td class="text-right">$510</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Tax: <span class="font-weight-normal">(25%)</span></th>
                                                <td class="text-right">$27</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Total:</th>
                                                <td class="text-right text-primary">
                                                    <h5 class="font-weight-semibold">$537</h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </div>

            </div>
        </div>
    </div>
</body>

</html>
