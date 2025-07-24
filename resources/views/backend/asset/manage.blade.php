@extends('backend.master')

@section('title', 'Manage Asset')

@section('body')


    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage asset</h3>
                    <a href="{{ route('assets.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Asset category Name</th>
                        <th>Top Image</th>
                        <th>Title</th>
                        <th>Asset Short Description</th>
                        <th>Occupation Name</th>
                        <th>Registration Link</th>
                        <th>Batch No</th>
                        <th>Asset Occupation Image</th>
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
                        <th>Reason Of choosing this Course</th>
                        <th>Job Sectors Title</th>
                        <th>Job Sectors Description</th>
                        <th>Benfits & Conditions</th>
                        <th>Necessary Documents</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($assets as $asset)
                            <tr>   
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $asset->assetCategory->asset_category_name ?? ''}}</td>
                                <td><img src="{{ asset($asset->top_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $asset->title }}</td> 
                                <td>{!! $asset->short_description_asset !!}</td> 
                                <td>{{ $asset->occupation_name }}</td> 
                                <td>{{ $asset->registration_link}}</td>
                                <td>{{ $asset->batch_no }}</td>
                                <td><img src="{{ asset($asset->asset_occupation_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $asset->starts_date }}</td>
                                <td>{{ $asset->deadline }}</td>
                                <td>{{ $asset->duration }}</td> 
                                <td>{{ $asset->class_per_week }}</td> 
                                <td>{{ $asset->previous_price }}</td> 
                                <td>{{ $asset->current_price }}</td> 
                                <td>{{ $asset->total_class }}</td> 
                                <td>{{ $asset->total_hours }}</td> 
                                <td>{{ $asset->available_seat }}</td> 
                                <td>{{ $asset->schedule }}</td> 
                                <td>{{ $asset->venue }}</td> 
                                <td>{{ $asset->installment1_amount }}</td> 
                                <td>{{ $asset->installment2_amount }}</td> 
                                <td>{{ $asset->instructor_name }}</td>
                                <td><img src="{{ asset($asset->instructor_image )}}" alt="" style="height: 60px"></td>
                                <td>{!! $asset->instructor_description !!}</td>
                                <td>{{ $asset->instructor_designation }}</td>
                                <td>{{ $asset->instructor_email_link}}</td>  
                                <td>{{ $asset->instructor_facebook_link}}</td> 
                                <td>{{ $asset->instructor_linkdin_link}}</td> 
                                <td>{{ $asset->instructor_twiter_link}}</td> 
                                <td>{!! $asset->eligibility !!}</td>
                                <td>{!! $asset->short_description !!}</td>
                                <td>{!! $asset->long_description !!}</td> 
                                <td>{!! $asset->curriculum !!}</td> 
                                <td>{!! $asset->faqs !!}</td> 
                                <td>{!! $asset->reason_of_choosing_this_course !!}</td> 
                                <td>{{ $asset->job_sectors_title }}</td> 
                                <td>{!! $asset->job_sectors_description !!}</td> 
                                <td>{!! $asset->benefits_conditions!!}</td>
                                <td>{!! $asset->necessary_documents!!}</td> 
                                <td>{{ $asset->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('assets.edit', $asset->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('assets.destroy', $asset->id) }}" method="post" id="deleteItem">
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
