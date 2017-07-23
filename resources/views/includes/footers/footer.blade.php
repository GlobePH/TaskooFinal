
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
	<!-- tooltip -->
	<script>
	$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
	});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script type="text/javascript">
		$(".js-example-basic-multiple").select2();
		$(".js-example-basic-single").select2();

		var url = '{{ env('APP_URL') }}';
		var token = '{{ csrf_token()}}';
	</script>
	
	@if(Auth::check())
	<script type="text/javascript" src="{{ asset('js/controller/workerController.js')}}"></script>
	@elseif(Auth::guard('customers')->check())
	<script type="text/javascript" src="{{ asset('js/controller/customerController.js')}}"></script>
	@else
	<script type="text/javascript" src="{{ asset('js/getLocation.js') }}"></script>
	@endif

	
