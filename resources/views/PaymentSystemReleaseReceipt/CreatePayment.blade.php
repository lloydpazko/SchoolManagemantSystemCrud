@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Payment Receipt</div>
  <div class="card-body">

      <form action="{{ url('PaymentSystemReleaseReceipt') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment No.</label></br>
        {{-- <input type="text" name="course_id" id="course_id" class="form-control"></br> --}}
        <select name="enrollment_id" id="enrollment_id" class="form-control">
            @foreach($PaymentSystemReleaseReceipt as $id => $enroll_no)
            <option value="{{ $id }}">{{ $enroll_no}}</option>
            @endforeach
        </select></br>
        <label>Paid date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
