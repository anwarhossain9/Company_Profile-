@extends('backend.master')

@section('title', 'Manage Banner')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage banner</h3>
                    <a href="{{ route('banners.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">

                   
                  <table class="table" id="file-datatable">
    <thead>
        <tr>
            <th>#</th>
            <th>Banner Image</th>
            <th>Banner Title</th>
            <th>Banner Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody> 

     @foreach($banners as $banner)
                            <tr>   
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($banner->banner_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $banner->banner_title }}</td> 
                                <td>{!! $banner->banner_description !!}</td>
                                <td>{{ $banner->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="post" id="deleteItem">
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
