@extends('layout')
@section('content')
<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Edit Enrollment Data Record</div>
  <div class="card-body">

      <form action="{{ url('EnrollmentSystem/' .$EnrollmentSystem->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$EnrollmentSystem->id}}" id="id" />
        <label> Enrollment number</label></br>
        <input type="text" name="Enroll_id" id="enroll_id" value="{{$EnrollmentSystem->enroll_no}}" class="form-control"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batct_id" value="{{$EnrollmentSystem->batch_id}}" class="form-control"></br>
        <label>Student ID</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$EnrollmentSystem->student_id}}" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_id" id="join_date" value="{{$EnrollmentSystem->join_date}}" class="form-control"></br>
        <label>fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$EnrollmentSystem->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
