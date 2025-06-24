@extends('backend.master')

@section('title', 'Manage studentReview')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage studentReview</h3>
                    <a href="{{ route('student_reviews.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Review</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($studentReviews as $studentReview)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($studentReview->image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $studentReview->name }}</td> 
                                <td>{!! $studentReview->review !!}</td> 
                                <td>{{ $studentReview->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('student_reviews.edit', $studentReview->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('student_reviews.destroy', $studentReview->id) }}" method="post" id="deleteItem">
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
