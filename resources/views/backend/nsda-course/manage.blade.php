@extends('backend.master')

@section('title', 'Manage Nsda Course')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Nsda Course</h3>
                    <a href="{{ route('nsda_courses.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Batch No</th>
                        <th>Nsda Subject Name</th>
                        <th>Nsda Image</th>
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
                        <th>Reason Of choosing this Nsda</th>
                        <th>Job Sectors Title</th>
                        <th>Job Sectors Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($nsdaCourses as $nsdaCourse)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $nsdaCourse->batch_no }}</td>
                                <td>{{ $nsdaCourse->nsda_subject_name }}</td>
                                <td><img src="{{ asset($nsdaCourse->nsda_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $nsdaCourse->starts_date }}</td>
                                <td>{{ $nsdaCourse->deadline }}</td>
                                <td>{{ $nsdaCourse->duration }}</td> 
                                <td>{{ $nsdaCourse->class_per_week }}</td> 
                                <td>{{ $nsdaCourse->previous_price }}</td> 
                                <td>{{ $nsdaCourse->current_price }}</td> 
                                <td>{{ $nsdaCourse->total_class }}</td> 
                                <td>{{ $nsdaCourse->total_hours }}</td> 
                                <td>{{ $nsdaCourse->available_seat }}</td> 
                                <td>{{ $nsdaCourse->schedule }}</td> 
                                <td>{{ $nsdaCourse->venue }}</td> 
                                <td>{{ $nsdaCourse->installment1_amount }}</td> 
                                <td>{{ $nsdaCourse->installment2_amount }}</td> 
                                <td>{{ $nsdaCourse->instructor_name }}</td>
                                <td>{{ $nsdaCourse->instructor_email_link}}</td>  
                                <td>{{ $nsdaCourse->instructor_facebook_link}}</td> 
                                <td>{{ $nsdaCourse->instructor_linkdin_link}}</td> 
                                <td>{{ $nsdaCourse->instructor_twiter_link}}</td>  
                                <td>{!! $nsdaCourse->eligibility !!}</td>
                                <td>{!! $nsdaCourse->short_description !!}</td>
                                <td>{!! $nsdaCourse->long_description !!}</td> 
                                <td>{!! $nsdaCourse->curriculum !!}</td> 
                                <td>{!! $nsdaCourse->faqs !!}</td> 
                                <td>{!! $nsdaCourse->reason_of_choosing_this_nsda !!}</td> 
                                <td>{{ $nsdaCourse->job_sectors_title }}</td> 
                                <td>{!! $nsdaCourse->job_sectors_description !!}</td> 
                                <td>{{ $nsdaCourse->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('nsda_courses.edit', $nsdaCourse->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('nsda_courses.destroy', $nsdaCourse->id) }}" method="post" id="deleteItem">
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
