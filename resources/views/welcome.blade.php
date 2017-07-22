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


<br /><br />
</div>
<!--Second Page -->
<br /><br /><br /><br />
<div class="container" id="secondPage">
<br /><br />
  <center><p class="mainQuote">Help Someone and Earn with Simple Work!</p></center>
  <em><center>"Unemployed Filipinos are not a nuisance anymore but a big help!"</center></em><br /><br />
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 " align="center"><img src="{{asset('img/lazy.png')}}"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 "><h3>Be Productive and Useful!</h3><p class="text-justify" style="padding-right:7em;">Effect? Great decrease of headache caused by most unemployed Filipinos like staying on bed whole day, browsing social media all day, drugs and alcohol, criminal activities and so much more. Turning them into a productive and useful persons while earning money at the same time, hunting for a stable job is a REVOLUTION!</p></div>
  </div>
</div>

<br /><br /><br /><br /><br /><br /><br /><br />
<!--Third Page -->
<div class="container" id="thirdPage">

  <center><p class="mainQuote">Choose your Helper!</p></center>
  <em><center>"These are the people nearby you inside the app that can help you in their simple needs!"</center></em><br /><br />
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/wrench.png')}}" width="150em"><center><strong>Mechanic</strong></center><p class="text-justify">Can work with appliances, automobile, and even your bike!</p></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/hammer.png')}}" width="150em"><center><strong>Carpenter</strong></center><p class="text-justify">He build walls, roofs, doors, or even your whole house!</p></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/bolt.png')}}" width="150em"><center><strong>Electrician</strong></center><p class="text-justify">Fixes electrical problems such as wirings, switches or even your phone charger!</p></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/plumbering.png')}}" width="150em"><center><strong>Plumber</strong></center><p class="text-justify">He is the one doing the dirty work such as clogged toilets, cleaning pipes and more!</p></div>
  </div>
  <div class="row">
    <br />
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/coding.png')}}" width="150em"><center><strong>Programmer</strong></center><p class="text-justify">Can create any program or application depending on your needs!</p></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/tutorial.png')}}" width="150em"><center><strong>Tutor</strong></center><p class="text-justify">They teach different subject matter based on what you want to learn!</p></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/broom.png')}}" width="150em"><center><strong>House Helper</strong></center><p class="text-justify">Need a help with in your household like cleaning, cooking, or washing of clothes? They're here just for you!</p></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 helper" align="center"><img src="{{asset('img/typewriter.png')}}" width="150em"><center><strong>Encoder</strong></center><p class="text-justify">They are your type...ist! They can encode your records on different microsoft office applications!"</p></div>
  </div>
</div>

</div>


@endsection
