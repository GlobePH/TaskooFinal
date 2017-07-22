@extends('layouts.master')

@section('content')

<div class="container main">
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 homeSidebar">
      <br /><br />

      <a href="#"><div class="row"><img src="{{asset('img/wrench.png')}}" width="30em">&nbsp;&nbsp;Mechanic</div></a>
      <a href="#"><div class="row"><img src="{{asset('img/hammer.png')}}" width="30em">&nbsp;&nbsp;Carpenter</div></a>
      <a href="#"><div class="row"><img src="{{asset('img/bolt.png')}}" width="30em">&nbsp;&nbsp;Electrician</div></a>
      <a href="#"><div class="row"><img src="{{asset('img/coding.png')}}" width="30em">&nbsp;&nbsp;Programmer</div></a>
      <a href="#"><div class="row"><img src="{{asset('img/broom.png')}}" width="30em">&nbsp;&nbsp;House Helper</div></a>
      <a href="#"><div class="row"><img src="{{asset('img/plumbering.png')}}" width="30em">&nbsp;&nbsp;Plumber</div></a>
      <a href="#"><div class="row"><img src="{{asset('img/typewriter.png')}}" width="30em">&nbsp;&nbsp;Encoder</div></a>
      <a href="#"><div class="row"><img src="{{asset('img/tutorial.png')}}" width="30em">&nbsp;&nbsp;Tutor</div></a>
    <!--  <div class="dropdown">
   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Search for Worker
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
     <li><a href="#">Mechanic</a></li>
     <li><a href="#">Carpenter</a></li>
     <li><a href="#">Electrician</a></li>
     <li><a href="#">Tutor</a></li>
     <li><a href="#">House Keeper</a></li>
     <li><a href="#">House Helper</a></li>
     <li><a href="#">Plumber</a></li>
     <li><a href="#">Encoder</a></li>
     <li><a href="#">Programmer</a></li>
   </ul>
 </div>
-->
</div>
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
  <div class="row">
    <center>
      <h4><i class="fa fa-map-marker"></i><i id="loader" class="fa fa-spinner fa-spin"></i> <span id="currentLocation"></span></h4>
      <h4><i class="fa fa-map"></i><i id="loaderLatLng" class="fa fa-spinner fa-spin"></i> <span id="currentLatLng"></span></h4>
    </center>
  </div>
  <hr>
  <div class="row" style="padding: 10px;">
  <div id="map" style="width: 100%; height: 70vh;"></div>
  </div>
  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><img src="{{asset('img/wrench.png')}}" width="30em"> Alexis Lingad</h4>
      </div>
      <div class="modal-body">
        <p>Primary Skill: <img src="{{asset('img/wrench.png')}}" width="30em">Mechanic</p>
        <p>XP: 100</p>
        <p>Rank: <img src="{{asset('img/rank/crown.png')}}" width="30em">Expert</p>
        <p>Secondary Skill: <img src="{{asset('img/coding.png')}}" width="30em">Programmer, <img src="{{asset('img/bolt.png')}}" width="30em">Electrician</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>

@endsection
