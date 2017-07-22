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



    <center>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#thirdPage"><button class="workerButton" type="button" align="center"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;&nbsp;&nbsp;WORKER</button></a></center><br />
    <center>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#fourthPage"><button class="workerButton" type="button" align="center"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;&nbsp;CUSTOMER</button></a></center>
  </div>
</div>
</div class="row">
<br /><br />


<br /><br /><br /><br />
</div>




<!--Fourth -->
<div class="container" id="secondPage">

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

<!--Third Page Worker-->
<br /><br /><br /><br /><br /><br /><br /><br />
      <div class="container" id="thirdPage">
        <div class="row">
          <p class="mainQuote" align="center">For Workers!</p>
          <em><center>"Simple work that can make you productive and let you earn money at the same time while seeking a stable job."</center></em><br /><br />
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
            <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required  value="{{ old('first_name')}}" name="first_name"><br>
            <label for="inputUsername" class="sr-only">Last Name</label>
            <input type="text" id="Last Name" class="form-control" placeholder="Last Name" required value="{{ old('last_name')}}" name="last_name"><br>
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
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
          </div>
          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
          <br>
          {{csrf_field()}}
          <button class="btn btn-lg btn-block" type="submit">LOGIN</button>
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
      </div>
      <br /><br />
    </div>
    <!--End of Fourth-->
  </div>
</div>
</div>
@endsection
