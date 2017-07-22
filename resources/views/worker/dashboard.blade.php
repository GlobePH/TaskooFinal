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
  <!-- Modal -->
<div id="setModalC" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><img src="{{asset('img/wrench.png')}}" width="30em"> Settings</h4>
      </div>
      <div class="modal-body">
        <p>User Profile</p>
        <form class="form-signin" action="#" method="POST">
        <label for="choosePriSkill">Change Primary Skill:</label>
        <select name="reg_w_primary" class="js-example-basic-single form-control">
          <option value="Mechanic">Mechanic</option>
          <option value="Carpenter">Carpenter</option>
          <option value="Electrician">Electrcian</option>
          <option value="Programmer">Programmer</option>
          <option value="Tutor">Tutor</option>
          <option value="House Keeper">House Keeper</option>
          <option value="Plumber">Plumber</option>
          <option value="Encoder">Encoder</option>
        </select>
        <label for="levelPriSkill">Change Rank:</label>
        <select name="reg_w_rank" class="js-example-basic-single form-control">
          <option value="knight">Newbie</option>
          <option value="rook">Average</option>
          <option value="crown">Expert</option>
        </select>
        <br />
        <label for="levelPriSkill">Change Secondary Skills:</label>
        <select name="reg_w_secondary[]" class="js-example-basic-multiple form-control flat" multiple="multiple">
          <option value="Mechanic">Mechanic</option>
          <option value="Carpenter">Carpenter</option>
          <option value="Electrician">Electrcian</option>
          <option value="Programmer">Programmer</option>
          <option value="Tutor">Tutor</option>
          <option value="House Keeper">House Keeper</option>
          <option value="Plumber">Plumber</option>
          <option value="Encoder">Encoder</option>
        </select>
      </form>
        <br /><br />
        <p>Security</p>
        <form class="form-signin" action="#" method="POST">
        <label for="levelPriSkill">Change Password:</label>
        <input style="border-radius: 0px;" type="password" id="inputPassword" class="form-control" placeholder="New Password" required name="password">
        <label for="levelPriSkill">Confirm Password:</label>
        <input style="border-radius: 0px;" type="password" id="inputPassword" class="form-control" placeholder="Change Password" required name="password">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>

@endsection
