	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

	@if(Auth::check())
	<script type="text/javascript" src="{{ asset('js/controller/workerController.js')}}"></script>
	@elseif(Auth::guard('customers')->check())
	<script type="text/javascript" src="{{ asset('js/controller/customerController.js')}}"></script>
	@endif
