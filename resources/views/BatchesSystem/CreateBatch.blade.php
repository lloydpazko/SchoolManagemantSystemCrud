@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Batch</div>
  <div class="card-body">

      <form action="{{ url('BatchesSystem') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Select Types of Courses</label></br>
        {{-- <input type="text" name="course_id" id="course_id" class="form-control"></br> --}}
        <select name="course_id" id="course_id" class="form-control">
            @foreach($courses as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select></br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
