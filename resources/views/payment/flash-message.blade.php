@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">�</button>
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block" style="background-color:#E96060; height:30px;text-align:center;">
	<button type="button" class="close" data-dismiss="alert">�</button>
        <font color="red"><strong>{{ $message }}</strong></font>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">�</button>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">�</button>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">�</button>
	Please check the form below for errors
</div>
@endif
