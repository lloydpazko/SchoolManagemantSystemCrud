@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Payment Information</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Enrollment No. : {{ $PaymentSystemReleaseReceipt->enrollment_id }}</h5>
        <p class="card-text">Paid Date : {{ $PaymentSystemReleaseReceipt->course->name }}</p>
        <p class="card-text">Amount : {{ $PaymentSystemReleaseReceipt->amount }}</p>
  </div>
    </hr>

  </div>
</div>
</div>
@endsection
