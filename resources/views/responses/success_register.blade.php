@extends('layouts.master')
@section('css')

@endsection
@section('content')

<div class="container main">
  <div class="row text-center">
    <img src="{{ asset('img/success.png') }}" width="400">
    <br>
    <h1>You are now successfully registered as a {{ $user }}! <br>Thank you.</h1>
    <div class="col-lg-4 col-lg-offset-4">
      <br>
      @if($user == 'worker')
      <a href="{{ url('worker/dashboard') }}" type="button" class="btn btn-lg btn-block flat btn-success">PROCEED TO DASHBOARD</a>
      @else
      <a href="{{ url('customer/dashboard') }}" type="button" class="btn btn-lg btn-block flat btn-success">PROCEED TO DASHBOARD</a>
      @endif
    </div>
  </div>
</div>

@endsection