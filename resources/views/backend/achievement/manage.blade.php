@extends('backend.master')

@section('title', 'Manage achievement')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage achievement</h3>
                    <a href="{{ route('achievements.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th> Achievement Image</th>
                        <th>Achievement Title</th>
                        <th>Achievement Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($achievements as $achievement)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($achievement->achievement_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $achievement->achievement_title }}</td>
                                <td>{!! $achievement->achievement_description !!}</td> 
                                <td>{{ $achievement->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('achievements.edit', $achievement->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('achievements.destroy', $achievement->id) }}" method="post" id="deleteItem">
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
