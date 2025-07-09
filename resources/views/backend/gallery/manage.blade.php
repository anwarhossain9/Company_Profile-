@extends('backend.master')

@section('title', 'Manage Gallery')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Gallery</h3>
                    <a href="{{ route('galleries.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Gallery Category Name</th>
                        <th>Gallery Image</th>
                        <th>Gallery Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $gallery->galleryCategory->gallery_category_name ?? ''}}</td>
                                <td><img src="{{ asset($gallery->gallery_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $gallery->gallery_title }}</td> 
                                <td>{!! $gallery->description !!}</td> 
                                <td>{{ $gallery->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="post" id="deleteItem">
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
