@extends('backend.master')

@section('title', 'Manage Gallery')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Gallery</h3>
                    <a href="{{ route('gallery_categories.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Gallery Category Image</th>
                        <th>Gallery category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($galleryCategories as $galleryCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($galleryCategory->gallery_category_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $galleryCategory->gallery_category_name }}</td> 
                                <td>{{ $galleryCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('gallery_categories.edit', $galleryCategory->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('gallery_categories.destroy', $galleryCategory->id) }}" method="post" id="deleteItem">
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
