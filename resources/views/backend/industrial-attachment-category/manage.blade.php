@extends('backend.master')

@section('title', 'Manage Industrial Attachment Category')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Industrial Attachment Category</h3>
                    <a href="{{ route('industrial_attachment_categories.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Industrial Attachment Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($industrialAttachmentCategories as $industrialAttachmentCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $industrialAttachmentCategory->industrial_attachment_category_name }}</td> 
                                <td>{{ $industrialAttachmentCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('industrial_attachment_categories.edit', $industrialAttachmentCategory->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('industrial_attachment_categories.destroy', $industrialAttachmentCategory->id) }}" method="post" id="deleteItem">
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
