@extends('layout')
@section('content')
<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">New Student Enrollies</div>
  <div class="card-body">

      <form action="{{ url('EnrollmentSystem') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment number</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
        <label>student id</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control"></br>
        <label>Join date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>
        <label>fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
