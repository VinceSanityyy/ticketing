<!-- Script -->
<script src="{{asset('airways/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('airways/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('airways/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('airways/vendor/owl.carousel/owl.carousel.min.js')}}""></script>
<script src="{{asset('airways/vendor/easy-responsive-tabs/easy-responsive-tabs.js')}}"></script>
<script src="{{asset('airways/vendor/bootstrap-spinner/bootstrap-spinner.js')}}"></script>
<script src="{{asset('airways/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('airways/vendor/daterangepicker/daterangepicker.js')}}"></script>


<script>
$(function() {
 'use strict';
  // Easy Responsive Tabs
  $('#verticalTab').easyResponsiveTabs({
 	 type: 'vertical', //Types: default, vertical, accordion
  });
  // Autocomplete
  $('#hotelsFrom,#flightFrom,#flightTo,#trainFrom,#trainTo,#busFrom,#busTo,#carsCity').autocomplete({
	  minLength: 3,
	  delay: 100,
	  source: function (request, response) {
		$.getJSON(
		 'http://gd.geobytes.com/AutoCompleteCity?callback=?&q='+request.term,
		  function (data) {
			 response(data);
		}
	);
	},
  });
  // Hotels Check In Date
  $('#hotelsCheckIn').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#hotelsCheckIn').val(chosen_date.format('MM-DD-YYYY'));
  });

  // Hotels Check Out Date
  $('#hotelsCheckOut').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#hotelsCheckOut').val(chosen_date.format('MM-DD-YYYY'));
  });

  // Flight Depart Date
  $('#flightDepart').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#flightDepart').val(chosen_date.format('YYYY-MM-DD'));
  });

  // Flight Return Date
  $('#flightReturn').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#flightReturn').val(chosen_date.format('YYYY-MM-DD'));
  });


});
</script>
</body>
</html>
