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
        <h5 class="card-title">Name : {{ $Courses->name }}</h5>
        <p class="card-text">Syallbus : {{ $Courses->syllabus }}</p>
        <p class="card-text">Mobile : {{ $Courses->duration() }}</p>
  </div>

    </hr>

  </div>
</div>
</div>
@endsection
