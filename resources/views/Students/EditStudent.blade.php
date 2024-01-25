@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">Edit Students</div>
  <div class="card-body">

      <form action="{{ url('Students/' .$Students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Students->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$Students->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$Students->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
</div>

@stop
