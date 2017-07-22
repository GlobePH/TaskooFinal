<!Doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taskoo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">

<!-- Alexis CSS -->
<link href="{{asset('css/alexis.css')}}" rel="stylesheet" type="text/css">

<!--Bootstrap? Haha -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body>

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



<center>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#thirdPage"><button class="workerButton" type="button" align="center"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;&nbsp;&nbsp;WORKER</button></a></center><br />
<center>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#fourthPage"><button class="workerButton" type="button" align="center"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;&nbsp;CUSTOMER</button></a></center>
    </div>
  </div>
</div class="row">
<br /><br />
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">







  </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">



 </div>
      </div>
<!--Third Page Worker-->
<br /><br /><br /><br /><br /><br /><br /><br />
      <div class="container" id="thirdPage">
        <div class="row">
          <p class="mainQuote" align="center">For Workers!</p>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="mainQuote" align="center">LOGIN</p>
            <form class="form-signin" action="#" method="POST">
                    <div class="form-group">
                      <label for="inputEmail" class="sr-only">Email address</label>
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="{{ old('login_email')}}" name="login_email">
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="sr-only">Password</label>
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                    </div>
                    <br>
                    {{csrf_field()}}
                    <button class="btn btn-lg btn-block" type="submit">LOGIN</button>
                  </form>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="mainQuote" align="center">REGISTER</p>
            <form class="form-signin" action="#" method="POST" enctype="multipart/form-data">
              <label for="inputEmail" class="sr-only">Email</label>
              <input type="text" id="inputEmail" class="form-control" placeholder="Email" required autofocus value="{{ old('first_name')}}" name="email"><br>
            <label for="inputFirstName" class="sr-only">First Name</label>
            <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus value="{{ old('first_name')}}" name="first_name"><br>
            <label for="inputUsername" class="sr-only">Last Name</label>
            <input type="text" id="Last Name" class="form-control" placeholder="Last Name" required value="{{ old('last_name')}}" name="last_name"><br>
            <label for="inputContactNo" class="sr-only">Contact Number</label>
            <input type="number" id="inputContactNo" class="form-control" style="border-radius: 0px;" placeholder="Contact Number (90********)" maxlength="10" required name="contact_no"><br>
            {{ csrf_field() }}
            <!-- <button class="btn btn-lg btn-block btn-primary" type="button" id="btnVerify"><img id="loader" src='{{asset('src/img/index/loader.gif')}}' class="fade" style="margin: -30px; height: 80px;" ><span id="txt">Verify Phone Number</span></button><br> -->
            <input type="submit" class="btn btn-lg btn-block" name="continue_signup"/>
         <div id="verify" class="fade">
            <input type="text" id="vcode" class="form-control" style="border-radius: 0px;" placeholder="Verification Code" required name="verification_code"><br><button class="btn btn-lg btn-block btn-primary"  type="submit">Continue</button>
          </div>
      </form>
          </div>
        </div>
        <br /><br />
      </div>

      <!--End of Third Page -->

  <!--Fourth -->
  <br /><br /><br /><br /><br /><br /><br /><br />
        <div class="container" id="fourthPage">
          <div class="row">
            <p class="mainQuote" align="center">For Customers!</p>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <p class="mainQuote" align="center">LOGIN</p>
              <form class="form-signin" action="#" method="POST">
                      <div class="form-group">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="{{ old('login_email')}}" name="login_email">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                      </div>
                      <br>
                      {{csrf_field()}}
                      <button class="btn btn-lg btn-block" type="submit">LOGIN</button>
                    </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <p class="mainQuote" align="center">REGISTER</p>
              <form class="form-signin" action="#" method="POST" enctype="multipart/form-data">
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Email" required autofocus value="{{ old('first_name')}}" name="email"><br>
              <label for="inputFirstName" class="sr-only">First Name</label>
              <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus value="{{ old('first_name')}}" name="first_name"><br>
              <label for="inputUsername" class="sr-only">Last Name</label>
              <input type="text" id="Last Name" class="form-control" placeholder="Last Name" required value="{{ old('last_name')}}" name="last_name"><br>
              <label for="inputContactNo" class="sr-only">Contact Number</label>
              <input type="number" id="inputContactNo" class="form-control" style="border-radius: 0px;" placeholder="Contact Number (90********)" maxlength="10" required name="contact_no"><br>
              {{ csrf_field() }}
              <!-- <button class="btn btn-lg btn-block btn-primary" type="button" id="btnVerify"><img id="loader" src='{{asset('src/img/index/loader.gif')}}' class="fade" style="margin: -30px; height: 80px;" ><span id="txt">Verify Phone Number</span></button><br> -->
              <input type="submit" class="btn btn-lg btn-block" name="continue_signup"/>
           <div id="verify" class="fade">
              <input type="text" id="vcode" class="form-control" style="border-radius: 0px;" placeholder="Verification Code" required name="verification_code"><br><button class="btn btn-lg btn-block btn-primary"  type="submit">Continue</button>
            </div>
        </form>
            </div>
          </div>
          <br /><br />
        </div>
  <!--End of Fourth-->
    </div>
</div>
</div>
    </body>
</html>
