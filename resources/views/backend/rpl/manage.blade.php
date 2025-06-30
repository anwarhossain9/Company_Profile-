@extends('backend.master')

@section('title', 'Manage Rpl')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage rpl</h3>
                    <a href="{{ route('rpls.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Batch No</th>
                        <th>Rpl Subject Name</th>
                        <th>Rpl Image</th>
                        <th>Starts Date</th>
                        <th>Deadline</th>
                        <th>Duration</th>
                        <th>Class Per Week</th>
                        <th>Previous Price</th>
                        <th>Current Price</th>
                        <th>Total Class</th>
                        <th>Total Hours</th>
                        <th>Available Seat</th>
                        <th>Schedule</th>
                        <th>Venue</th>
                        <th>Installment 1 Amount</th>
                        <th>Installment 2 Amount</th>
                        <th>Instructor Name</th>
                        <th>Instructor Email Link</th>
                        <th>Instructor Facebook Link</th>
                        <th>Instructor Linkdin Link</th>
                        <th>Instructor Twiter Link</th>
                        <th>Eligibility</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th>curriculum</th>
                        <th>Faqs</th>
                        <th>Reason Of choosing this rpl</th>
                        <th>Job Sectors Title</th>
                        <th>Job Sectors Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($rpls as $rpl)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rpl->batch_no }}</td>
                                <td>{{ $rpl->rpl_subject_name }}</td>
                                <td><img src="{{ asset($rpl->rpl_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $rpl->starts_date }}</td>
                                <td>{{ $rpl->deadline }}</td>
                                <td>{{ $rpl->duration }}</td> 
                                <td>{{ $rpl->class_per_week }}</td> 
                                <td>{{ $rpl->previous_price }}</td> 
                                <td>{{ $rpl->current_price }}</td> 
                                <td>{{ $rpl->total_class }}</td> 
                                <td>{{ $rpl->total_hours }}</td> 
                                <td>{{ $rpl->available_seat }}</td> 
                                <td>{{ $rpl->schedule }}</td> 
                                <td>{{ $rpl->venue }}</td> 
                                <td>{{ $rpl->installment1_amount }}</td> 
                                <td>{{ $rpl->installment2_amount }}</td> 
                                <td>{{ $rpl->instructor_name }}</td>
                                <td>{{ $rpl->instructor_email_link}}</td>  
                                <td>{{ $rpl->instructor_facebook_link}}</td> 
                                <td>{{ $rpl->instructor_linkdin_link}}</td> 
                                <td>{{ $rpl->instructor_twiter_link}}</td>  
                                <td>{!! $rpl->eligibility !!}</td>
                                <td>{!! $rpl->short_description !!}</td>
                                <td>{!! $rpl->long_description !!}</td> 
                                <td>{!! $rpl->curriculum !!}</td> 
                                <td>{!! $rpl->faqs !!}</td> 
                                <td>{!! $rpl->reason_of_choosing_this_rpl !!}</td> 
                                <td>{{ $rpl->job_sectors_title }}</td> 
                                <td>{!! $rpl->job_sectors_description !!}</td> 
                                <td>{{ $rpl->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('rpls.edit', $rpl->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('rpls.destroy', $rpl->id) }}" method="post" id="deleteItem">
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
