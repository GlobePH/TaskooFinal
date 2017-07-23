@extends('layouts.master')

@section('content')

<div class="container main">
  <div class="row">
    <h2>PENDING <small>ACTIVITIES</small></h2>
    <div class="table-responsive">
      <table class="table table-hover table-responsive table-condensed">
        <thead class="text-center">
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Worker</th>
            <th class="text-center">Service Type</th>
            <th class="text-center">Amount</th>
            {{-- <th class="text-center">From</th>
            <th class="text-center">To</th> --}}
            <th class="text-center">Status</th>
            <th class="text-center">Date</th>
            <th class="text-center">Action</th>
          </tr> 
        </thead>
        <tbody>
          @foreach($pendingtransactions as $transaction)
          <tr id="{{ $transaction->id }}">
            <td class="text-center">{{ $transaction->id }}</td>
            <td class="text-center">{{ $transaction->worker->first_name }} {{ $transaction->worker->last_name }}</td>
            <td class="text-center">{{ $transaction->service_type }}</td>
            @if($transaction->amount == 0)
            <td class="text-center"><input type="number" id="amount_{{ $transaction->id }}" class="form-control"></td>
            @else
            <td class="text-center">{{ number_format($transaction->amount,2) }}</td>
            @endif
            {{-- <td class="text-center">{{ $transaction->from }}</td>
            <td class="text-center">{{ $transaction->to }}</td> --}}
            <td class="text-center">{{ $transaction->status }}</td>
            <td class="text-center">{{ $transaction->created_at }}</td>
            <td class="text-center">
              <a onclick="deletePending('{{ $transaction->id }}')"  type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              <a onclick="makeActive('{{ $transaction->id }}')" type="button" class="btn btn-success"><i class="fa fa-check"></i></a>
              @if($transaction->amount == 0)
              <a onclick="addAmount('{{ $transaction->id }}')" type="button" class="btn btn-info"><i class="fa fa-plus"></i></a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <h2>ONGOING <small>ACTIVITIES</small></h2>
    <div class="table-responsive">
      <table class="table table-hover table-responsive table-condensed">
        <thead class="text-center">
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Worker</th>
            <th class="text-center">Service Type</th>
            <th class="text-center">Amount</th>
         {{--    <th class="text-center">From</th>
         <th class="text-center">To</th> --}}
         <th class="text-center">Status</th>
         <th class="text-center">Date</th>
         <th class="text-center">Rate</th>
         <th class="text-center">Action</th>
       </tr>
     </thead>
     <tbody>
      @foreach($ongoingtransactions as $transaction)
      <tr>
        <td class="text-center">{{ $transaction->id }}</td>
        <td class="text-center">{{ $transaction->worker->first_name }} {{ $transaction->worker->last_name }}</td>
        <td class="text-center">{{ $transaction->service_type }}</td>
        <td class="text-center">{{ number_format($transaction->amount,2) }}</td>
          {{--   <td class="text-center">{{ $transaction->from }}</td>
          <td class="text-center">{{ $transaction->to }}</td> --}}
          <td class="text-center">{{ $transaction->status }} <i class="fa fa-spinner fa-spin fa-2x"></i></td>
          <td class="text-center">{{ $transaction->created_at }}</td>
          <td class="text-center">
            <select id="rating_{{ $transaction->id }}" class="js-example-basic-single form-control">
            <option value="5">5</option>
              <option value="4">4</option>
              <option value="3">3</option>
              <option value="2">2</option>
              <option value="1">1</option>
            </select>
          </td>
          <td class="text-center">
            <a onclick="moveToFinish('{{ $transaction->id }}')" type="button" class="btn btn-success">Finish <i class="fa fa-thumbs-up"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <h2>PREVIOUS <small>ACTIVITIES</small></h2>
  <div class="table-responsive">
    <table class="table table-hover table-responsive table-condensed">
      <thead class="text-center">
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Worker</th>
          <th class="text-center">Service Type</th>
          <th class="text-center">Amount</th>
          <th class="text-center">Status</th>
          <th class="text-center">Date</th>
          <th class="text-center">Remarks</th>
        </tr>
      </thead>
      <tbody>
        @foreach($previoustransactions as $transaction)
        <tr>
          <td class="text-center">{{ $transaction->id }}</td>
          <td class="text-center">{{ $transaction->worker->first_name }} {{ $transaction->worker->last_name }}</td>
          <td class="text-center">{{ $transaction->service_type }}</td>
          <td class="text-center">{{ number_format($transaction->amount,2) }}</td>
          <td class="text-center">{{ $transaction->status }}</td>
          <td class="text-center">{{ $transaction->created_at }}</td>
          <td class="text-center">{{ $transaction->remarks }}</td>
          <td class="text-center">
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection