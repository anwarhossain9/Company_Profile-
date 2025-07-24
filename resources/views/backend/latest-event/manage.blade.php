@extends('backend.master')

@section('title', 'Manage Latest event')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage latestevent</h3>
                    <a href="{{ route('latest_events.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Latest Event</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($latestEvents as $latestEvent)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $latestEvent->latest_event }}</td>
                                <td>{{ $latestEvent->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('latest_events.edit', $latestEvent->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('latest_events.destroy', $latestEvent->id) }}" method="post" id="deleteItem">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger ms-1 delete-item"><i class="fa fa-trash"></i></button>
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
    </div>
@endsection
