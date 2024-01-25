@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2>Enrollment Record Data Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/EnrollmentSystem/create') }}" class="btn btn-success btn-sm" title="Add New BatchesSystem">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Enrollment
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.#</th>
                                        <th>Enrollment Nunber</th>
                                        <th>Batch</th>
                                        <th>Student</th>
                                        <th>Join Date</th>
                                        <th>fee</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($EnrollmentSystem as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enroll_no }}</td>
                                        <td>{{ $item->batch->name }}</td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->join_date }}</td>
                                        <td>{{ $item->fee }}</td>
                                        <td>
                                            <a href="{{ url('/EnrollmentSystem/' . $item->id) }}" title="View Courses"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/EnrollmentSystem/' . $item->id . '/edit') }}" title="Edit Courses"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/BatchesSystem' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete BatchesSystem" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
@endsection
