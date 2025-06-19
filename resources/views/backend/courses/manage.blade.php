@extends('backend.master')

@section('title', 'Manage course')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage course</h3>
                    <a href="{{ route('courses.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Course Category</th>
                        <th>Course Type</th>
                        <th>Batch No</th>
                        <th>Course Name</th>
                        <th>Course Image</th>
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
                        <th>Instructor Social Media</th>
                        <th>Eligibility</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th>curriculum</th>
                        <th>Faqs</th>
                        <th>Reason Of choosing this Course</th>
                        <th>Job Sectors Title</th>
                        <th>Job Sectors Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->course_category }}</td>
                                <td>{{ $course->course_type }}</td>
                                <td>{{ $course->batch_no }}</td>
                                <td><img src="{{ asset($course->course_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $course->starts_date }}</td>
                                <td>{{ $course->deadline }}</td>
                                <td>{{ $course->duration }}</td> 
                                <td>{{ $course->class_per_week }}</td> 
                                <td>{{ $course->previous_price }}</td> 
                                <td>{{ $course->current_price }}</td> 
                                <td>{{ $course->total_class }}</td> 
                                <td>{{ $course->total_hours }}</td> 
                                <td>{{ $course->available_seat }}</td> 
                                <td>{{ $course->schedule }}</td> 
                                <td>{{ $course->venue }}</td> 
                                <td>{{ $course->installment1_amount }}</td> 
                                <td>{{ $course->installment2_amount }}</td> 
                                <td>{{ $course->instructor_name }}</td> 
                                <td>{{ $course->instructor_social_media }}</td> 
                                <td>{{ $course->eligibility }}</td>
                                <td>{{ $course->short_description }}</td>
                                <td>{{ $course->long_description }}</td> 
                                <td>{{ $course->curriculum }}</td> 
                                <td>{{ $course->faqs }}</td> 
                                <td>{{ $course->reason_of_choosing_this_course }}</td> 
                                <td>{{ $course->job_sectors_title }}</td> 
                                <td>{{ $course->job_sectors_description }}</td> 
                                <td>{{ $course->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="post" id="deleteItem">
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
