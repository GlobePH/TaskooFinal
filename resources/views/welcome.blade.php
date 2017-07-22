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
      <li><a href="#thirdPage">WORKER&nbsp;&nbsp;</a></li>
      <li><a href="#fourthPage">CUSTOMER&nbsp;&nbsp;</a></li>
    </ul>





</div>
</div>
</nav>
<div class="container main">
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

<br /><br />

      </div>
<br /><br /><br /><br /><br /><br /><br /><br />
<!--Second Page -->
<div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">1</div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">2</div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">3</div>
</div>
<!--Last Second Page -->

<!--Third Page Worker-->
<br /><br /><br /><br /><br /><br /><br /><br />
      <div class="container" id="thirdPage">
        <div class="row">
          <p class="mainQuote" align="center">For Workers!</p>
          <small><em><center>"Simple work that can make you productive and let you earn money at the same time while seeking a stable job."</center></em></small><br /><br />
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="mainQuote" align="center">LOGIN</p>
            <form class="form-signin" action="#" method="POST">
                    <div class="form-group">
                      <label for="inputEmail" class="sr-only">Email address</label>
                      <input style="border-radius: 0px;" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="{{ old('login_email')}}" name="login_email">
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="sr-only">Password</label>
                      <input style="border-radius: 0px;" type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                    </div>
                    <br>
                    {{csrf_field()}}
                    <button style="border-radius: 0px;background-color:#FFF;border:1px #DDD solid;color:#444;" class="btn btn-lg btn-block" type="submit">LOGIN</button>
                  </form>
                  <br />
                  <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><img src="{{asset('img/money.png')}}" width="100em"></div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><br /><em>"Earning money while seeking a stable job is a pretty good help for everyone to sustain their needs."</em></div>
                  </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="mainQuote" align="center">REGISTER</p>
            <form class="form-signin" action="#" method="POST" enctype="multipart/form-data">
              <label for="inputEmail" class="sr-only">Email</label>
              <input type="text" id="inputEmail" class="form-control" style="border-radius: 0px;" placeholder="Email" required autofocus value="{{ old('first_name')}}" name="email"><br>
            <label for="inputFirstName" class="sr-only">First Name</label>
            <input type="text" id="inputFirstName" class="form-control"  style="border-radius: 0px;" placeholder="First Name" required autofocus value="{{ old('first_name')}}" name="first_name"><br>
            <label for="inputUsername" class="sr-only">Last Name</label>
            <input type="text" id="Last Name" class="form-control" style="border-radius: 0px;" placeholder="Last Name" required value="{{ old('last_name')}}" name="last_name"><br>
            <label for="inputContactNo" class="sr-only">Contact Number</label>
            <input type="number" id="inputContactNo" class="form-control" style="border-radius: 0px;" placeholder="Contact Number (90********)" maxlength="10" required name="contact_no"><br>
            <label for="choosePriSkill">Primary Skill:</label>
            <select>
  <option value="Mechanic">Mechanic</option>
  <option value="Carpenter">Carpenter</option>
  <option value="Electrician">Electrcian</option>
  <option value="Programmer">Programmer</option>
  <option value="Tutor">Tutor</option>
  <option value="House Keeper">House Keeper</option>
  <option value="Plumber">Plumber</option>
  <option value="Encoder">Encoder</option>

   </select>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="levelPriSkill">Rank:</label>
            <select>
  <option value="Mechanic">Newbie</option>
  <option value="Carpenter">Average</option>
  <option value="Electrician">Expert</option>
  </select>
  <br />
  <br />
  <div class="row">
  <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6"><label for="levelPriSkill">Upload your CV:</label>  <input type="file" name="fileToUpload" id="fileToUpload"></div>
    <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6"><label for="levelPriSkill">Upload your Selfie with your ID:</label>  <input type="file" name="fileToUpload" id="fileToUpload"></div>
              {{ csrf_field() }}
  </div><br />
            <button style="border-radius: 0px;background-color:#FFF;border:1px #DDD solid;color:#444;" class="btn btn-lg btn-block btn-primary"  type="submit">Continue</button>

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
                        <input style="border-radius: 0px;" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="{{ old('login_email')}}" name="login_email">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input style="border-radius: 0px;" type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                      </div>
                      <br>
                      {{csrf_field()}}
                      <button style="border-radius: 0px;background-color:#FFF;border:1px #DDD solid;color:#444;" class="btn btn-lg btn-block" type="submit">LOGIN</button>
                    </form>
                    <br />
                    <div class="row">
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><img src="{{asset('img/analytics.png')}}" width="100em">&nbsp;&nbsp;&nbsp;</div>
                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><br />&nbsp;&nbsp;&nbsp;<em>"Pick a worker for your needs and you just help our economy by decreasing those unemployed amigo!"</em></div>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <p class="mainQuote" align="center">REGISTER</p>
              <form class="form-signin" action="#" method="POST" enctype="multipart/form-data">
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="text" id="inputEmail" class="form-control" style="border-radius: 0px;" placeholder="Email" required autofocus value="{{ old('first_name')}}" name="email"><br>
              <label for="inputFirstName" class="sr-only">First Name</label>
              <input type="text" id="inputFirstName" class="form-control"  style="border-radius: 0px;" placeholder="First Name" required autofocus value="{{ old('first_name')}}" name="first_name"><br>
              <label for="inputUsername" class="sr-only">Last Name</label>
              <input type="text" id="Last Name" class="form-control" style="border-radius: 0px;" placeholder="Last Name" required value="{{ old('last_name')}}" name="last_name"><br>
              <label for="inputContactNo" class="sr-only">Contact Number</label>
              <input type="number" id="inputContactNo" class="form-control" style="border-radius: 0px;" placeholder="Contact Number (90********)" maxlength="10" required name="contact_no"><br>
                {{ csrf_field() }}
    <br />
              <button style="border-radius: 0px;background-color:#FFF;border:1px #DDD solid;color:#444;" class="btn btn-lg btn-block btn-primary"  type="submit">Continue</button>

        </form>
            </div>
          </div>
          <br /><br />
        </div>
  <!--End of Fourth-->

</div>
    </body>
</html>
