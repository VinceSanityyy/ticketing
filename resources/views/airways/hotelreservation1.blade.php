
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <title>ORO Airways</title>
    <meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
    <meta name="author" content="harnishdesign.net">

</head>
@include('layouts.header')
@include('layouts.styles')
@include('layouts.scripts')






<div class="content">
<br>

<section>
<div id="content">


    <section class="container">


        <div class="row">
          <div class="col mb-2">
            <form id="bookingHotels" method="get"  >
              <div class="form-row">
                <div class="col-md-12 col-lg form-group">
                  <input type="text" class="form-control ui-autocomplete-input" id="hotelsFrom" required="" placeholder="Enter City/Hotel" autocomplete="off" name="destination">
                  <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                <div class="col-md-6 col-lg form-group">
                  <input id="hotelsCheckIn" name="checkin" type="text" class="form-control" required="" placeholder="Check In">
                  <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                <div class="col-md-6 col-lg form-group">
                  <input id="hotelsCheckOut" name="checkout" type="text" class="form-control" required="" placeholder="Check Out">
                  <span class="icon-inside"><i class="fxr fa-calendar-alt"></i></span> </div>
                <div class="col-md-6 col-lg travellers-class form-group">
                  <input type="text" id="hotelsTravellersClass" class="travellers-class-input form-control" name="hotels-travellers-class" placeholder="Rooms / People" required="" onkeypress="return false;">
                  <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                  <div class="travellers-dropdown" style="display: none;">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Rooms</p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#hotels-rooms" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="hotels-rooms" class="qty-spinner form-control" value="1" readonly="">
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#hotels-rooms" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="mt-2 mb-4">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0"> Adults <small class="text-muted">(12+ yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#adult-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" name="travelers" id="adult-travellers" class="qty-spinner form-control" value="1" readonly="">
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#adult-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-2">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Children <small class="text-muted">(1-12 yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#children-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="children-travellers" class="qty-spinner form-control" value="0" readonly="">
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#children-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block submit-done mt-3" type="button">Done</button>
                  </div>
                </div>
                <div class="col-md-6 col-lg form-group">
                  <button class="btn btn-primary btn-block" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="row">


        </div>
        <div class="row">

        <!-- Side Panel
        ============================================= -->
        <aside class="col-lg-3">
        <div class="bg-light shadow-md rounded p-3 sticky-top">
          <h3 class="text-5 mb-3">Search Details</h3><hr>
          <p class="text-center mt-3 mb-1">  <i class="fa fa-map-marker" style="margin-right:5px;"></i><span class="text-uppercase font-weight-700">Destination</span>

          <br><span class=" text-uppercase font-weight-500">{{ $dest }}</span></p>

            <p class="text-center mt-3 mb-1"><span class="text-uppercase font-weight-700">Checkin</span> : {{ $in }} <br>
            <span class="text-uppercase font-weight-700">Checkout</span> : {{ $out }}</p>
              </div>
          </aside><!-- Side Panel end -->

          <div class="col-lg-9 mt-4 mt-lg-0">
          <!-- Sort Filters
          ============================================= -->
          <div class="border-bottom mb-3 pb-3">
          <div class="row align-items-center">
              <div class="col-6 col-md-8">
              <span class="mr-3"><span class="text-4">Result:</span> <span class="font-weight-600">{{ $data->count() }} </span>Hotels found</span> <span class="text-warning text-nowrap">Prices inclusive of taxes</span></div>
              <div class="col-6 col-md-4">
              <div class="row no-gutters ml-auto">
                <label class="col col-form-label-sm text-right mr-2 mb-0" for="input-sort">Sort By:</label>
                <select id="input-sort" class="custom-select custom-select-sm col">
                  <option value="" selected="selected">Popularity</option>
                  <option value="">Price - Low to High</option>
                  <option value="">Price - High to Low</option>
                  <option value="">User Rating - High to Low</option>
                </select>
              </div>
              </div>
              </div>
          </div><!-- Sort Filters end -->

          <!-- List Item
          ============================================= -->
          <div class="hotels-list">
          @foreach($data as $datas)



              <div class="hotels-item bg-light shadow-md rounded p-3">
              <div class="collapsible">
                <div class="row">
                  <div class="col-md-4">
                      <a href="#"><img class="img-fluid rounded align-top" src="{{asset('imgs/orchid.jpg')}}" alt="hotels"></a>
                  </div>
                  <div class="col-md-8 pl-3 pl-md-0 mt-3 mt-md-0">
                      <div class="row no-gutters">
                      <div class="col-sm-9">



                      <h4><a href="#" class="text-dark text-5">{{ $datas->hotel_name }}</a></h4>

                      <p class="mb-2">

                          <span class="text-black-50"><i class="fas fa-map-marker-alt"></i> {{ $datas->hotel_location }}</span>
                      </p>

                      <p class="reviews mb-2">
                          <span class="reviews-score px-2 py-1 rounded font-weight-600 text-light">8.2</span> <span class="font-weight-600">Excellent</span> <a class="text-black-50" href="#">(245 reviews)</a>
                      </p>
                      <p class="text-danger mb-0">Last Booked - 18 hours ago</p>
                      </div>
                      <div class="col-sm-3 text-right d-flex d-sm-block align-items-center">

                          <div class="text-dark text-7 font-weight-500 mb-0 mb-sm-2 mr-2 mr-sm-0 order-0">₱  {{ $datas->hotel_starting_price }}</div>
                          <div class="text-black-50 mb-0 mb-sm-2 order-3 d-none d-sm-block">1 Room/Night</div>

                          <button class="btn btn-sm btn-primary order-4 ml-auto">Select Room</button>


                       </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="content" style="padding: 0 18px;display: none;overflow: hidden;">
              @foreach($room as $rooms)

              @if($rooms->hotel_id == $datas->id)



              <hr>
              <div class="row">


              <div class="col-12 col-md-5 mb-3 mb-md-0"> <img class="img-fluid rounded align-top" src="http://127.0.0.1:8000/imgs/hotel-room-1.jpg" title="Standard Room" alt="Standard Room"> </div>
              <div class="col-12 col-md-7">
                <h4 class="text-5">{{ $rooms->room_name }}</h4>
                <ul class="list-inline mb-2">
                  <li class="list-inline-item"><span class="mr-1 text-black-50"><i class="fas fa-bed"></i></span> double size </li>
                  <li class="list-inline-item"><span class="mr-1 text-black-50"><i class="fas fa-arrows-alt"></i></span> 100m</li>
                </ul>
                <div class="row text-1 mb-3">
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Free WiFi</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Television</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Hair Dryer</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Shower</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Tea Maker</div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="text-dark text-7 line-height-1 font-weight-500 mr-2 mr-lg-3">1000</div>

                  <span class="text-black-50">1 Room/Night</span> </div>
                <div class="d-flex align-items-center mt-3"> <a href="#" data-toggle="modal" data-target="#cancellation-policy">Cancellation Policy</a> <a href="/hotelbooking" class="btn btn-sm btn-outline-primary shadow-none ml-auto">Book Now</a> </div>
              </div>
            </div>




         @endif


         @endforeach
         </div>

              </div>


              @endforeach

            </div><!-- List Item end -->

            <!-- Pagination
            ============================================= -->
            <div class="pagination justify-content-center mt-4 mb-0">
              {{ $data->links() }}
              </div><!-- Paginations end -->

          </div>
        </div>
    </section>
  </div>
</section>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

@include('layouts.footer')







