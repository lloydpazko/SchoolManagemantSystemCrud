@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Students Information</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>

    </hr>

  </div>
  <div class="card">
    <div class="card-header">Students Information</div>
    <div class="card-body">


          <div class="card-body">
          <h5 class="card-title">Name : {{ $students->name }}</h5>
          <p class="card-text">Address : {{ $students->address }}</p>
          <p class="card-text">Mobile : {{ $students->mobile }}</p>
    </div>

      </hr>

    </div>
</div>
@endsection
