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
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <img class=" logo" src="{{asset('img/networking.png')}}" width="150em">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <span class="logoFont">Taskoo</span>
        </div>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      @if(Auth::check())
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ACTIVITIES</a></li>
        <li><a href="#">SETTINGS</a></li>
        <li><a href="{{ url('worker/logout') }}">LOGOUT</a></li>
      </ul>
      @elseif(Auth::guard('customers')->check())
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ACTIVITIES</a></li>
        <li><a href="#" data-toggle="modal" data-target="#setModal">SETTINGS</a></li>
        <li><a href="{{ url('customer/logout') }}">LOGOUT</a></li>
      </ul>
      @else
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ url("/") }}">ABOUT</a></li>
        <li><a href="{{ url("/worker/new") }}">WORKER</a></li>
        <li><a href="{{ url("/customer/new") }}">CUSTOMER</a></li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div>
  <div id="setModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Settings</h4>
        </div>
        <div class="modal-body">
          <form class="form-signin" action="#" method="POST">
                  <div class="form-group">
                    <label for="inputPassword" class="sr-only">Change Password</label>
                    <input style="border-radius: 0px;" type="password" id="inputPassword" class="form-control" placeholder="Enter New Password" required autofocus value="{{ old('login_pass')}}" name="login_pass">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="sr-only">Confirm Password</label>
                    <input style="border-radius: 0px;" type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required name="password">
                  </div>
                  <br>
                  {{csrf_field()}}
                  <center><button style="border-radius: 0px;background-color:#FFF;border:1px #DDD solid;color:#444;width:50%" class="btn btn-lg btn-block" type="submit">SAVE</button></center>
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</nav>
