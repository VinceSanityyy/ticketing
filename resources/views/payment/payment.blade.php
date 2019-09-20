<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/quickai/css/stylesheet.css" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<title>ORO Airways</title>
<meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
<meta name="author" content="harnishdesign.net">
<style>
.pointer {cursor: pointer;}
</style>
</head>
@include('layouts.styles')
@include('layouts.header')
@include('layouts.scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Collapse Button
============================================= -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
</div>
</div>
</header><!-- Header end -->
<!-- Page Header
============================================= -->
<section class="page-header page-header-text-light bg-secondary">
<div class="container">
<div class="row align-items-center">
<div class="col-md-8">
<h1>Payment</h1>
</div>
<div class="col-md-4">
<ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
<li><a href="/">Home</a></li>
<li class="active">Payment</li>
</ul>
</div>
</div>
</div>

</section>

<!-- Page Header end -->
<!-- Content
============================================= -->
<div id="content">
<div class="container">
<div class="bg-light shadow-md rounded">

<div class="row align-items-center p-4">

<div class="col-md-6">

<h2 class="text-primary d-flex align-items-center m-0"><span class="text-3 text-dark mr-1">Total Payable Amount: </span><span class="pointer" data-toggle="modal" data-target="#Details"> P 1500.00</span></h2>

</div>
<div class="col-md-6">
<p class="text-md-right pb-0 mb-0">Booking ID: <span class="text-body">25246584</span></p>
</div>

</div>
<div class="row widget-steps">
<div class="col-3 step complete">
<div class="step-name">Search Flights</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
<a href="#" class="step-dot"></a>
</div>
<div class="col-3 step complete">
<div class="step-name">Book</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
<a href="#" class="step-dot"></a>
</div>
<div class="col-3 step active">
<div class="step-name">Payment</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
<a href="#" class="step-dot"></a>
</div>
<div class="col-3 step disabled">
<div class="step-name">Done</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
<a href="#" class="step-dot"></a>
</div>
<!-- step end -->
</div>
<br>
<hr class="m-0">
<div class="p-4">
<h3 class="text-6 mb-4">How would you like to pay?</h3>
<div class="row">
<div class="col-md-4 col-lg-3">
<ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
<li class="nav-item"> <a class="nav-link active" id="first-tab" data-toggle="tab" href="#firstTab" role="tab" aria-controls="firstTab" aria-selected="true">Wallet<br><small>Pay using Wallets</small></a> </li>
<li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondTab" role="tab" aria-controls="secondTab" aria-selected="false">PayPal<br><small>Visa, Mastercard</small></a> </li>
<li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#thirtTab" role="tab" aria-controls="thirtTab" aria-selected="false">Dragon Pay<br><small>Pay using Dragon Pay</small></a> </li>
</ul>
</div>
<div class="col-md-8 col-lg-9">
<div class="tab-content my-3" id="myTabContentVertical">
<div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="first-tab">
<div class="row">
<div class="col-lg-8">
<table width="100%;">
<tr>
<td>

<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#phpModal"> <i class="fas fa-money-bill-alt" style="margin-right:5px;"></i>Pay via PHP Wallet</button>

</td>
<td>

<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#oroModal"><i class="fab fa-bitcoin"  style="margin-right:5px;"></i>Pay via ORO Wallet</button>

</td>
</tr>
</table>
</div>
<div class="col-lg-4 mt-lg-0 mt-4">
<p>We Accept:</p>
<ul class="payments-types mb-3">
<li><a href="#" target="_blank"> <img data-toggle="tooltip" src="airways/images/payment/visa.png" alt="visa" title="Visa"></a></li>
<li><a href="#" target="_blank"> <img data-toggle="tooltip" src="airways/images/payment/discover.png" alt="discover" title="Discover"></a></li>
<li><a href="#" target="_blank"> <img data-toggle="tooltip" src="airways/images/payment/american.png" alt="american express" title="American Express"></a></li>
<li><a href="#" target="_blank"> <img data-toggle="tooltip" src="airways/images/payment/mastercard.png" alt="discover" title="Discover"></a></li>
</ul>
<div class="card bg-light-3 p-3">
<p class="mb-2">We value your Privacy.</p>
<p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
<hr>
<p class="mb-2">Billing Inquiries</p>
<p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab">
<div class="row">
<div class="col-md-8">
<div id="paypal-button"></div>
<p class="text-info mb-4"><i class="fas fa-info-circle"></i> You will be redirected to PayPal to complete your payment securely.</p>
</div>
<div class="col-md-4 mt-md-0 mt-4">
<div class="card bg-light-3 p-3">
<p class="mb-2">We value your Privacy.</p>
<p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
<hr>
<p class="mb-2">Billing Inquiries</p>
<p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="thirtTab" role="tabpanel" aria-labelledby="third-tab">
<div class="row">
<div class="col-md-8">
<img class="img-fluid" src="airways/images/DragonPay.jpg" style="height:80px ! important;" alt="Paypal Logo" title="Pay easily, fast and secure with PayPal.">
<p class="lead">ORO Airways is Requesting for<b> P 1000.00</b></p>
<select class="custom-select">
<option style="color:red">----- ONLINE BANKING -----</option>
<option>BDO Internet Banking (Fund Transfer)</option>
<option >BPI Express Online</option>
<option >Metrobank Direct</option>
<option >Unionbank Internet Banking</option>
<option style="color:red">----- MORE -----</option>
<option >Globe Gcash</option>
</select>
<br><br>
<input type="text" placeholder="Email" class="form-control"><br>
<button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fas fa-fire fa-2x mr-2"></i> Pay via DragonPay</button>
</div>
<div class="col-md-4 mt-md-0 mt-4">
<div class="card bg-light-3 p-3">
<p class="mb-2">We value your Privacy.</p>
<p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
<hr>
<p class="mb-2">Billing Inquiries</p>
<p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
</div>
</div>
</div>
</div>
<!-- PHP Wallet -->
<div class="modal fade" id="phpModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title"><img src="{{asset('airways/images/coin.png')}}" height="25" style="padding-right:8px;">ORO Airways  </h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<p>Hi, User123<span style="float:right;">PHP Balance:20,000.00 </span></p>
<p>Base  Fare = P 1000</p>
<p>Total Amount :<b>P 1,500.00</b><span><span</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" onclick="relink()" data-dismiss="modal">Pay</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!-- Details -->
<div class="modal fade" id="Details" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title"><img src="{{asset('airways/images/coin.png')}}" height="25" style="padding-right:8px;">ORO Airways  </h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<table width="100%;">



<tr>
<td>
<p><i class="fa fa-plane"></i> Depart Date</p>

<p style="margin-left:17px;margin-top:-16px;">September 10, 2019</p>
</td>
<td>
<p>Davao <i class="fa fa-plane"></i>Manila</p>
<p style="margin-top:-16px;font-size:13px;">A1 | 6:50- 8:50 | 2 hours</p>
<hr>
</td>
</tr>
<tr>
<td>
<p><i class="fa fa-plane"></i> Depart Total</p>
<p style="margin-left:17px;margin-top:-16px;color:lime;">P 1,500.00</p>
</td>
<td>
<p style="color:lime;">Fare, Taxes and Fees</p>
<p style="margin-top:-16px;font-size:14px;">1x Guest</p>
<p  style="margin-top:-16px;font-size:14px">1x VAT</p>
</td>
<td align="right"><br>
<p style="font-size:14px;">P 1500.00</p>
<p style="margin-top:-16px;font-size:14px;">P 0.00</p>

</td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>




</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!-- ORO Wallet -->
<div class="modal fade" id="oroModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title"><img src="{{asset('airways/images/coin.png')}}" height="25" style="padding-right:8px;">ORO Airways  </h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<p>Hi, User123<span style="float:right;">ORO Balance:100 </span></p>
<p>Base  Fare = P 1000</p>
<p>Total Amount :<b> 5 ORO</b><span><br> <small>1 ORO : PHP 2000</small><span</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" onclick="relink()" data-dismiss="modal">Pay</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div><!-- Content end -->
@include('layouts.footer')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
function relink(){
    window.location.assign("reciepts")
}
</script>
<script>
paypal.Button.render({
    funding: {
        allowed: [ paypal.FUNDING.CARD ]

    },
    env: 'sandbox', // Or 'production'
    style: {
        size: 'responsive',
        color: 'gold',
        shape: 'pill',
        fundingicons: 'true',
    },
    // Set up the payment:
    // 1. Add a payment callback
    payment: function(data, actions) {
        // 2. Make a request to your server
        return actions.request.post('/api/create-payment')
        .then(function(res) {
            // 3. Return res.id from the response
            // console.log(res);
            return res.id;
        });
    },
    // Execute the payment:
    // 1. Add an onAuthorize callback
    onAuthorize: function(data, actions) {
        // 2. Make a request to your server
        return actions.request.post('/api/execute-payment', {
            paymentID: data.paymentID,
            payerID:   data.payerID
        })
        .then(function(res) {
            console.log(res);
            alert('PAYMENT WENT THROUGH!!');
            // 3. Show the buyer a confirmation message.
        });
    }
}, '#paypal-button');
</script>
<!-- Script -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="js/theme.js"></script>
