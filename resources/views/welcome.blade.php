@extends('layouts.master')

@section('content')
<div class="container firstPage">
  <div class="row">
    <center><p class="mainQuote">Making the Unemployed Productive and Useful to the Community!</p></center>
    <br /><br /><br />
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 "><center>
      <img class="mainRight" src="{{asset('img/worker.png')}}" width="150em">
      <img class="mainRight" src="{{asset('img/electrician.png')}}" width="150em">
      <img class="mainRight" src="{{asset('img/mechanic.png')}}" width="150em">
    </center>
    <br />
    <br />
    <p class="mainTheme"><strong>Taskoo</strong> is a web and mobile app that helps two people. First, the unemployed user who wants to be productive and earn money. Second, the customer user who wants to avail a certain job. By using this app, unemployed people won't be a headache for our economy anymore but a useful element for the success of the society.</p>

  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mainLeft">

    <center><img class="mainRight" src="{{asset('img/start.png')}}" width="80em"></center>


    <center><p class="mainQuote">START NOW!</p></center>



    <center>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('worker/new') }}"><button class="workerButton" type="button" align="center"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;&nbsp;&nbsp;WORKER</button></a></center><br />
    <center>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('customer/new') }}"><button class="workerButton" type="button" align="center"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;&nbsp;CUSTOMER</button></a></center>
  </div>
</div>
</div class="row">
<br /><br />
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">



  <br /><br />

</div>


</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">



</div>
</div>

@endsection

