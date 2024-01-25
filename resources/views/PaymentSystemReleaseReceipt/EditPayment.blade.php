@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Edit Payment details Receipt</div>
  <div class="card-body">

      <form action="{{ url('PaymentSystemReleaseReceipt/' .$PaymentSystemReleaseReceipt->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$PaymentSystemReleaseReceipt->id}}" id="id" />
        <label>Enrollment No.</label></br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
            @foreach($PaymentSystemReleaseReceipt as $id => $enroll_no)
            <option value="{{ $id }}">{{ $enroll_no}}</option>
            @endforeach
        </select></br>


        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{$PaymentSystemReleaseReceipt->paid_date}}" class="form-control"></br>
        <input type="text" name="paid_date" id="paid_date" value="{{$PaymentSystemReleaseReceipt->amount}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
