
{{--


    <!-- Tabs -->
    <ul class="nav nav-tabs style-2" id="myTab" role="tablist">
       <li class="nav-item"> <a class="nav-link active" id="hotels-tab" data-toggle="tab" href="#hotels" role="tab" aria-controls="hotels" aria-selected="true">Hotels</a> </li>
       <li class="nav-item"> <a class="nav-link" id="flights-tab" data-toggle="tab" href="#flights" role="tab" aria-controls="flights" aria-selected="true">Flights</a> </li>
    </ul>
    <div class="tab-content bg-light shadow-md rounded rounded-top-0 px-4 pt-4 pb-2" id="myTabContent">
       <!-- Search Hotels -->
       <div class="tab-pane fade show active" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
          <h2 class="text-4 mb-3">Book Domestic and International Hotels</h2>
          <form id="bookingHotels" method="post">
             <div class="form-row">
                <div class="col-md-12 col-lg form-group">
                   <input type="text" class="form-control" id="hotelsFrom" required placeholder="Enter City">
                   <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div class="col-md-6 col-lg form-group">
                   <input id="hotelsCheckIn" type="text" class="form-control" required placeholder="Check In">
                   <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>
                </div>
                <div class="col-md-6 col-lg form-group">
                   <input id="hotelsCheckOut" type="text" class="form-control" required placeholder="Check Out">
                   <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>
                </div>
                <div class="col-md-6 col-lg travellers-class form-group">
                   <input type="text" id="hotelsTravellersClass" class="travellers-class-input form-control" name="hotels-travellers-class" placeholder="Rooms / People" required onkeypress="return false;">
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
                               <input type="text" data-ride="spinner" id="hotels-rooms" class="qty-spinner form-control" value="1" readonly>
                               <div class="input-group-append">
                                  <button type="button" class="btn bg-light-4" data-value="increase" data-target="#hotels-rooms" data-toggle="spinner">+</button>
                               </div>
                            </div>
                         </div>
                      </div>
                      <hr class="mt-2 mb-4">
                      <div class="row align-items-center">
                         <div class="col-sm-7">
                            <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                         </div>
                         <div class="col-sm-5">
                            <div class="qty input-group">
                               <div class="input-group-prepend">
                                  <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#adult-travellers" data-toggle="spinner">-</button>
                               </div>
                               <input type="text" data-ride="spinner" id="adult-travellers" class="qty-spinner form-control" value="1" readonly>
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
                               <input type="text" data-ride="spinner" id="children-travellers" class="qty-spinner form-control" value="0" readonly>
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
                   <a href="/hotelreservation1" class="btn btn-primary btn-block">Search</a>
                </div>
             </div>
          </form>
       </div>
       <!-- Search Flight -->
       <div class="tab-pane fade" id="flights" role="tabpanel" aria-labelledby="flights-tab">
          <h2 class="text-4 mb-3">Book Domestic and International Flights</h2>
          <form method="GET"  autocomplete="off" id="bookingFlight" action="{{url("/flightSearch")}}">
          {{ csrf_field() }}
          <div class="form-row">
             <div class="col-md-8 col-lg-3 form-group">
                <input class="form-control" type="text" name="flightFrom" id="flightFrom"  placeholder="From">
                <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
             </div>
             <div class="col-md-8 col-lg-3 form-group">
                <input class="form-control" type="text"  name="flightTo" id="flightTo"  placeholder="To">
                <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
             </div>
             <div class="col-md-8 col-lg-3 form-group">
                <input class="form-control" name="flightDepart"  id="flightDepart" required required placeholder="Departure Date">
                <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>
             </div>
             <div class="col-md-12 form-group">
                <button class="btn btn-primary btn-block" type="submit">Search</button>
             </div>
          </div>
          </form>
       </div>
    </div>
    <!-- Tabs End -->
 </div>
 </div>

 --}}



 <section class="container">
    <div class="row mt-4">
      <div class="col-md-12 col-lg-10">
        <div id="verticalTab">
          <div class="row no-gutters">
            <div class="col-md-3 my-0 my-md-4">
              <ul class="resp-tabs-list">
                <li style="color:black;"><span><i class="fas fa-plane"></i></span> Book Flight</li>


                <li style="color:black;"><span><i class="fas fa-edit"></i></span> My Booking</li>

                <li style="color:black;"><span><i class="fas fa-bed"></i></span> Book Hotel</li>

                <li style="color:black;"><span><i class="fas fa-location-arrow"></i></span> Track Flight</li>

                <li style="color:black;"><span><i class="fas fa-bed"></i></span> Book Home</li>

              </ul>
            </div>
            <div class="col-md-9">
              <div class="resp-tabs-container bg-light shadow-md rounded h-100 p-3">



              <!-- Search Flights
                ============================================= -->
                <div>
                  <h2 class="font-weight-600 mb-4">Search Flights</h2>
                  <form method="GET"  autocomplete="off" id="bookingFlight" action="{{url("/flightSearch")}}">
                    <div class="mb-3">

                    </div>
                    <div class="form-row">
                      <div class="col-lg-6 form-group">
                        <label for="flightFrom">From</label>
                        <div class="position-relative">
                          <input type="text" class="form-control rounded-right" name="flightFrom"   id="flightFrom" required placeholder="From">
                          <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                      </div>
                      <div class="col-lg-6 form-group">
                        <label for="flightTo">To</label>
                        <div class="position-relative">
                          <input type="text" class="form-control" name="flightTo" id="flightTo" required placeholder="To">
                          <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-lg-6 form-group">
                        <label for="flightDepart">Departure</label>
                        <div class="position-relative">
                          <input name="flightDepart"    id="flightDepart" type="text" class="form-control" required placeholder="Departure Date">
                          <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                      </div>
                      <div class="col-lg-6 form-group">
                        <label for="flightReturn">Return</label>
                        <div class="position-relative">
                          <input name="flightReturn"   id="flightReturn" type="text" class="form-control" required placeholder="Return Date">
                          <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                      </div>
                    </div>
                    <div class="travellers-class form-group">

                            <label for="flightTravellersClass">Travellers and Class</label>
                            <div class="position-relative">
                              <input type="text" id="flightTravellersClass" class="travellers-class-input form-control" name="passengers" placeholder="Travellers, Class" readonly required onkeypress="return false;">
                              <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                              <div class="travellers-dropdown">


                                <div class="row align-items-center">
                                  <div class="col-sm-7">
                                    <p class="mb-sm-0">Passengers <small class="text-muted"></small></p>
                                  </div>
                                  <div class="col-sm-5">
                                    <div class="qty input-group">
                                      <div class="input-group-prepend">
                                        <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightAdult-travellers" data-toggle="spinner">-</button>
                                      </div>
                                      <input type="text" data-ride="spinner" id="flightAdult-travellers" class="qty-spinner form-control" value="1" readonly>
                                      <div class="input-group-append">
                                        <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightAdult-travellers" data-toggle="spinner">+</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr class="my-2">
                                <div class="row align-items-center">

                                      <input type="text" data-ride="spinner" id="flightChildren-travellers" class="qty-spinner form-control" value="0" readonly style="display: none;">

                                </div>

                                <input type="text" data-ride="spinner" id="flightInfants-travellers" class="qty-spinner form-control" value="0" readonly style="display: none;">



                                <button class="btn btn-primary btn-block submit-done" type="button">Done</button>
                              </div>
                            </div>
                          </div>
                    <button class="btn btn-primary btn-block" type="submit">SEARCH FLIGHTS</button>
                  </form>
                </div>
                <!-- Search Flights end -->




                <!-- Search Hotels
                ============================================= -->
                <div>
                  <h2 class="font-weight-600">Manage Booking</h2>

                  <form id="bookingHotels" method="post">
      <div class="form-row">
      <div class="col-lg-6 form-group">
                        <label for="trainFrom">  </label>
                        <div class="position-relative">
                          <input type="text" class="form-control" id="trainFrom" required placeholder="Last Name">
                         </div>
                      </div>
                      <div class="col-lg-6 form-group">
                        <label for="trainTo">  </label>
                        <div class="position-relative">
                          <input type="text" class="form-control" id="trainTo" required placeholder="Booking Reference">
                         </div>
                      </div>
                    </div>
                    <div class="custom-control mb-3">

            <label class="custom-control-label d-block" for="terms">Note: Only bookings on www.oroairways.com on or after March 24, 2019 may use this facility <span class="text-info" data-toggle="tooltip" data-original-title="Car rental suppliers may charge more if a driver is under 30 or over 60. Please check the car's terms &amp; conditions."><i class="far fa-question-circle"></i></span></label>
            </div>

                    <button class="btn btn-primary btn-block" type="submit">CONTINUE</button>
      </form>
                </div>
                <!-- Search Hotels end -->



                <!-- Search Trains
                ============================================= -->
                <div>
                        <div>
                                <h2 class="font-weight-600 mb-4">Search Hotels</h2>
                                <form id="bookingHotels" action="{{url("/hotelreservation1")}}" method="get">
                                  <div class="mb-3">

                                  </div>
                                  <div class="form-row">
                                    <div class="col-lg-6 form-group">
                                      <label for="flightFrom">From</label>
                                      <div class="position-relative">
                                        <input type="text" class="form-control rounded-right" name="destination"   id="flightFrom" required placeholder="Destination">
                                        <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                                    </div>



                                    <div class="col-lg-6 form-group">
                                            <label for="flightFrom">Guests</label>
                                            <div class=" travellers-class form-group">
                                                    <input type="text" name="travelers" id="hotelsTravellersClass" class="travellers-class-input form-control" name="hotels-travellers-class" placeholder="Rooms / People" required onkeypress="return false;">
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
                                                            <input type="text" data-ride="spinner" id="hotels-rooms" class="qty-spinner form-control" value="1" readonly>
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn bg-light-4" data-value="increase" data-target="#hotels-rooms" data-toggle="spinner">+</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <hr class="mt-2 mb-4">
                                                        <div class="row align-items-center">
                                                        <div class="col-sm-7">
                                                            <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="qty input-group">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#adult-travellers" data-toggle="spinner">-</button>
                                                            </div>
                                                            <input type="text" data-ride="spinner" id="adult-travellers" class="qty-spinner form-control" value="1" readonly>
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
                                                            <input type="text" data-ride="spinner" id="children-travellers" class="qty-spinner form-control" value="0" readonly>
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn bg-light-4" data-value="increase" data-target="#children-travellers" data-toggle="spinner">+</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <button class="btn btn-primary btn-block submit-done mt-3" type="button">Done</button>
                                                    </div>
                                                    </div>
                                    </div>




                                  </div>
                                  <div class="form-row">
                                    <div class="col-lg-6 form-group">
                                      <label for="flightDepart">Checkin</label>
                                      <div class="position-relative">
                                        <input name="checkin"    id="hotelsCheckIn" type="text" class="form-control" required placeholder="Checkin Date">
                                        <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                      <label for="flightReturn">Checkout</label>
                                      <div class="position-relative">
                                        <input name="checkout"   id="hotelsCheckOut" type="text" class="form-control" required placeholder="Checkout Date">
                                        <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                                    </div>
                                  </div>


                                  <button class="btn btn-primary btn-block" type="submit">SEARCH FLIGHTS</button>
                                </form>
                              </div>
                </div>
                <!-- Search Trains end -->



                <!-- Search Bus
                ============================================= -->
                <div>
                  <h2 class="font-weight-600">Track Flight</h2>
                  <form id="bookingCars" method="post">
              <div class="form-row">
              <div class="col-12 form-group">
              <label for="carsPickup">  </label>
              <div class="position-relative">
                <input id="carsPickup" type="text" class="form-control" required placeholder="Flight Date">
                <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>
                </div>
               </div>

                </div>
              <div class="form-row">
              <div class="col-6 form-group">
              <label for="carsDropoff"> </label>
              <div class="position-relative">
                <input id=" " type="text" class="form-control" placeholder="Flying From">
                <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                </div>
              </div>
                <div class="col-6 form-group">
              <label for="carsDropoff"> </label>
              <div class="position-relative">
                <input id=" " type="text" class="form-control" placeholder="Flying To">
                <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                </div>
              </div>
                </div>
              <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" id="terms" name="termsConditions" checked="" class="custom-control-input">
            <label class="custom-control-label d-block" for="terms">3-5 digit alphanumeric flight number <span class="text-info" data-toggle="tooltip" data-original-title="Car rental suppliers may charge more if a driver is under 30 or over 60. Please check the car's terms &amp; conditions."><i class="far fa-question-circle"></i></span></label>
            </div>
              <button class="btn btn-primary btn-block" type="submit">TRACK NOW</button>
            </form>
                </div>
                <!-- Search Bus end -->

              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="row">
              <div class="owl-carousel owl-theme slideshow single-slider">
                  <div class="item"><a href="#"><img class=" " src="{{asset('airways/images/slider/banner2.jpg')}}"height="504" alt="banner 1" /></a></div>
                  <div class="item"><a href="#"><img class=" " src="{{asset('airways/images/slider/banner1.jpg')}}" height="504" alt="banner 2" /></a></div>
                  <div class="item"><a href="#"><img class=" " src="{{asset('airways/images/slider/banner3.jpg')}}" height="504" alt="banner 3" /></a></div>
              </div>
            </div>
          </div>
    </div>
  </section>
  <div class="col-lg-2 mt-4 mt-lg-0">

        {{-- <div class="row">
          <div class="owl-carousel owl-theme slideshow single-slider">
              <div class="item"><a href="#"><img class=" " src="{{asset('airways/images/slider/banner2.jpg')}}"height="504" alt="banner 1" /></a></div>
              <div class="item"><a href="#"><img class=" " src="{{asset('airways/images/slider/banner1.jpg')}}" height="504" alt="banner 2" /></a></div>
              <div class="item"><a href="#"><img class=" " src="{{asset('airways/images/slider/banner3.jpg')}}" height="504" alt="banner 3" /></a></div>
          </div>
        </div>
      </div> --}}




      <script src="{{asset('airways/js/theme.js')}}"></script>
