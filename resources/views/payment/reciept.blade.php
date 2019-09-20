<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.harnishdesign.net/html/quickai/recharge-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 05:22:39 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://demo.harnishdesign.net/html/quickai/images/favicon.png" rel="icon" />
    <title>Recharge Invoice - Quickai</title>

    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
    ============================================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

    <!-- Bootstrap -->
    <link href="http://demo.harnishdesign.net/html/quickai/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://demo.harnishdesign.net/html/quickai/vendor/font-awesome/css/all.min.css" rel="stylesheet">

    <!-- Styling -->
    <link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/quickai/css/stylesheet.css" />
</head>
<body>
<div class="container-fluid invoice-container">
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left">
      <p><img src="{{asset('airways/images/logo.png')}}" width="127" height="29" title="Quickai" /></p>
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="mb-0">Invoice</h4>
      <p class="mb-0">Invoice Number - 17004</p>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Pay To:</strong>
      <address>
      ORO Airways<br />
      2705 N. Enterprise St<br />
      Orange, CA 92865
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
      <address>
      Neil Patel<br />
      15 Hodges Mews, High Wycombe<br />
      HP12 3JL<br />
      Philippines
      </address>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6"> <strong>Payment Method:</strong><br>
      <span> PayPal </span> <br />
      <br />
    </div>
    <div class="col-sm-6 text-sm-right"> <strong>Order Date:</strong><br>
      <span> 10/12/2019<br>
      <br>
      </span> </div>
  </div>
  <br />
  <div class="card">
    <div class="card-header"> <span class="font-weight-600 text-4">Recharge Summary</span> </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <td class="border-top-0"><strong>Description</strong></td>
              <td width="20%" class="text-center border-top-0"><strong>Quantity</strong></td>
              <td width="20%" class="text-right border-top-0"><strong>Amount</strong></td>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="text-3">Ticket</span> (Adult)
              </td>
              <td class="text-center">1</td>
              <td class="text-right">P 15,00.00</td>
            </tr>
            <tr>
              <td>Promotional Code: <small>Baggage</small></td>
              <td class="text-center">1</td>
              <td class="text-right">P 100.00</td>
            </tr>
            <tr>
              <td colspan="2" class="bg-light-2 text-right"><strong>Sub Total</strong></td>
              <td colspan="2" class="bg-light-2 text-right">P 1,600.00</td>
            </tr>
            <tr>
              <td colspan="2" class="bg-light-2 text-right"><strong>Tax</strong></td>
              <td colspan="2" class="bg-light-2 text-right">P 50.00</td>
            </tr>
            <tr>
              <td colspan="2" class="bg-light-2 text-right"><strong>Total</strong></td>
              <td colspan="2" class="bg-light-2 text-right">P 1650.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br>
    <div class="table-responsive d-print-none">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td class="text-center"><strong>Transaction Date</strong></td>
            <td class="text-center"><strong>Gateway</strong></td>
            <td class="text-center"><strong>Transaction ID</strong></td>
            <td class="text-center"><strong>Amount</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">10/12/2019</td>
            <td class="text-center">PayPal</td>
            <td class="text-center">3912912704</td>
            <td class="text-center">P 1,650.00</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="text-center text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  <div class="text-center"><div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="#" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div></div>
</div>
<p class="text-center d-print-none"><a href="/">&laquo; Back to My Account</a></a></p>
</body>

<!-- Mirrored from demo.harnishdesign.net/html/quickai/recharge-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 05:22:39 GMT -->
</html>
