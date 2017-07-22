@if(Session::has('errors'))<div class="alert alert-danger flat">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<center>
    @foreach ($errors->all() as $error)
    {{ $error }}<br>
    @endforeach
</center>
</div>
@endif
<nav class="navbar navbar-alexis">
  <div class="container main">

    <div class="row">






      <div class="navbar-header" align="center">
        <center><img class="img-responsive logo" src="{{asset('img/welder.png')}}" ><strong>TASKOO</strong></center>
      </div>
      <ul class="nav navbar-nav nav-alexis" align="center">
        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></li>
        <li><a href="#">ABOUT&nbsp;&nbsp;</a></li>
        <li><a href="#">WORKER&nbsp;&nbsp;</a></li>
        <li><a href="#">CUSTOMER&nbsp;&nbsp;</a></li>
      </ul>





    </div>
  </div>
</nav>