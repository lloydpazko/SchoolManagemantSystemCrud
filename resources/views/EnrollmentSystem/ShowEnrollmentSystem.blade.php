@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Courses Information</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Enrollment Number : {{ $EnrollmentSystem->enroll_id }}</h5>
        <h5 class="card-title">batch : {{ $EnrollmentSystem->batch_id }}</h5>
        <h5 class="card-title">student id : {{ $EnrollmentSystem->student_id }}</h5>
        <h5 class="card-title">join_date : {{ $EnrollmentSystem->join_date }}</h5>
        <h5 class="card-title">fee : {{ $EnrollmentSystem->fee }}</h5>
  </div>

    </hr>

  </div>
</div>
</div>
@endsection
