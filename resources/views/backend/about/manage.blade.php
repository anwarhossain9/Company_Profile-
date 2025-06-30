@extends('backend.master')

@section('title', 'Manage About')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage about</h3>
                    <a href="{{ route('abouts.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Company Dream</th>
                        <th>Company Related Image</th>
                        <th>Company Story</th>
                        <th>Story Related Image</th>
                        <th>Goal</th>
                        <th>Purpose</th>
                        <th>Mission </th>
                        <th>Vission</th>
                        <th>Ceo Name</th>
                        <th>Ceo Designation</th>
                        <th>Ceo Word</th>
                        <th>Ceo Image</th>
                        <th>Director Name</th>
                        <th>Director Designation</th>
                        <th>Director Word</th>
                        <th>Director Image</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($abouts as $about)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{!! $about->company_dream !!}</td>
                                <td><img src="{{ asset($about->image_related_company )}}" alt="" style="height: 60px"></td>
                                <td>{!! $about->company_story !!}</td> 
                                <td><img src="{{ asset($about->story_related_image )}}" alt="" style="height: 60px"></td>
                                <td>{!! $about->goal !!}</td>
                                <td>{!! $about->purpose !!}</td>
                                <td>{!! $about->mission !!}</td>
                                <td>{!! $about->vission !!}</td>
                                <td>{{ $about->ceo_name }}</td>
                                <td>{{ $about->ceo_designation }}</td>
                                <td>{!! $about->ceo_word !!}</td>
                                <td><img src="{{ asset($about->ceo_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $about->director_name }}</td>
                                <td>{{ $about->director_designation }}</td>
                                <td>{!! $about->director_word !!}</td>
                                <td><img src="{{ asset($about->director_image )}}" alt="" style="height: 60px"></td>
                                <td>{{ $about->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('abouts.destroy', $about->id) }}" method="post" id="deleteItem">
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
