@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">BatchesSystem Information</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Batch Name : {{ $BatchesSystem->name }}</h5>
        <p class="card-text">Course ID : {{ $BatchesSystem->course->name }}</p>
        <p class="card-text">Start Date : {{ $BatchesSystem->start_date }}</p>
  </div>

    </hr>

  </div>
</div>
</div>
@endsection
