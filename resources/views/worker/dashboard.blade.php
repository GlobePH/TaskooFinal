@extends('layouts.master')

@section('content')

<div class="container main">
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 homeSidebar">
      <br />
      <center><img src="{{asset('img/wrench.png')}}" width="100em"></center><br>
      <div class="row" align="center"><strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong></div><br />
      <div class="row"align="center">XP: <strong>{{ Auth::user()->profile->xp }}</strong></div>
      <div class="row"align="center">Skill: <strong>{{ Auth::user()->profile->primary_skill }}</strong></div>
      <div class="row"align="center"><img src="{{asset('img/rank/'.Auth::user()->profile->rank_pic) }}" width="30em">&nbsp;&nbsp;Rank: <strong>{{ Auth::user()->profile->rank }}</strong></div>

      <br />
      <br />

      <div class="row">
        <p class="text-center">Secondary Skills:</p>
        @foreach(Auth::user()->profile->secondaryService as $name)

        <i class="fa fa-circle"></i><strong>{{ $name->skill_name }}</strong><br>
        @endforeach
      </div>
    </div>
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" >
    
    <div class="row" style="padding: 10px;">
        <h2>CONFIRM <small>TRANSACTION</small></h2>
        <div class="table-responsive">
          <table class="table table-hover table-responsive table-condensed">
            <thead class="text-center">
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Customer Name</th>
                <th class="text-center">Service Type</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Date</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($confirms as $transaction)
              <tr>
                <td class="text-center">{{ $transaction->id }}</td>
                <td class="text-center">{{ $transaction->customer->first_name }} {{ $transaction->customer->last_name }}</td>
                <td class="text-center">{{ $transaction->service_type }}</td>
                <td class="text-center">{{ number_format($transaction->amount,2) }}</td>
                <td class="text-center">{{ $transaction->status }}</td>
                <td class="text-center">{{ $transaction->created_at }}</td>
                <td class="text-center">
                  <a onclick="confirmTransac('{{ $transaction->id }}')" type="button" class="btn btn-success">Confirm <i class="fa fa-thumbs-up"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="row" style="padding: 10px;">
        <h2>INVITATION <small>FROM CUSTOMERS</small></h2>
        <div class="table-responsive">
          <table class="table table-hover table-responsive table-condensed">
            <thead class="text-center">
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Customer Name</th>
                <th class="text-center">Service Type</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Date</th>
                {{-- <th class="text-center">Action</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach($pendings as $transaction)
              <tr>
                <td class="text-center">{{ $transaction->id }}</td>
                <td class="text-center">{{ $transaction->customer->first_name }} {{ $transaction->customer->last_name }}</td>
                <td class="text-center">{{ $transaction->service_type }}</td>
                <td class="text-center">{{ number_format($transaction->amount,2) }}</td>
                <td class="text-center">{{ $transaction->status }}</td>
                <td class="text-center">{{ $transaction->created_at }}</td>
               {{--  <td class="text-center">
                  <a href="{{ url('customer/approve') }}" type="button" class="btn btn-success">Finish <i class="fa fa-check"></i></a>
                </td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="row" style="padding: 10px;">
        <h2>ONGOING <small>ACTIVITIES</small></h2>
        <div class="table-responsive">
          <table class="table table-hover table-responsive table-condensed">
            <thead class="text-center">
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Customer Name</th>
                <th class="text-center">Service Type</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Date</th>
                {{-- <th class="text-center">Action</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach($ongoings as $transaction)
              <tr>
                <td class="text-center">{{ $transaction->id }}</td>
                <td class="text-center">{{ $transaction->customer->first_name }} {{ $transaction->customer->last_name }}</td>
                <td class="text-center">{{ $transaction->service_type }}</td>
                <td class="text-center">{{ number_format($transaction->amount,2) }}</td>
                <td class="text-center">{{ $transaction->status }}</td>
                <td class="text-center">{{ $transaction->created_at }}</td>
               {{--  <td class="text-center">
                  <a href="{{ url('customer/approve') }}" type="button" class="btn btn-success">Finish <i class="fa fa-check"></i></a>
                </td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="row" style="padding: 10px;">
        <h2>FINISHED <small>ACTIVITIES</small></h2>
        <div class="table-responsive">
          <table class="table table-hover table-responsive table-condensed">
            <thead class="text-center">
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Customer Name</th>
                <th class="text-center">Service Type</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Date</th>
                <th class="text-center">Rating</th>
                {{-- <th class="text-center">Action</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach($previous as $transaction)
              <tr>
                <td class="text-center">{{ $transaction->id }}</td>
                <td class="text-center">{{ $transaction->customer->first_name }} {{ $transaction->customer->last_name }}</td>
                <td class="text-center">{{ $transaction->service_type }}</td>
                <td class="text-center">{{ number_format($transaction->amount,2) }}</td>
                <td class="text-center">{{ $transaction->status }}</td>
                <td class="text-center">{{ $transaction->created_at }}</td>
                <td class="text-center">{{ $transaction->remarks }}</td>
               {{--  <td class="text-center">
                  <a href="{{ url('customer/approve') }}" type="button" class="btn btn-success">Finish <i class="fa fa-check"></i></a>
                </td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
    </div>

  </div>
</div>

@endsection
