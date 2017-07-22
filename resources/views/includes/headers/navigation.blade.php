@if(Session::has('errors'))<div class="alert alert-danger flat">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<center>
  @foreach ($errors->all() as $error)
  {{ $error }}<br>
  @endforeach
</center>
</div>
@endif
@if(Session::has('invalid'))<div class="alert alert-danger flat">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<center>
  {{Session::get('invalid')}}
</center>
</div>
@endif
<nav class="navbar navbar-alexis" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <center><img class="img-responsive logo" src="{{asset('img/welder.png')}}" ><strong>TASKOO</strong></center>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      @if(Auth::check())
      
      @elseif(Auth::guard('customers')->check())
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="#">HOME</a></li>
        <li><a href="#">SETTINGS</a></li>
        <li><a href="{{ url('customer/logout') }}">LOGOUT</a></li>
      </ul>
      @else
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">WORKER</a></li>
        <li><a href="#">CUSTOMER</a></li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
