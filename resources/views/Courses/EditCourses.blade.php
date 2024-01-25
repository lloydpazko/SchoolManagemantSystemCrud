@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Edit Courses</div>
  <div class="card-body">

      <form action="{{ url('Courses/' .$Courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Courses->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Courses->name}}" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{$Courses->syllabus}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$Courses->duration()}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>
@stop
