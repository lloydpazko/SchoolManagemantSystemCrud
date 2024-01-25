@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Edit Batch information</div>
  <div class="card-body">

      <form action="{{ url('BatchesSystem/' .$BatchesSystem->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$BatchesSystem->id}}" id="id" />
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" value="{{$BatchesSystem->name}}" class="form-control"></br>
        <label>Course ID</label></br>
        {{-- <input type="text" name="course_id" id="course_id" value="{{$BatchesSystem->course->name}}" class="form-control"></br> --}}

        <select name="course_id" id="course_id" class="form-control">
            @foreach($courses as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select></br>


        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$BatchesSystem->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
