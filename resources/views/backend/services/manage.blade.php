@extends('backend.master')

@section('title', 'Manage service')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage service</h3>
                    <a href="{{ route('services.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Service Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Service Provider Name</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->service_title }}</td>
                                <td>{!! $service->description !!}</td>
                                <td><img src="{{ asset($service->image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $service->service_provider_name }}</td>
                                <td>{!! $service->note !!}</td> 
                                <td>{{ $service->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="post" id="deleteItem">
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
