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
        @php
            $images = json_decode($banner->banner_image, true);
            $titles = explode(',', $banner->banner_title);
            $descriptions = explode(',', $banner->banner_description);
        @endphp

        @foreach ($images as $index => $image)
            <tr>
                <td>{{ $loop->parent->iteration }}{{ count($images) > 1 ? '-' . ($index + 1) : '' }}</td>
                <td>
                    <img src="{{ asset($image) }}" alt="Banner Image" style="height: 60px">
                </td>
                <td>{{ $titles[$index] ?? '—' }}</td>
                <td>{!! $descriptions[$index] ?? '—' !!}</td>
                <td>{{ $banner->status == 1 ? 'Published' : 'Unpublished' }}</td>
                @if ($index === 0) {{-- only show actions on first row --}}
                    <td class="d-flex" rowspan="{{ count($images) }}">
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="post" id="deleteItem">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger ms-1 delete-item">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
