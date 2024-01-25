@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">New Courses</div>
  <div class="card-body">

      <form action="{{ url('Courses') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
        <label>duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
