@extends('layouts.master')

@section('content')

<div class="container main">
  <div class="row">
    <p class="mainQuote" align="center">For Workers!</p>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <p class="mainQuote" align="center">LOGIN</p>
      <form class="form-signin" action="{{ url('worker/login') }}" method="POST">
        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email Address</label>
          <input style="border-radius: 0px;" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="{{ old('email')}}" name="email">
        </div>
        <div class="form-group">
          <label for="inputPassword" class="sr-only">Password</label>
          <input style="border-radius: 0px;" type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        </div>
        <br>
        {{csrf_field()}}
        <button class="btn btn-lg btn-block btn-primary flat" type="submit">LOGIN</button>
      </form>
      <br />
      <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><img src="{{asset('img/money.png')}}" width="100em"></div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><br /><em>"Earning money while seeking a stable job is a pretty good help for everyone to sustain their needs."</em></div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <p class="mainQuote" align="center">REGISTER</p>

      <form class="form-signin" action="{{ url('worker/register') }}" method="POST" enctype="multipart/form-data"  data-toggle="validator">
        <div class="form-group">
          <input type="text" id="inputEmail" class="form-control" style="border-radius: 0px;" placeholder="Email Address" required autofocus value="{{ old('reg_w_email')}}" name="reg_w_email">
        </div>
        <div class="form-group">
          <input type="text" id="inputFirstName" class="form-control"  style="border-radius: 0px;" placeholder="First Name" required autofocus value="{{ old('reg_w_first_name')}}" name="reg_w_first_name">
        </div>
        <div class="form-group">
         <input type="text" id="Last Name" class="form-control" style="border-radius: 0px;" placeholder="Last Name" required value="{{ old('reg_w_last_name')}}" name="reg_w_last_name">
       </div>
       <div class="form-group">
        <input type="number" pattern="^[_A-z0-9]{1,}$"   id="inputContactNo" class="form-control" style="border-radius: 0px;" placeholder="Contact Number (06936857)" maxlength="10" required name="reg_w_contact_no">
      </div>
      <div class="form-group">
        <input type="text" id="address" class="form-control"  style="border-radius: 0px;" placeholder="Address"  disabled="">
        <input type="hidden" id="city1" class="form-control"  style="border-radius: 0px;"  name="reg_w_city">
        <input type="hidden" id="address1" class="form-control"  style="border-radius: 0px;" name="reg_w_address">
      </div>
      <div class="form-group">
        <input type="password" id="Last Name" class="form-control" style="border-radius: 0px;" placeholder="Password" required  name="reg_w_password">
      </div>
      <div class="form-group">
        <input type="password" id="Last Name" class="form-control" style="border-radius: 0px;" placeholder="Confirm Password" required name="reg_w_c_password">
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <label for="choosePriSkill">Primary Skill:</label>
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
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <label for="levelPriSkill">Rank:</label>
          <select name="reg_w_rank" class="js-example-basic-single form-control">
            <option value="knight">Newbie</option>
            <option value="rook">Average</option>
            <option value="crown">Expert</option>
          </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label for="levelPriSkill">Secondary Skills:</label>
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
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
          <label for="levelPriSkill">Latitude</label>
          <input type="text" id="w_lat" class="form-control flat" disabled="">
          <input type="hidden" id="w_lat1" class="form-control flat" name="w_lat" >
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
          <label for="levelPriSkill">Longitude</label>
          <input type="text" id="w_lng" class="form-control flat"  disabled="">
          <input type="hidden" id="w_lng1" class="form-control flat" name="w_lng">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
          <label for="levelPriSkill">Upload your CV (PDF)</label>
          <input type="file" class="form-control flat" name="reg_w_cv" required="">
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
          <label for="levelPriSkill">Upload your Selfie with your ID:</label>
          <input type="file" class="form-control flat" name="reg_w_id" required="">
        </div>
        {{ csrf_field() }}
      </div><br />
      <button class="btn btn-lg btn-block btn-primary flat"  type="submit">Continue</button>
    </form>

    <br><br>
  </div>
</div>
</div>

@endsection