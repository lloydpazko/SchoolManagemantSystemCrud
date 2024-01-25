@extends('layout')
@section('content')

<br>
<br>
<br>
<div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2>Batch list record</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/BatchesSystem/create') }}" class="btn btn-success btn-sm" title="Add New BatchesSystem">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Batch
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Batch Name</th>
                                        <th>Course ID</th>
                                        <th>Start Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($BatchesSystem as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->course->name }}</td>
                                        <td>{{ $item->start_date }}</td>

                                        <td>
                                            <a href="{{ url('/BatchesSystem/' . $item->id) }}" title="View Batches"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/BatchesSystem/' . $item->id . '/edit') }}" title="Edit BatchesSystem"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

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
