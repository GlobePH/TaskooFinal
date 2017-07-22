@extends('layouts.master')

@section('content')

<div class="container main">
  <div class="row">
    <div class="row">
      <p class="mainQuote" align="center">For Customers!</p>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <p class="mainQuote" align="center">LOGIN</p>

        <form class="form-signin" action="{{ url('customer/login') }}" method="POST">
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"  value="{{ old('email')}}">
          </div>
          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
          <div class="form-group{{ $errors->has('passsword') ? ' has-error' : '' }}">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="passsword" class="form-control" placeholder="Password" required>
          </div>
          @if ($errors->has('passsword'))
          <span class="help-block">
            <strong>{{ $errors->first('passsword') }}</strong>
          </span>
          @endif
          <br>
          {{csrf_field()}}
          <button class="btn btn-lg btn-block btn-primary flat" type="submit">LOGIN</button>
        </form>

      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <p class="mainQuote" align="center">REGISTER</p>
        <form class="form-signin" action="{{ url('/customer/register') }}" method="POST" enctype="multipart/form-data">
         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email" required  value="{{ old('email')}}" name="email">
        </div>
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
          <label for="inputFirstName" class="sr-only">First Name</label>
          <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required  value="{{ old('first_name')}}" name="first_name">
        </div>
        @if ($errors->has('first_name'))
          <span class="help-block">
            <strong>{{ $errors->first('first_name') }}</strong>
          </span>
          @endif
        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
          <label for="inputUsername" class="sr-only">Last Name</label>
          <input type="text" id="Last Name" class="form-control" placeholder="Last Name" required value="{{ old('last_name')}}" name="last_name">
        </div>
        @if ($errors->has('last_name'))
          <span class="help-block">
            <strong>{{ $errors->first('last_name') }}</strong>
          </span>
          @endif
        <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}">
          <label for="inputContactNo" class="sr-only">Contact Number</label>
          <input type="number" id="inputContactNo" class="form-control" style="border-radius: 0px;" value="{{ old('contact_number')}}" placeholder="Contact Number (069658695)" maxlength="9" required name="contact_number">
        </div>
        @if ($errors->has('contact_number'))
          <span class="help-block">
            <strong>{{ $errors->first('contact_number') }}</strong>
          </span>
          @endif
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        </div>
        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label for="inputPassword" class="sr-only">Confirm Password</label>
          <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
        </div>
        @if ($errors->has('password_confirmation'))
          <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
          @endif
        {{ csrf_field() }}
        <!-- <button class="btn btn-lg btn-block btn-primary" type="button" id="btnVerify"><img id="loader" src='{{asset('src/img/index/loader.gif')}}' class="fade" style="margin: -30px; height: 80px;" ><span id="txt">Verify Phone Number</span></button><br> -->
        <button class="btn btn-lg btn-block btn-primary flat"  type="submit">Continue</button>
      </form>
    </div>
  </div>
  <br /><br />
</div>
</div>
</div>

@endsection