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
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 geoMap">Input here the Geomapping</div>
</div>
</div>

@endsection