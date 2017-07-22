@extends('layouts.master')

@section('content')

<div class="container main">
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 homeSidebar">
      <br />
      <center><img src="{{asset('img/wrench.png')}}" width="100em"></center>
      <div class="row" align="center"><strong>Alexis</strong></div><br />
      <div class="row"align="center">XP: <strong>100</strong></div>
      <div class="row"align="center">Skill: <strong>Mechanic</strong></div>
      <div class="row"align="center"><img src="{{asset('img/rank/rook.png')}}" width="30em">&nbsp;&nbsp;Rank: <strong>Average</strong></div>

      <br />
      <br />
      <div class="row"align="center">Secondary Skills:<br />
        <img src="{{asset('img/rank/knight.png')}}" width="30em" align="center">&nbsp;&nbsp;<strong>Programmer</strong><br />
        <img src="{{asset('img/rank/knight.png')}}" width="30em" align="center">&nbsp;&nbsp;<strong>Electrician</strong></div>
    </div>
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 geoMap">Input here the Geomapping
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
    </div>

  </div>
</div>

@endsection
