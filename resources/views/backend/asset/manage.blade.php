@extends('backend.master')

@section('title', 'Manage asset')

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
                        <th>Short Description</th>
                        <th>Occupation Name</th>
                        <th>Registration Link</th>
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
                                <td>{!! $asset->short_description !!}</td> 
                                <td>{{ $asset->occupation_name }}</td> 
                                <td>{{ $asset->registration_link}}</td>
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
