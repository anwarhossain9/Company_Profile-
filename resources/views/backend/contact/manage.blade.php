@extends('backend.master')

@section('title', 'Manage contact')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage contact</h3>
                    <a href="{{ route('contacts.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Office Address</th>
                        <th>Phone No</th>
                        <th>Contact Person Name</th>
                        <th>Contact Person Designation</th>
                        <th>Contact Time</th>
                        <th>Email Link</th>
                        <th>Facebook Link</th>
                        <th>Instagram Link</th>
                        <th>Linkedin Link</th>
                        <th>Youtube Link</th>
                        <th>Twitter Link</th>
                        <th>Google Map Link</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->office_address }}</td>
                                <td>{{ $contact->phone_no }}</td> 
                                <td>{{ $contact->contact_person_name }}</td> 
                                <td>{{ $contact->contact_person_designation }}</td> 
                                <td>{{ $contact->contact_time}}</td> 
                                <td>{{ $contact->email_link  }}</td> 
                                <td>{{ $contact->facebook_link  }}</td> 
                                <td>{{ $contact->instagram_link  }}</td> 
                                <td>{{ $contact->linkedin_link  }}</td> 
                                <td>{{ $contact->youtube_link  }}</td> 
                                <td>{{ $contact->twitter_link  }}</td> 
                                <td>{{ $contact->google_map_link  }}</td>  
                                <td>{{ $contact->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post" id="deleteItem">
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
