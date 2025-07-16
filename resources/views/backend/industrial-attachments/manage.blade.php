@extends('backend.master')

@section('title', 'Manage Industrial Attachment')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Industrial Attachment</h3>
                    <a href="{{ route('industrial_attachments.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Industrial Attachment Category Name</th>
                        <th>Batch No</th>
                        <th>Industrial Attachment Course Name</th>
                        <th>Industrial Attachment Course Image</th>
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
                        <th>Instructor Image</th>
                        <th>Instructor Description</th>
                        <th>Instructor Designation</th>
                        <th>Instructor Email Link</th>
                        <th>Instructor Facebook Link</th>
                        <th>Instructor Linkdin Link</th>
                        <th>Instructor Twiter Link</th>
                        <th>Eligibility</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th>curriculum</th>
                        <th>Faqs</th>
                        <th>Reason Of choosing this Industrial Attachment</th>
                        <th>Job Sectors Title</th>
                        <th>Job Sectors Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($industrialAttachments as $industrialAttachment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $industrialAttachment->industrialAttachmentCategory->industrial_attachment_category_name ?? ''}}</td>
                                <td>{{ $industrialAttachment->batch_no }}</td>
                                <td>{{ $industrialAttachment->industrial_attachment_course_name }}</td>
                                <td><img src="{{ asset($industrialAttachment->industrial_attachment_course_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $industrialAttachment->starts_date }}</td>
                                <td>{{ $industrialAttachment->deadline }}</td>
                                <td>{{ $industrialAttachment->duration }}</td> 
                                <td>{{ $industrialAttachment->class_per_week }}</td> 
                                <td>{{ $industrialAttachment->previous_price }}</td> 
                                <td>{{ $industrialAttachment->current_price }}</td> 
                                <td>{{ $industrialAttachment->total_class }}</td> 
                                <td>{{ $industrialAttachment->total_hours }}</td> 
                                <td>{{ $industrialAttachment->available_seat }}</td> 
                                <td>{{ $industrialAttachment->schedule }}</td> 
                                <td>{{ $industrialAttachment->venue }}</td> 
                                <td>{{ $industrialAttachment->installment1_amount }}</td> 
                                <td>{{ $industrialAttachment->installment2_amount }}</td> 
                                <td>{{ $industrialAttachment->instructor_name }}</td>
                                <td><img src="{{ asset($industrialAttachment->instructor_image )}}" alt="" style="height: 60px"></td>
                                <td>{!! $industrialAttachment->instructor_description !!}</td>
                                <td>{{ $industrialAttachment->instructor_designation }}</td>
                                <td>{{ $industrialAttachment->instructor_email_link}}</td>  
                                <td>{{ $industrialAttachment->instructor_facebook_link}}</td> 
                                <td>{{ $industrialAttachment->instructor_linkdin_link}}</td> 
                                <td>{{ $industrialAttachment->instructor_twiter_link}}</td> 
                                <td>{!! $industrialAttachment->eligibility !!}</td>
                                <td>{!! $industrialAttachment->short_description !!}</td>
                                <td>{!! $industrialAttachment->long_description !!}</td> 
                                <td>{!! $industrialAttachment->curriculum !!}</td> 
                                <td>{!! $industrialAttachment->faqs !!}</td> 
                                <td>{!! $industrialAttachment->reason_of_choosing_this_industrial_attachment !!}</td> 
                                <td>{{ $industrialAttachment->job_sectors_title }}</td> 
                                <td>{!! $industrialAttachment->job_sectors_description !!}</td> 
                                <td>{{ $industrialAttachment->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('industrial_attachments.edit', $industrialAttachment->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('industrial_attachments.destroy', $industrialAttachment->id) }}" method="post" id="deleteItem">
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
